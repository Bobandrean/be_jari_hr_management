<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;

class EmployeePolicy
{
    /**
     * Create a new policy instance.
     */
    public function view(User $user)
    {
    $roles = Role::find($user->role_id);

    $allowedRoles = config('roles.employeePolicy.view');

    if (!in_array($roles->title, $allowedRoles)) {
        return false; 
    }
    return true; 
    }

    public function create(User $user)
    {
    $roles = Role::find($user->role_id);
     
    $allowedRoles = config('roles.employeePolicy.create');

    
    if (!in_array($roles->title, $allowedRoles)) {
        return false; 
    }
    return true; 
    }

    public function update(User $user)
    {
       $roles = Role::find($user->role_id);
        
       $allowedRoles = config('roles.employeePolicy.update');
   
       
       if (!in_array($roles->title, $allowedRoles)) {
           return false; 
       }
       return true; 
    }
    public function delete(User $user)
    {
       $roles = Role::find($user->role_id);
       $allowedRoles = config('roles.employeePolicy.delete');
   
       if (!in_array($roles->title, $allowedRoles)) {
           return false; 
       }
       return true; 
    }
}
