<?php

namespace App\Repositories\Role;

use LaravelEasyRepository\Repository;

interface RoleRepository extends Repository{

    // Write something awesome :)
    public function viewRole();
    public function createRole($request);
    public function deleteRole($id);
    public function updateRole($request, $id);
    public function getRoleById($id);
    
}
