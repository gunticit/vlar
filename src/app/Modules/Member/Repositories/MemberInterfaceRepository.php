<?php
namespace App\Modules\Member\Repositories;

use Illuminate\Http\Request;

interface MemberInterfaceRepository
{
    public function list(Request $request);
    public function create(array $data);
}
