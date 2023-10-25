<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Role;

class RolePolicy
{
    /**
     * Create a new policy instance.
     */
    public function view(User $user)
    {
    $roles = Role::find($user->role_id);

    $allowedRoles = config('roles.rolePolicy.view');

    if (!in_array($roles->title, $allowedRoles)) {
        return false; 
    }
    return true; 
    }

    public function create(User $user)
    {
    $roles = Role::find($user->role_id);
     
    $allowedRoles = config('roles.rolePolicy.create');
    
    if (!in_array($roles->title, $allowedRoles)) {
        return false; 
    }
    return true; 
    }

    public function update(User $user)
    {
       $roles = Role::find($user->role_id);
        
       $allowedRoles = config('roles.rolePolicy.update');
   
       
       if (!in_array($roles->title, $allowedRoles)) {
           return false; 
       }
       return true; 
    }
    public function delete(User $user)
    {
       $roles = Role::find($user->role_id);
       $allowedRoles = config('roles.rolePolicy.delete');
   
       if (!in_array($roles->title, $allowedRoles)) {
           return false; 
       }
       return true; 
    }
}
