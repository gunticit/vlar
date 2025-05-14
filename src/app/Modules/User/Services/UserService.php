<?php

namespace App\Modules\User\Services;

use App\Modules\User\Repositories\UserRepository;

class UserService {
    protected $repository;

    public function __construct(UserRepository $repository)
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
