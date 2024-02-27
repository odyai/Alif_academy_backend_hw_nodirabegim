<?php

namespace App\Services;

use App\DTO\UserDTO;
use App\Interfaces\IUserRepository;

class UpdateUserService
{
    protected IUserRepository $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function updateUser(int $userId, UserDTO $userDTO)
    {
        return $this->userRepository->update($userId, $userDTO->toArray());
    }

}
