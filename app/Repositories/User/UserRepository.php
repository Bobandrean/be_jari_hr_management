<?php

namespace App\Repositories\User;

use LaravelEasyRepository\Repository;

interface UserRepository extends Repository{

    //Login
    public function authenticate($request);
    public function userLogout($request);

    //Profile
    public function userProfile();

    //CRUD
    public function viewUser();
    public function createUser($request);
    public function updateUser($id, $request);
    public function deleteUser($id);
    public function getUserById($id);
}
