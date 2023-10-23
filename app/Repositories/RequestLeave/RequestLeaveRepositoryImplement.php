<?php

namespace App\Repositories\RequestLeave;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\RequestLeave;
use App\Http\Helpers\ResponseHelpers;

class RequestLeaveRepositoryImplement extends Eloquent implements RequestLeaveRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(RequestLeave $model)
    {
        $this->model = $model;
    }

    public function viewRequestLeave(){
        try {        
            $requestLeave = $this->model::paginate(10);
            return ResponseHelpers::sendSuccess('List Semua Request Leave', [
                'requestLeave' => $requestLeave
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function createRequestLeave($request){
        try {
            $requestLeave = $this->model::createRequestLeave($request->all());
            return ResponseHelpers::sendSuccess('Berhasil Menambahkan Request Leave', [
                'requestLeave' => $requestLeave,
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function deleteRequestLeave($id){
        try {
            $requestLeave = $this->model::deleteRequestLeave($id);
            return ResponseHelpers::sendSuccess('Berhasil Menghapus Request Leave', [
                'requestLeave' => $requestLeave
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function updateRequestLeave($request, $id){
        try {
            $requestLeave = $this->model::updateRequestLeave($request->all(), $id);
            return ResponseHelpers::sendSuccess('Berhasil Mengubah Request Leave', [
                'requestLeave' => $requestLeave
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function getRequestLeaveById($id){
        try {
            $requestLeave = $this->model::where('id', $id);
            $requestLeave = $requestLeave->first();
            return ResponseHelpers::sendSuccess('Berhasil Mengambil Request Leave', [
                'requestLeave' => $requestLeave
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }   
}
