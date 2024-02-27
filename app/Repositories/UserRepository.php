<?php

namespace App\Repositories;




use App\DTO\UserDTO;
use App\Interfaces\IUserRepository;
use App\Models\User;

class UserRepository implements IUserRepository
{
    public function getUserById(int $userId): ?User
    {
        /**
         * @var User|null $user
         */
        $user= User::query()->find($userId);

        return $user;
    }

    /**
     * @param UserDTO $userDTO
     * @return User
     */
    public function createUser(UserDTO $userDTO): User
    {
        $user = new User();
        $user ->name = $userDTO->getName();
        $user ->email = $userDTO->getEmail();
        $user ->password = $userDTO->getPassword();
        $user->save();

        return $user;
    }

    public function getUserByEmail(string $email): ?User
    {
        /**
         * @var User|null $user
         */
        $user = User::query()->where('email' , $email)->first();
        return $user;
    }
}
