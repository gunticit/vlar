<?php
namespace App\Modules\Payment\Repositories;

interface PaymentRepositoryInterface
{
    public function list(Request $request);
}