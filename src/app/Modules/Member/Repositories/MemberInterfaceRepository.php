<?php
namespace App\Modules\Member\Repositories;

interface MemberRepositoryInterface
{
    public function list(Request $request);
}