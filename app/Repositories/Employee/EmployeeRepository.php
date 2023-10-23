<?php

namespace App\Repositories\Employee;

use LaravelEasyRepository\Repository;

interface EmployeeRepository extends Repository{

    public function viewEmployee();
    public function createEmployee($request);
    public function deleteEmployee($id);
    public function updateEmployee($request, $id);
    public function getEmployeeById($id);
}
