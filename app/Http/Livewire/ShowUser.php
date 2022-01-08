<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowUser extends Component
{

    public $user;


    public function mount($user)
    {
        $this->user = $user;
        // $this->show = $show;
    }

    public function render()
    {
        return view('livewire.show-user');
    }

    public function closeUser()
    {
        $this->emit('closeShowUser');
        // $this->emit('sendFlashMessage');
    }

    public function edit($id)
    {
        // dd($id);
        $this->emit('showEdit', $id);
        // $this->emit('sendFlashMessage');
    }
}
