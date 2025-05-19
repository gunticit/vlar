<?php
namespace App\Modules\Payment\Repositories;

use App\Repositories\RepositoryInterface;
use Illuminate\Support\Facades\Request;

interface PaymentRepositoryInterface extends RepositoryInterface
{
    public function list(Request $request);
}