<?php

namespace App\Http\Livewire;

use App\Models\Page;
use App\Models\Template;
use App\Models\User;
use Facebook\Exceptions\FacebookSDKException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Templates extends Component
{
    public $templates;
    public $selectedTemplate = null;

    protected $listeners = ["duplicateTemplate", "delete", "selectFacebookPage", "shareToFacebook"];

    public function render()
    {
        return view('livewire.templates');
    }

    public function showDuplicateModal($template_id)
    {
        $this->selectedTemplate = $template_id;
        $this->dispatchBrowserEvent('showDuplicateTemplateModal');
    }

    public function duplicateTemplate($template_name)
    {
        $foundTemplate = Template::find($this->selectedTemplate);
        $templateCode = substr(uniqid(), 7);
        $fileName = 'template_images/template_' . $templateCode . '.png';
        $jsonName = 'templates_json/template_' . $templateCode . '.json';
        File::copy(public_path($foundTemplate->image_path), public_path($fileName));
        File::copy(public_path($foundTemplate->json_path), public_path($jsonName));
        $isCreated = Template::create([
            'image_path' => $fileName,
            'json_path' => $jsonName,
            'template_name' => $template_name,
            'template_owner' => Auth::user()->id,
            'dimension' => $foundTemplate->dimension,
        ]);
        if (!$isCreated) :
            session()->flash('error', 'An error occurred duplicating templates');
        else :
            session()->flash('message', 'Template Duplicated successfully');
        endif;
        return redirect()->to('dashboard/designs/my-designs');
    }

    public function setTemplateToDelete($template_id)
    {
        $this->selectedTemplate = $template_id;
        $this->dispatchBrowserEvent('showDeleteTemplateModal');
    }

    public function delete()
    {
        $isDeleted = Template::find($this->selectedTemplate)->delete();
        if (!$isDeleted) :
            session()->flash('error', 'An error trying to delete template');
        else :
            session()->flash('message', 'Template deleted successfully');
        endif;
        return redirect()->to('dashboard/designs/my-designs');
    }

    public function setTemplateToShare($template_id)
    {
        $this->selectedTemplate = $template_id;
        $this->dispatchBrowserEvent('showShareTemplateModal');
    }

    public function selectFacebookPage()
    {
        if (!Auth::check()) :
            $this->dispatchBrowserEvent('showFailureModal', ['title' => 'Error', 'message' => 'Please login to share to facebook']);
            return;
        endif;

        if (empty(Auth::user()->facebook_token) || is_null(Auth::user()->facebook_token)) :
            $this->dispatchBrowserEvent('showFailureModal', ['title' => 'Error', 'message' => 'Please connect a facebook account']);
            return;
        endif;

        $myPages = User::find(Auth::id())->myPages;

        if (count($myPages) == 0) :
            $this->dispatchBrowserEvent('showFailureModal', ['title' => 'Error', 'message' => 'No Facebook page found']);
            return;
        endif;

        $this->dispatchBrowserEvent('showSelectPageModal', $myPages);
    }

    public function shareToFacebook($selectedPage)
    {
        if (empty($selectedPage)) :
            $this->dispatchBrowserEvent('showFailureModal', ['title' => 'Error', 'message' => 'Please select a page to share to']);
            return;
        endif;

        if (empty($this->selectedTemplate)) :
            $this->dispatchBrowserEvent('showFailureModal', ['title' => 'Error', 'message' => 'Please select a design to share']);
            return;
        endif;

        $foundTemplate = Template::find($this->selectedTemplate);
        if (!$foundTemplate) :
            $this->dispatchBrowserEvent('showFailureModal', ['title' => 'Error', 'message' => 'Invalid template selected']);
            return;
        endif;

        $foundPage = Page::find($selectedPage);

        if (!$foundPage) :
            $this->dispatchBrowserEvent('showFailureModal', ['title' => 'Error', 'message' => 'Invalid Page selected']);
            return;
        endif;

        try {
            // dd(url('template_images/' . $foundTemplate->image_path));
            $fb = resolve('Facebook\Facebook');
            $post = $fb->post('/' . $foundPage->page_facebook_id . '/photos', [
                'message' => 'Testing Images',
                'url' => url('public/' . $foundTemplate->image_path)
            ], $foundPage->access_token);

            $post = $post->getGraphNode()->asArray();
            if (isset($post['id'])) :
                $this->dispatchBrowserEvent('showSuccessModal', ['title' => 'Successful', 'message' => 'Your Post was successful']);
                return;
            endif;
        } catch (FacebookSDKException $e) {
            // $this->dispatchBrowserEvent('showSuccessModal', ['title' => 'Successful', 'message' => 'Your Post was successful']);
            dd($e);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }
}
