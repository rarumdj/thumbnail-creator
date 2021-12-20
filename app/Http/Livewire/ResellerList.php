<?php

namespace App\Http\Livewire;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ResellerList extends Component
{
    use PasswordValidationRules;

    public $resellerUsers;
    public $userSelected;
    public $state = [];

    protected $listeners = ["deleteUserConfirmed" => "deleteUser", "changePassword" => "updateUserPassword"];

    public function confirmUserDelete($userId)
    {
        $this->userSelected = $userId;
        $this->dispatchBrowserEvent('deleteUserModal_Show');
    }

    public function changeUserPassword($userId)
    {
        $this->userSelected = $userId;
        $this->dispatchBrowserEvent('changePasswordModal_show');
    }

    public function updateUserPassword($password, $password_confirm)
    {

        $myRequest = new HttpRequest();
        $myRequest->replace([
            "password" => $password,
            "password_confirmation" => $password_confirm
        ]);

        $v = Validator::make(
            $myRequest->all(),
            [
                'password' => $this->passwordRules(),
            ]
        );

        if ($v->fails()) :
            session()->flash('error', $v->errors()->first());
            return redirect()->to('dashboard/resellers');
        endif;

        $foundUser = User::find($this->userSelected);
        if (!$foundUser) :
            session()->flash('error', 'Selected user not found in our records');
            return redirect()->to('dashboard/resellers');
        endif;


        $isUpdated = $foundUser->update([
            'password' => Hash::make($myRequest->input('password'))
        ]);

        if (!$isUpdated) :
            session()->flash('error', 'An error occurred updating passwords');
            return redirect()->to('dashboard/resellers');
        endif;

        session()->flash('message', 'Password updated successfully.');
        return redirect()->to('dashboard/resellers');
    }

    public function deleteUser()
    {
        $isDeleted = User::find($this->userSelected)->delete();
        if (!$isDeleted) :
            session()->flash('error', 'An unexpected error occurred deleting user.');
            return redirect()->to('dashboard/resellers');
        endif;

        session()->flash('message', 'User deleted successfully.');
        return redirect()->to('dashboard/resellers');
    }



    public function render()
    {
        return view('livewire.reseller-list');
    }
}
