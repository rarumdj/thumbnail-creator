<?php

namespace App\Http\Livewire;

use App\Models\Workspace;
use Livewire\Component;

class WorkspaceList extends Component
{

    public $workspaces;
    public $workspaceIdToDelete = null;

    protected $listeners = ['deleteWorkspaceConfirmed' => 'deleteWorkspace'];

    public function confirmDeleteWorkspace($id)
    {
        $this->workspaceIdToDelete = $id;
        $this->dispatchBrowserEvent('deleteWorkspaceModal_Show');
    }

    public function deleteWorkspace()
    {
        $isDeleted = Workspace::find($this->workspaceIdToDelete)->delete();
        if (!$isDeleted) :
            session()->flash('error', 'An unexpected error occurred deleting workspace.');
            return redirect()->to('dashboard/workspace');
        endif;

        session()->flash('message', 'Workspace deleted successfully.');
        return redirect()->to('dashboard/workspace');
    }

    public function render()
    {
        return view('livewire.workspace-list');
    }
}
