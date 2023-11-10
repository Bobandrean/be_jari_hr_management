<?php

namespace App\Repositories\Employee;

use LaravelEasyRepository\Repository;

interface EmployeeRepository extends Repository{

    //CRUD Employee
    public function viewEmployee($request);
    public function createEmployee($request);
    public function deleteEmployee($id);
    public function updateEmployee($request, $id);
    public function getEmployeeById($id);
}
