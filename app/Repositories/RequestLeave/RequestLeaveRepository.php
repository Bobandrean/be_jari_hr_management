<?php

namespace App\Repositories\RequestLeave;

use LaravelEasyRepository\Repository;

interface RequestLeaveRepository extends Repository{

    // Write something awesome :)
    public function viewRequestLeave();
    public function createRequestLeave($request);
    public function deleteRequestLeave($id);
    public function updateRequestLeave($request, $id);
    public function getRequestLeaveById($id);
}
