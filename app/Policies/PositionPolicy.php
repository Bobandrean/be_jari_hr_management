<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Role;

class PositionPolicy
{
    /**
     * Create a new policy instance.
     */
    public function view(User $user)
    {
    $roles = Role::find($user->role_id);

    $allowedRoles = config('roles.positionPolicy.view');

    if (!in_array($roles->title, $allowedRoles)) {
        return false; 
    }
    return true; 
    }

    public function create(User $user)
    {
    $roles = Role::find($user->role_id);
     
    $allowedRoles = config('roles.positionPolicy.create');
    
    if (!in_array($roles->title, $allowedRoles)) {
        return false; 
    }
    return true; 
    }

    public function update(User $user)
    {
       $roles = Role::find($user->role_id);
        
       $allowedRoles = config('roles.positionPolicy.update');
   
       
       if (!in_array($roles->title, $allowedRoles)) {
           return false; 
       }
       return true; 
    }
    public function delete(User $user)
    {
       $roles = Role::find($user->role_id);
       $allowedRoles = config('roles.positionPolicy.delete');
   
       if (!in_array($roles->title, $allowedRoles)) {
           return false; 
       }
       return true; 
    }
}
