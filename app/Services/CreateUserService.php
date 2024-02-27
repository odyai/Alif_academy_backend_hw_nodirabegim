<?php


namespace App\Services;

use App\DTO\UserDTO;
use App\Exceptions\BusinessException;
use App\Interfaces\IUserRepository;
use App\Models\User;
use App\Repositories\UserRepository;

class CreateUserService
{


    public function __construct(private IUserRepository $repository)
    {

    }

    /**
     * @throws BusinessException
     */
    public function createUser(UserDTO $userDTO): User
    {
        $userEmail = $this->repository->getUserByEmail($userDTO->getEmail());
        if ($userEmail !== null){
            throw new BusinessException(__('messages.email_exists'));
        }

        return $this->repository->createUser($userDTO);

    }

}
