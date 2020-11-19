<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function getUser()
    {
        
    }

    public function addRole()
    {
        $roles = [
            ['name'=>'postman'],
            ['name'=>'officer'],
            ['name'=>'store Manager'],
        ];

        Role::insert($roles);
        return 'new roles has been added';
    }

    public function addUserWithRoles()
    {
        $user = new User();
        $user->name ='newUser';
        $user->email ='newUser@email.com';
        $user->email_verified_at =date('Y-m-d H:i:s');
        $user->password ='PWD';
        $user->remember_token ='PWD_TOKEN';
        $user->save();

        $rolesIDs = [3,5]; //HR and Manager
        $user->roles()->attach($rolesIDs);

        return 'HR and Manager for the user has been added';
    }

    public function getAllRolesByUsers($id)
    {
        return User::find($id)->roles;
    }

    public function getAllUsersByRole($id)
    {
        return Role::find($id)->users;
    }

}
