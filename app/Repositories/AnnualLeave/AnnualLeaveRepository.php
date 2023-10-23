<?php

namespace App\Repositories\AnnualLeave;

use LaravelEasyRepository\Repository;

interface AnnualLeaveRepository extends Repository{

    public function viewAnnualLeave();
    public function createAnnualLeave($request);
    public function deleteAnnualLeave($id);
    public function updateAnnualLeave($request, $id);
    public function getAnnualLeaveById($id);
    
}
