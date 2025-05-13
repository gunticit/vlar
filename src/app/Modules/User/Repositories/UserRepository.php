<?php
namespace App\Modules\User\Repositories;

use App\Repositories\BaseRepository;
use App\Models\User;
use Illuminate\Http\Request;

class  UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function list($request){
        $query = $this->model->query();

        $orderBy = $request['order_by'] ?? [];
        if(!empty($orderBy)){
            foreach ($orderBy as $column => $direction) {
                $query->orderBy($column, $direction);
            }
        }
        
        $page = $request['page'] ?? 1;
        $perPage = $request['per_page'] ?? 15;
        return $query->paginate($perPage, ['*'], 'page', $page);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function attachRole($userId, $roleId)
    {
        $user = $this->find($userId);
        if ($user) {
            $user->roles()->attach($roleId);
            return $user->roles;
        }
        return null;
    }

    public function detachRole($userId, $roleId)
    {
        $user = $this->find($userId);
        if ($user) {
            $user->roles()->detach($roleId);
            return $user->roles;
        }
        return null;
    }

    public function getRoles($userId)
    {
        $user = $this->find($userId);
        if ($user) {
            return $user->roles;
        }
        return null;
    }
}
