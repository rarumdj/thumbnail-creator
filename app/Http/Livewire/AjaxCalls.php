<?php

namespace App\Http\Livewire;

use App\Models\Workspace;
use Livewire\Component;

class AjaxCalls extends Component
{
    public $ida;
    public $workspaceIdToDelete = null;

    public function mount($id)
    {
        $this->ida = $id;
    }

    public function render()
    {
        return view('livewire.ajax-calls', [
            'ids' => $this->ida
        ]);
    }
}
