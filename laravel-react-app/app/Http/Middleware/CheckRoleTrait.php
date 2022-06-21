<?php

namespace App\Http\Middleware;


use App\Models\Role;
use App\Repositories\Repository;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

trait CheckRoleTrait {
    use AuthenticatesUsers;

    public static function checkRole(string $roleName): bool
    {
        // Get user role id from Auth
        $userRoleId = auth()->user()->role_id;

        // Get all roles
        $roleModel = new Role();
        $roleRepository = new Repository($roleModel);
        $roleId = $roleRepository->all()->where('role_name','=',$roleName)->first()->id;

        if($roleId == $userRoleId){
            return true;
        }
        return false;
    }

    public static function getRole(): string
    {
        // Get user role id from Auth
        $userRoleId = auth()->user()->role_id;

        // Get all roles
        $roleModel = new Role();
        $roleRepository = new Repository($roleModel);
        $roleName = $roleRepository->all()->where('id','=',$userRoleId)->first()->role_name;

        return $roleName;
    }
}
