<?php
namespace App\Modules\Setting\Repositories;

use App\Repositories\BaseRepository;
use App\Modules\Setting\Models;
use Illuminate\Support\Facades\Request;

class  SettingRepository extends BaseRepository implements SettingRepositoryInterface
{
    protected $model;

    public function __construct(Setting $model)
    {
        $this->model = $model;
    }

    public function list(Request $request){
        $query = $this->model->query();

        $orderBy = $request->order_by ?? [];
        if(!empty($orderBy)){
            foreach ($orderBy as $column => $direction) {
                $query->orderBy($column, $direction);
            }
        }
        
        $page = $request->page ?? 1;
        $perPage = $request->per_page ?? 15;
        return $query->paginate($perPage, ['*'], 'page', $page);
    }
}