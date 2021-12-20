<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', 'AuthController@login')->name('login');
Route::get('/register', 'AuthController@register')->name('register');
Route::get('/', function () {
    return Redirect::to('/login');
});

Route::middleware(['auth'])->group(function () {
    //dashboard route
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    // bg-remover route
    Route::get('/dashboard/bg-remover', 'BackgroundRemoverController@index')->name('dashboard.bgremover.index');
    // img-explorer route
    Route::get('/dashboard/image-explorer', 'ImageExplorerController@index')->name('dashboard.imgexplorer.index');
    // copywriter route
    Route::get('/dashboard/copywriter', 'CopywriterController@index')->name('dashboard.copywriter.index');
    Route::get('/dashboard/copywriter/creator', 'CopywriterController@copyCreator')->name('dashboard.copywriter.creator');
    // creator routes
    Route::get('/dashboard/designs/my-designs', 'CreatorController@index')->name('dashboard.creator.index');
    Route::get('/dashboard/templates/{type}', 'CreatorController@search');
    // workspace routes
    Route::get('/dashboard/workspace', 'WorkspaceController@index')->name('dashboard.workspace.index');
    Route::get('/dashboard/workspace/{id}', 'WorkspaceController@show')->name('dashboard.workspace.show');
    Route::post('/dashboard/workspace', 'WorkspaceController@store')->name('dashboard.workspace.store');
    Route::post('/dashboard/workspace/update', 'WorkspaceController@update')->name('dashboard.workspace.update');
    Route::get('/dashboard/workspace/delete/{id}', 'WorkspaceController@destroy')->name('workspace.delete');
    // resellers routes
    Route::get('/dashboard/resellers', 'ResellersController@index')->name('dashboard.resellers.index');
    Route::post('/reseller', 'ResellersController@create')->name('reseller.create');
    // profile routes
    Route::get('/dashboard/profile/{id}', 'ProfileController@index')->name('dashboard.profile.index');
    Route::get('/dashboard/profile/{id}/password', 'PasswordController@index')->name('dashboard.profile.password');
    Route::get('/dashboard/profile/{id}/social-account', 'SocialAccountController@index')->name('dashboard.profile.social-account');
    Route::get('/social/youtube', 'SocialAccountController@youtubeAuth');
    Route::get('/social/myVideos', 'SocialAccountController@getMyVideos');

    // CONNECTIONS
    Route::get('/dashboard/connections/thumbnail', 'SocialAccountController@selectVideo')->name('dashboard.connections.index');
    Route::get('/dashboard/connections/youtube', 'SocialAccountController@getMyVideos')->name('dashboard.connections.youtube');
    Route::get('/dashboard/connections/vimeo', 'SocialAccountController@getVimeoVideos')->name('dashboard.connections.vimeo');
    Route::get('/social/getYoutubeAuthUrl', 'SocialAccountController@getYoutubeAuthUrl');
    Route::get('/social/getVimeoAuthUrl', 'SocialAccountController@getVimeoAuthUrl');
    Route::get('/social/vimeo/verify', 'SocialAccountController@vimeoAuth');
    Route::get('/social/youtube/verify', 'SocialAccountController@youtubeAuth');
    Route::get('/social/facebook/redirect', 'SocialAccountController@facebookAuthRedirect')->name('facebook.redirect');
    Route::get('/social/facebook/auth', 'SocialAccountController@facebookCallback');

    // CREATOR
    Route::post('/creator/save', 'CreatorController@saveMyDesign');
    Route::post('/creator/saveTemplate', 'CreatorController@store');
    Route::get('/creator', 'ThumbnailCreatorController@index')->name('app.creator');
    Route::get('/creator/getdetails/{id}/{temp?}', 'ThumbnailCreatorController@show');
    Route::get('/creator/{id}/{temp}', 'ThumbnailCreatorController@index');
    Route::get('/creator/{id}', 'ThumbnailCreatorController@index');
    Route::post('/creator/removeBackground', 'CreatorController@removeBackground');
});
// creator
// Emmylexo@