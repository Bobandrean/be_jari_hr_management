<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Employee\EmployeeRepository;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    private $EmployeeRepository;

    public function __construct(EmployeeRepository $EmployeeRepository)
    {
        $this->EmployeeRepository = $EmployeeRepository;
    }

    public function index()
    {
        return $this->EmployeeRepository->viewEmployee();
    }

    public function createEmployee(EmployeeRequest $request)
    {
        return $this->EmployeeRepository->createEmployee($request);
    }

    public function deleteEmployee($id)
    {
        return $this->EmployeeRepository->deleteEmployee($id);
    }

    public function updateEmployee(EmployeeRequest $request, $id)
    {
        return $this->EmployeeRepository->updateEmployee($request, $id);
    }

    public function getEmployeeById($id)
    {
        return $this->EmployeeRepository->getEmployeeById($id);
    }
}
