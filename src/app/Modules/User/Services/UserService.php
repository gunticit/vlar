<?php

namespace App\Services;

use App\Modules\User\Repositories\UserRepositoryInterface; // Ensure this interface exists or adjust accordingly
use Illuminate\Validation\ValidationException;

class UserService {
    protected $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function list($request){
        $data = $this->repository->list($request);
        return $data;
    }

    public function create($request){
        $data = $this->filterData($request);
        return $this->repository->create($data);
    }

    private function filterData($request): array{
        return array(
            'title' => $request->title,
            'content' => $request->content
        );
    }

    public function getRoles($userId)
    {
        $user = $this->repository->find($userId);
        if (!$user) {
            throw new \Exception("User not found");
        }
        return $user->roles;
    }

    public function assignRole($userId, $roleId)
    {
        $user = $this->repository->find($userId);
        if (!$user) {
            throw new \Exception("User not found");
        }
        $user->roles()->attach($roleId);
        return $user->roles;
    }

    public function removeRole($userId, $roleId)
    {
        $user = $this->repository->find($userId);
        if (!$user) {
            throw new \Exception("User not found");
        }
        $user->roles()->detach($roleId);
        return $user->roles;
    }
}
