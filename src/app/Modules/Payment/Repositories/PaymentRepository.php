<?php
namespace App\Modules\Payment\Repositories;

use App\Repositories\BaseRepository;
use App\Modules\Payment\Models;
use Illuminate\Support\Facades\Request;

class  PaymentRepository extends BaseRepository implements PaymentRepositoryInterface
{
    protected $model;

    public function __construct(Payment $model)
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