<?php

namespace App\Repositories\Position;

use LaravelEasyRepository\Repository;

interface PositionRepository extends Repository{

    // Write something awesome :)
    public function viewPosition();
    public function createPosition($request);
    public function deletePosition($id);
    public function updatePosition($request, $id);
    public function getPositionById($id);
}
