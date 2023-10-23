<?php

namespace App\Repositories\AnnualLeave;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\AnnualLeave;
use App\Http\Helpers\ResponseHelpers;

class AnnualLeaveRepositoryImplement extends Eloquent implements AnnualLeaveRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(AnnualLeave $model)
    {
        $this->model = $model;
    }

    public function viewAnnualLeave(){
        try {        
            $annualLeave = $this->model::paginate(10);
            return ResponseHelpers::sendSuccess('List Semua Annual Leave', [
                'annualLeave' => $annualLeave
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function createAnnualLeave($request){
        try {
            $annualLeave = $this->model::createAnnualLeave($request->all());
            return ResponseHelpers::sendSuccess('Berhasil Menambahkan Annual Leave', [
                'annualLeave' => $annualLeave,
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function deleteAnnualLeave($id){
        try {
            $annualLeave = $this->model::deleteAnnualLeave($id);
            return ResponseHelpers::sendSuccess('Berhasil Menghapus Annual Leave', [
                'annualLeave' => $annualLeave
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function updateAnnualLeave($request, $id){
        try {
            $annualLeave = $this->model::updateAnnualLeave($request->all(), $id);
            return ResponseHelpers::sendSuccess('Berhasil Mengubah Annual Leave', [
                'annualLeave' => $annualLeave
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function getAnnualLeaveById($id){
        try {
            $annualLeave = $this->model::where('id', $id);
            $annualLeave = $annualLeave->first();
            return ResponseHelpers::sendSuccess('Berhasil Mengambil Annual Leave', [
                'annualLeave' => $annualLeave
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    
}
