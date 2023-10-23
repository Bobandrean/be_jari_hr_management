<?php

namespace App\Http\Controllers;

use App\Repositories\Position\PositionRepository;

use Illuminate\Http\Request;
use App\Http\Requests\PositionRequest;

class PositionController extends Controller
{
    private $PositionRepository;

    public function __construct(PositionRepository $PositionRepository)
    {
        $this->PositionRepository = $PositionRepository;
    }

    public function viewPosition()
    {
        return $this->PositionRepository->viewPosition();
    }

    public function createPosition(PositionRequest $request)
    {
        return $this->PositionRepository->createPosition($request);
    }

    public function deletePosition($id)
    {
        return $this->PositionRepository->deletePosition($id);
    }

    public function updatePosition(PositionRequest $request, $id)
    {
        return $this->PositionRepository->updatePosition($request, $id);
    }

    public function getPositionById($id)
    {
        return $this->PositionRepository->getPositionById($id);
    }
}
