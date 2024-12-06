<?php

namespace App\Services\User;

use App\Repositories\Interfaces\UserRepositoryInterface;

class UpdateUserService
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute($id, array $data)
    {
        // Additional business logic (if needed)
        return $this->userRepository->updateUser($id, $data);
    }
}
