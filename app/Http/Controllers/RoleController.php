<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Role\RoleRepository;
use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{
    private $RoleRepository;

    public function __construct(RoleRepository $RoleRepository)
    {
        $this->RoleRepository = $RoleRepository;
    }

    public function viewRole()
    {
        return $this->RoleRepository->viewRole();
    }

    public function createRole(RoleRequest $request)
    {
        return $this->RoleRepository->createRole($request);
    }

    public function deleteRole($id)
    {
        return $this->RoleRepository->deleteRole($id);
    }

    public function updateRole(RoleRequest $request, $id)
    {
        return $this->RoleRepository->updateRole($request, $id);
    }

    public function getRoleById($id)
    {
        return $this->RoleRepository->getRoleById($id);
    }
}
