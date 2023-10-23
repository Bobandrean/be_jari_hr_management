<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RequestLeave\RequestLeaveRepository;
use App\Http\Requests\RequestLeaveRequest;

class RequestLeaveController extends Controller
{
    private $RequestLeaveRepository;

    public function __construct(RequestLeaveRepository $RequestLeaveRepository)
    {
        $this->RequestLeaveRepository = $RequestLeaveRepository;
    }

    public function viewRequestLeave()
    {
        return $this->RequestLeaveRepository->viewRequestLeave();
    }

    public function createRequestLeave(RequestLeaveRequest $request)
    {
        return $this->RequestLeaveRepository->createRequestLeave($request);
    }

    public function deleteRequestLeave($id)
    {
        return $this->RequestLeaveRepository->deleteRequestLeave($id);
    }

    public function updateRequestLeave(RequestLeaveRequest $request, $id)
    {
        return $this->RequestLeaveRepository->updateRequestLeave($request, $id);
    }

    public function getRequestLeaveById($id)
    {
        return $this->RequestLeaveRepository->getRequestLeaveById($id);
    }
}
