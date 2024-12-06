<?php


namespace App\Services\User;

use App\Repositories\Interfaces\UserRepositoryInterface;

class CreateUserService
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(array $data)
    {
        // Additional business logic (if needed)
        return $this->userRepository->createUser($data);
    }
}
