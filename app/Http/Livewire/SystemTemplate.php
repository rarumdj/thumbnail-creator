<?php

namespace App\Http\Livewire;

use App\Models\Template;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class SystemTemplate extends Component
{
    public $templates;
    public $temp;
    public $selectedTemplate;

    protected $listeners = ['saveTemplateConfirmed', 'saveSystemTemplate'];

    public function render()
    {
        return view('livewire.system-template');
    }

    public function setSelectedTemplate($id)
    {
        $this->selectedTemplate = $id;
        $this->dispatchBrowserEvent('showConfirmCopyModal');
    }

    public function saveTemplateConfirmed()
    {
        $this->dispatchBrowserEvent('showSaveSystemTemplateNameModal');
    }

    public function saveSystemTemplate($templateName)
    {
        $foundTemplate = Template::find($this->selectedTemplate);
        if (!$foundTemplate) :
            $this->dispatchBrowserEvent('showFailureModal', [
                'title' => 'Error',
                'message' => 'Template not found'
            ]);
        endif;
        $templateCode = substr(uniqid(), 7);
        $fileName = 'template_images/template_' . $templateCode . '.png';
        $jsonName = 'templates_json/template_' . $templateCode . '.json';
        File::copy(public_path($foundTemplate->image_path), public_path($fileName));
        File::copy(public_path($foundTemplate->json_path), public_path($jsonName));
        $isCreated = Template::create([
            'image_path' => $fileName,
            'template_id' => $templateCode,
            'json_path' => $jsonName,
            'template_name' => $templateName,
            'template_owner' => Auth::user()->id,
            'dimension' => $foundTemplate->dimension,
        ]);
        if (!$isCreated) :
            session()->flash('error', 'An error occurred saving templates');
        else :
            // session()->flash('message', 'Template Saved successfully');
            $this->dispatchBrowserEvent('showSuccessModal', [
                'title' => 'Template Saved',
                'message' => 'Template saved successfully'
            ]);
        endif;

        // return redirect()->to('dashboard/designs/my-designs');
    }
}
