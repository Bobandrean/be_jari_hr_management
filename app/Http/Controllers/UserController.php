<?php

namespace App\Http\Controllers;
use App\Repositories\User\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $UserRepository;

    public function __construct(UserRepository $UserRepository)
    {
        $this->UserRepository = $UserRepository;
    }

    public function viewUser()
    {
        return $this->UserRepository->viewUser();
    }

    public function createUser(Request $request)
    {
        return $this->UserRepository->createUser($request);
    }

    public function updateUser($id, Request $request)
    {
        return $this->UserRepository->updateUser($id, $request);
    }

    public function deleteUser($id)
    {
        return $this->UserRepository->deleteUser($id);
    }

    public function getUserById($id)
    {
        return $this->UserRepository->getUserById($id);
    }
}
