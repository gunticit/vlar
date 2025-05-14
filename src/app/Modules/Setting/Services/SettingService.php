<?php

namespace App\Modules\Setting\Services;

use App\Repositories\Setting\SettingRepositoryInterface;
use Illuminate\Validation\ValidationException;

class SettingService {
    protected $repository;

    public function __construct(SettingRepositoryInterface $repository)
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