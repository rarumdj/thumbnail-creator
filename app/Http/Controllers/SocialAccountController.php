<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\User;
use Google_Service_YouTube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Vimeo\Laravel\Facades\Vimeo;

class SocialAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $client = new \Google\Client();
        // $client->setAuthConfig(public_path('client_secret_957012429720-4pep97un85jkmvm7itskgd5gm8t307t7.apps.googleusercontent.com.json'));
        // $client->addScope(Google_Service_YouTube::YOUTUBE);
        // $client->setRedirectUri('http://127.0.0.1:8000/social/youtube');

        // return view('dashboard.profile.social-account')->with([
        //     'youtubeURL' => $client->createAuthUrl()
        // ]);
        return view('dashboard.profile.social-account');
    }

    public function selectVideo()
    {
        return view('dashboard.connections.index');
    }
    public function facebookAuthRedirect()
    {
        // 
        return Socialite::with('facebook')
            ->scopes(['pages_manage_posts'])
            ->redirect();
    }

    public function facebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $loggedInUser = User::find(Auth::user()->id);
        $loggedInUser->facebook_token = $user->token;
        $loggedInUser->facebook_id = $user->id;
        $loggedInUser->save();
        $response = $this->getUserPages($loggedInUser);
        if ($response === true) :
            return redirect('/dashboard/profile/maven-ti/social-account#')->with('message', 'Facebook Connection successful');
        else :
            return redirect('/dashboard/profile/maven-ti/social-account#')->with('error', $response);
        endif;
    }

    public function getUserPages(User $loggedInUser)
    {
        $fb = resolve('Facebook\Facebook');
        try {
            $response = $fb->get('/' . $loggedInUser->facebook_id . '/accounts', $loggedInUser->facebook_token);
            $userPages = $response->getGraphEdge();
            foreach ($userPages as $currentPage) :
                $tasks = array_values(json_decode($currentPage['tasks']));
                Page::create([
                    'name' => $currentPage['name'],
                    'access_token' => $currentPage['access_token'],
                    'page_facebook_id' => $currentPage['id'],
                    'tasks' => json_encode($tasks),
                    'user_id' => $loggedInUser->id
                ]);
            endforeach;
            return true;
        } catch (\Throwable $th) {
            error_log($th->getMessage());
            return $th->getMessage();
        }
    }

    public function getYoutubeAuthUrl()
    {
        $client = new \Google\Client();
        $client->setAuthConfig(public_path('client_secret_957012429720-4pep97un85jkmvm7itskgd5gm8t307t7.apps.googleusercontent.com.json'));
        $client->addScope([Google_Service_YouTube::YOUTUBE]);
        $client->setRedirectUri('http://127.0.0.1:8000/social/youtube/verify');
        return response()->json([
            "url" => $client->createAuthUrl()
        ]);
    }

    public function getVimeoAuthUrl()
    {
        $scopes = ['public', 'edit', 'upload'];
        $stateId = uniqid();
        session(['stateId' => $stateId]);
        $url = Vimeo::buildAuthorizationEndpoint('http://127.0.0.1:8000/social/vimeo/verify', $scopes, $stateId);
        return response()->json([
            "url" => $url
        ]);
    }

    public function youtubeAuth()
    {
        if (isset($_GET['code'])) {
            $client = new \Google\Client();
            $client->setAuthConfig(public_path('client_secret_957012429720-4pep97un85jkmvm7itskgd5gm8t307t7.apps.googleusercontent.com.json'));
            $client->addScope(Google_Service_YouTube::YOUTUBE);
            $client->setRedirectUri('http://127.0.0.1:8000/social/youtube/verify');
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
            $accessTokekn = $client->getAccessToken();
            $user_token = $accessTokekn['access_token'];
            $user = User::find(Auth::user()->id);
            $isUpdated = $user->update([
                'youtube_token' => $user_token
            ]);
            echo "<script> window.close(); </script>";
        }
    }

    public function vimeoAuth()
    {
        if (isset($_GET['code']) && isset($_GET['state'])) {
            if ($_GET['state'] == session('stateId')) :
                $token = Vimeo::accessToken($_GET['code'], 'http://127.0.0.1:8000/social/vimeo/verify');
                if (isset($token['body']['access_token'])) :
                    $user_token = $token['body']['access_token'];
                    $user = User::find(Auth::user()->id);
                    $isUpdated = $user->update([
                        'vimeo_token' => $user_token
                    ]);
                    if (!$isUpdated) {
                        echo "<script> alert('An error occurred trying to verify token. Please try again later') </script>";
                    }
                    echo "<script> window.close(); </script>";
                else :
                    echo "<script> alert('Invalid response received') </script>";
                endif;
            else :

            endif;
        }
    }

    public function getMyVideos()
    {
        if (!is_null(Auth::user()->youtube_token)) :
            $client = new \Google\Client();
            $client->setAccessToken(Auth::user()->youtube_token);
            $youtube = new Google_Service_YouTube($client);
            try {
                if ($client->getAccessToken()) :
                    $channelsResponse = $youtube->channels->listChannels('contentDetails', array(
                        'mine' => 'true',
                    ));

                    $videosArray = [];
                    foreach ($channelsResponse['items'] as $channel) :
                        $uploadsListId = $channel['contentDetails']['relatedPlaylists']['uploads'];
                        $playlistItemsResponse = $youtube->playlistItems->listPlaylistItems('snippet', array(
                            'playlistId' => $uploadsListId,
                            'maxResults' => 50
                        ));

                        foreach ($playlistItemsResponse['items'] as $playlistItem) :
                            $videosArray[] = $playlistItem;
                        endforeach;
                    endforeach;

                    $currentUser = User::find(Auth::user()->id);
                    $myTemplates = $currentUser->myTemplates();

                    return view('dashboard.connections.youtube')->with([
                        'videos' => $videosArray,
                        'templates' => $myTemplates
                    ]);

                else :
                    return view('dashboard.connections.youtube');
                endif;
            } catch (\Google_Service_Exception $e) {
                return view('dashboard.connections.youtube')->with('error', $e->getErrors()[0]['message'] . '. Please try reconnecting your account');
            } catch (\Throwable $th) {
                //throw $th;
                return view('dashboard.connections.youtube')->with('error', $th->getMessage() . '. Please try reconnecting your account');
            }

        else :
            return view('dashboard.connections.youtube');
        endif;
    }

    public function getVimeoVideos()
    {
        if (!is_null(Auth::user()->vimeo_token)) :
            $currentUser = User::find(Auth::user()->id);
            $myTemplates = $currentUser->myTemplates();
            Vimeo::setToken(Auth::user()->vimeo_token);
            $response = Vimeo::request('/me/videos', ['per_page' => 10], 'GET');
            // dd($response);
            if (isset($response['status']) && $response['status'] == 200) :
                $data = $response['body']['data'];
                return view('dashboard.connections.vimeo')->with([
                    'videos' => $data,
                    'templates' => $myTemplates
                ]);
            else :
                return view('dashboard.connections.vimeo')->with('error', $response['body']['error']);
            endif;

        else :
            return view('dashboard.connections.vimeo');
        endif;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
