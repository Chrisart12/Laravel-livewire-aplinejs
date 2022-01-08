<?php 

namespace App\Repositories;

interface UserInterface 
{
    public function getAll($paginate, $search);
    public function getById($id);
    public function delete($id);
}