<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Repositories\UserInterface;
use Illuminate\Support\Facades\App;

class EditUser extends Component
{

    public $user;
    public $firstname;
    public $lastname;
    public $age;
    public $city;
    public $email;
    public $userID;

    public function mount($user)
    {
        $this->user = $user;
        $this->firstname = $user->firstname;
        $this->lastname = $user->lastname;
        $this->age = $user->age;
        $this->city = $user->city;
        $this->email = $user->email;
        $this->userID = $this->user->id;
    }

    public function render()
    {
        return view('livewire.edit-user');
    }

    public function closeUser()
    {
        $this->emit('closeShowUser');
        // $this->emit('sendFlashMessage');
    }

    public function updateUser($user_id)
    {

    
        $user_id = (int)$user_id;

        $validatedData = $this->validate([
            'firstname' => 'required|string|min:2|max:45',
            'lastname' => 'required|string|min:2|max:45',
            'age' => 'required|integer|min:6',
            'city' => 'required|string||min:6',
            'email' => 'required|string|email|max:45|unique:users,email,' . $this->userID,
        ]);

        App::make(UserInterface::class)->updateUser($user_id, $validatedData);

        $this->closeUser();

    }

    
}
