<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AnnualLeave\AnnualLeaveRepository;
use App\Http\Requests\AnnualLeaveRequest;

class AnnualLeaveController extends Controller
{
    private $AnnualLeaveRepository;

    public function __construct(AnnualLeaveRepository $AnnualLeaveRepository)
    {
        $this->AnnualLeaveRepository = $AnnualLeaveRepository;
    }

    public function viewAnnualLeave()
    {
        return $this->AnnualLeaveRepository->viewAnnualLeave();
    }

    public function createAnnualLeave(AnnualLeaveRequest $request)
    {
        return $this->AnnualLeaveRepository->createAnnualLeave($request);
    }

    public function deleteAnnualLeave($id)
    {
        return $this->AnnualLeaveRepository->deleteAnnualLeave($id);
    }

    public function updateAnnualLeave(AnnualLeaveRequest $request, $id)
    {
        return $this->AnnualLeaveRepository->updateAnnualLeave($request, $id);
    }

    public function getAnnualLeaveById($id)
    {
        return $this->AnnualLeaveRepository->getAnnualLeaveById($id);
    }
}
