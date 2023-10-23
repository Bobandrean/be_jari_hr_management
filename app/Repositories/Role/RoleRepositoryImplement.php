<?php

namespace App\Repositories\Role;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Role;
use App\Http\Helpers\ResponseHelpers;

class RoleRepositoryImplement extends Eloquent implements RoleRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(Role $model)
    {
        $this->model = $model;
    }

    public function viewRole(){
        try {        
            $role = $this->model::paginate(10);
            return ResponseHelpers::sendSuccess('List Semua Role', [
                'role' => $role
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function createRole($request){
        try {
            $role = $this->model::createRole($request->all());
            return ResponseHelpers::sendSuccess('Berhasil Menambahkan Role', [
                'role' => $role,
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function deleteRole($id){
        try {
            $role = $this->model::deleteRole($id);
            return ResponseHelpers::sendSuccess('Berhasil Menghapus Role', [
                'role' => $role
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function updateRole($request, $id){
        try {
            $role = $this->model::updateRole($request->all(), $id);
            return ResponseHelpers::sendSuccess('Berhasil Mengubah Role', [
                'role' => $role
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function getRoleById($id){
        try {
            $role = $this->model::where('id',$id);
            $role = $role->first();
            return ResponseHelpers::sendSuccess('Berhasil Mengambil Role', [
                'role' => $role
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }   
    }
    
}
