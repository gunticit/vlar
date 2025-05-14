<?php
namespace App\Modules\Payment\Repositories;

use Illuminate\Http\Request;

interface PaymentRepositoryInterface
{
    public function list(Request $request);
}
