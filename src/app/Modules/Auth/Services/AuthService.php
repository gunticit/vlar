<?php

namespace App\Modules\Auth\Services;

use App\Modules\Auth\Repositories\AuthRepositoryInterface;
use Illuminate\Validation\ValidationException;

class AuthService {
    protected $repository;

    public function __construct(AuthRepositoryInterface $repository)
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
}