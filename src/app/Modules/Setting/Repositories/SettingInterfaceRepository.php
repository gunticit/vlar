<?php
namespace App\Modules\Setting\Repositories;

use Illuminate\Support\Facades\Request;

interface SettingRepositoryInterface
{
    public function list(Request $request);
}