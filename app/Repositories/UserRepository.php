<?php

namespace App\Repositories;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function getUserById($id)
    {
        return $this->model->find($id);
    }

    public function createUser(array $data)
    {
        return $this->model->create($data);
    }

    public function updateUser($id, array $data){
        $user = $this->getUserById($id);
        return $user->update($data);

    }

}
