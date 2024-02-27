<?php

namespace App\Http\Controllers;

use App\DTO\UserDTO;
use App\Exceptions\BusinessException;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Interfaces\IUserRepository;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\CreateUserService;
use Illuminate\Http\JsonResponse;


/**
 *
 */
class UserController extends Controller
{

    private IUserRepository $repository;


    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    public function index()
    {
        $users = $this->repository->getAll();
        return response()->json([
            'data' => $users
        ]);
    }

//    public function store(UserRequest $request): UserResource
//    {
//        $validatedData = $request->validated();
//
//
//        //$user = User::query()->create($validatedData);
//
//        $user = $this->userRepository->createUser(UserDTO::fromArray($validatedData));
//
//        return new UserResource($user);
//    }
    /**
     * @param UserRequest $request
     * @param CreateUserService $service
     * @return UserResource
     * @throws BusinessException
     */

    public function store(UserRequest $request, CreateUserService $service): UserResource
    {
        $validatedData = $request->validated();
        $user = $service->createUser(UserDTO::fromArray($validatedData));

        return new UserResource($user);
    }

    public function show(int $id): UserResource
    {

        $user = $this->repository->getUserById($id);
//        if ($user=== null){
//            return response()-> json([
//                'msg'=> 'sfdfdsfdsfsd'
//            ]);
//        }
        return new UserResource($user);
    }

    public function update(UserRequest $request, User $user): UserResource
    {
        $validatedData = $request->validated();

        $user->update($validatedData);

        return new UserResource($user);
    }

    public function destroy(User $user): JsonResponse
    {
        $user->delete();

        return response()->json(['message' => 'Record successfully deleted']);
    }
}

