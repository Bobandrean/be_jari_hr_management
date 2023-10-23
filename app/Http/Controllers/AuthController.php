<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserRepository;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    private $UserRepository;

    public function __construct(UserRepository $UserRepository)
    {
        $this->UserRepository = $UserRepository;
    }

    public function login(AuthRequest $request)
    {
        return $this->UserRepository->authenticate($request);
    }

    public function logout(Request $request)
    {
        return $this->UserRepository->userLogout($request);
    }
}
