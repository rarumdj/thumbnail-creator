<?php

namespace App\Http\Livewire;

use App\Models\Template;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Vimeo\Laravel\Facades\Vimeo;

class VimeoVideos extends Component
{
    public $videos;
    public $uri;
    public $selectedThumbnail;

    protected $listeners = ["selectThumbnail", "changeThumbnail"];

    public function render()
    {
        return view('livewire.vimeo-videos');
    }

    public function editVimeoThumbnail($uri)
    {
        $this->uri = $uri;
        $this->dispatchBrowserEvent('mySavedThumbnail');
    }

    public function selectThumbnail($id)
    {
        $this->selectedThumbnail = $id;
        $this->dispatchBrowserEvent('confirmThumbnailChange');
    }

    public function changeThumbnail()
    {
        $selectedTemplate = Template::find($this->selectedThumbnail);
        if ($selectedTemplate) :
            Vimeo::setToken(Auth::user()->vimeo_token);
            $response = Vimeo::uploadImage($this->uri, public_path($selectedTemplate->image_path), true);
            dd($response);
        endif;
    }
}
