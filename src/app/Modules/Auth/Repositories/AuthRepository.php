<?php
namespace App\Modules\Auth\Repositories;

use App\Repositories\BaseRepository;
use App\Modules\Auth\Models\Auth;
use Illuminate\Support\Facades\Request;

class  AuthRepository extends BaseRepository implements AuthRepositoryInterface
{
    protected $model;

    public function __construct(Auth $model)
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