<?php

namespace App\Http\Livewire;

use App\Models\Template;
use Google_Http_MediaFileUpload;
use Google_Service_YouTube;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class YoutubeVideos extends Component
{
    public $videos;
    public $videoId;
    public $selectedThumbnail;

    protected $listeners = ["selectThumbnail", "changeThumbnail"];

    public function render()
    {
        return view('livewire.youtube-videos');
    }

    public function editYoutubeThumbnail($videoId)
    {
        $this->videoId = $videoId;
        $this->dispatchBrowserEvent('mySavedThumbnail');
    }

    public function selectThumbnail($id)
    {
        $this->selectedThumbnail = $id;
        $this->dispatchBrowserEvent('confirmThumbnailChange');
    }

    public function changeThumbnail()
    {
        if (!is_null(Auth::user()->youtube_token)) :
            $client = new \Google\Client();
            $client->setAccessToken(Auth::user()->youtube_token);
            $youtube = new Google_Service_YouTube($client);
            if ($client->getAccessToken()) :

                try {
                    $selectedTemplate = Template::find($this->selectedThumbnail);
                    $chunkSizeBytes = 1 * 1024 * 1024;
                    $client->setDefer(true);
                    $setRequest = $youtube->thumbnails->set($this->videoId);
                    $media = new Google_Http_MediaFileUpload($client, $setRequest, 'image/png', null, true, $chunkSizeBytes);
                    $media->setFileSize(filesize(public_path($selectedTemplate->image_path)));

                    $status = false;
                    $handle = fopen(public_path($selectedTemplate->image_path), "rb");
                    while (!$status && !feof($handle)) {
                        $chunk = fread($handle, $chunkSizeBytes);
                        $status = $media->nextChunk($chunk);
                    }
                    fclose($handle);
                    session()->flash('message', 'Thumbnail updated successfully');
                } catch (\Google_Service_Exception $e) {
                    session()->flash('error', $e->getErrors()[0]['message']);
                } catch (\Google_Exception $e) {
                    session()->flash('error', $e->getMessage());
                } catch (\Throwable $th) {
                    session()->flash('error', $th->getMessage());
                }

            else :
                session()->flash('error', 'Invalid access token, Please reconnect your account');
            endif;
        else :
            session()->flash('error', 'Please connect a youtube account');
        endif;
        // REDIRECT
        redirect()->to('dashboard/connections/youtube');
    }
}
