<?php

namespace App\Repositories;

use App\User;
use DB;

class UserRepository implements UserInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll($paginate, $search)
    {
        return $this->user::where("firstname", 'like', "%{$search}%")
                        ->orWhere("lastname", 'like', '%'. $search .'%')
                        ->orWhere("age", 'like', "%{$search}%")
                        ->orWhere("city", 'like', "%{$search}%")
                        ->orWhere("email", 'like', '%'. $search .'%')
                        ->paginate($paginate);
    }

    public function getById($id)
    {
        return $this->user::findOrFail($id);
    }

    public function delete($id)
    {
        return $this->user::destroy($id);
    }

    public function updateUser($user_id, $validatedData)
    {
        // dd($user_id);
        return DB::table('users')
                        ->where('id', $user_id)
                            ->update(
                                ['firstname' => $validatedData['firstname']],
                                ['lastname' => $validatedData['lastname']],
                                ['age' => $validatedData['age']],
                                ['city' => $validatedData['city']],
                                ['email' => $validatedData['email']]
                            );
    }


}