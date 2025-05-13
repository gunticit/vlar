<?php
namespace App\Modules\Setting\Repositories;

interface SettingRepositoryInterface
{
    public function list(Request $request);
}