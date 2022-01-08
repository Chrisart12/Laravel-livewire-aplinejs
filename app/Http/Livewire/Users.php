<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\UserInterface;
use Illuminate\Support\Facades\App;

class Users extends Component
{
    use WithPagination;
    
    public $userById;
    public $show = false;
    public $showEdit = false;
    public $paginate = 10;
    public $search = "";
    
   

    protected $listeners = [
        'toto' => 'remove',
        'closeShowUser' => 'onCloseShowUser',
        'showEdit' => 'onShowEdit',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        return view('livewire.users', [
            'users' => App::make(UserInterface::class)->getAll($this->paginate, $this->search)
        ]);
    }

    /**
     * Undocumented function
     *
     * @param [type] $users_id
     * @return void
     */
    public function show($users_id)
    {
       
        $this->userById = App::make(UserInterface::class)->getById($users_id);
       
        $this->show = true;

    }

    /**
     * Undocumented function
     *
     * @param [type] $users_id
     * @return void
     */
    public function edit($users_id)
    {
       
        $this->userById = App::make(UserInterface::class)->getById($users_id);
       
        $this->showEdit = true;

    }

    public function remove($id)
    {
        //Je reçoit un string que je transforme en array pour effacer plusieurs utilisateurs.
        $array_id = explode(",", $id);
    
        App::make(UserInterface::class)->delete($array_id);

        return $this->emit('saved');
    }

    public function onCloseShowUser()
    {
        $this->show = false;
        $this->showEdit = false;
        return true;
    }

    public function onShowEdit($users_id)
    {
        $this->show = false;
        $this->edit($users_id);
    }


    
}
