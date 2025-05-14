<?php

namespace App\Modules\Member\Services;

use App\Modules\Member\Repositories\MemberRepositoryInterface;
use Illuminate\Validation\ValidationException;

class MemberService {
    protected $repository;

    public function __construct(MemberRepositoryInterface $repository)
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
