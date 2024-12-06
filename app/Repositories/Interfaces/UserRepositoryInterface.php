<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface
{

    public function createUser(array $data);

    public function updateUser($id, array $data);

}


