<?php

namespace App\Repositories\Employee;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Employee;
use App\Http\Helpers\ResponseHelpers;

class EmployeeRepositoryImplement extends Eloquent implements EmployeeRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(Employee $model)
    {
        $this->model = $model;
    }

    public function viewEmployee($request){
        $page = $request->input('page', 1);
        $search = $request->input('search', '');
        $order_by = $request->input('order_by', 'id');
        $sort = $request->input('sort', 'asc'); // Set the default sort to 'asc' if not provided
        
        try {
            // Filter records based on the search query
            $filteredQuery = $this->model::where('full_name', 'like', '%' . $search . '%');
        
            // Check if $order_by is not empty and set the orderBy clause
            if (!empty($order_by)) {
                $filteredQuery->orderBy($order_by, $sort);
            }
        
            // Paginate the filtered results
            $employee = $filteredQuery->paginate(10);
        
            return ResponseHelpers::sendSuccess('List Semua Employee', [
                'employee' => $employee
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function createEmployee($request){
        try {
            $employee = $this->model::createEmployee($request->all());
            return ResponseHelpers::sendSuccess('Berhasil Menambahkan Employee', [
                'employee' => $employee,
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function deleteEmployee($id){
        try {
            $employee = $this->model::deleteEmployee($id);
            return ResponseHelpers::sendSuccess('Berhasil Menghapus Employee', [
                'employee' => $employee
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function updateEmployee($request, $id){
        try {
            $employee = $this->model::updateEmployee($request->all(), $id);
            return ResponseHelpers::sendSuccess('Berhasil Mengubah Employee', [
                'employee' => $employee
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function getEmployeeById($id){
        try {
            $employee = $this->model::where('id',$id);
            $employee = $employee->first();
            return ResponseHelpers::sendSuccess('Berhasil Mengambil Employee', [
                'employee' => $employee
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }
}
