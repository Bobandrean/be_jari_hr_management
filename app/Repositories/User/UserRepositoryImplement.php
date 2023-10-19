<?php

namespace App\Repositories\User;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\User;
use App\Http\Helpers\ResponseHelpers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserRepositoryImplement extends Eloquent implements UserRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function authenticate($request){
        $credentials = $request->only('email', 'password');

        try {
            $user = $this->model::where('email', $request->email)
            ->get();



            if (!Hash::check($request->password, $user->password)) {
                return ResponseHelpers::sendError('Unauthorized', '', 400);
            }
            if ($user == NULL) {
                return ResponseHelpers::sendError('User tidak di temukan','',400);
            }

            $token = $user->createToken('auth_token')->plainTextToken;
            
            $accessToken = [
                "accessToken" => $token
            ];

            $result = [
                "sanctum" => $accessToken,
                "user" => $user,
            ];
        } catch (\Throwable $th) {
            return $th;
            return ResponseHelpers::sendError('Unauthorized',$th,400);
        }

        return ResponseHelpers::sendSuccess('Sukses login',$result, 200);
    }
    // Write something awesome :)
}
