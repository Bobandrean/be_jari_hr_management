<?php

namespace App\Repositories\Position;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Position;
use App\Http\Helpers\ResponseHelpers;

class PositionRepositoryImplement extends Eloquent implements PositionRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(Position $model)
    {
        $this->model = $model;
    }

    public function viewPosition(){
        try {        
            $position = $this->model::paginate(10);
            return ResponseHelpers::sendSuccess('List Semua Position', [
                'position' => $position
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function createPosition($request){
        try {
            $position = $this->model::createPosition($request->all());
            return ResponseHelpers::sendSuccess('Berhasil Menambahkan Position', [
                'position' => $position,
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function deletePosition($id){
        try {
            $position = $this->model::deletePosition($id);
            return ResponseHelpers::sendSuccess('Berhasil Menghapus Position', [
                'position' => $position
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function updatePosition($request, $id){
        try {
            $position = $this->model::updatePosition($request->all(), $id);
            return ResponseHelpers::sendSuccess('Berhasil Mengubah Position', [
                'position' => $position
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }

    public function getPositionById($id){
        try {
            $position = $this->model::where('id',$id);
            $position = $position->first();
            return ResponseHelpers::sendSuccess('Berhasil Mengambil Position', [
                'position' => $position
            ], 200);
        } catch (\Throwable $th) {
            return ResponseHelpers::sendError($th->getMessage(), [], 400);
        }
    }


}
