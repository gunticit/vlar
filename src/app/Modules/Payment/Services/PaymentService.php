<?php

namespace App\Modules\Payment\Services;

use App\Repositories\Payment\PaymentRepositoryInterface;
use Illuminate\Validation\ValidationException;

class PaymentService {
    protected $repository;

    public function __construct(PaymentRepositoryInterface $repository)
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