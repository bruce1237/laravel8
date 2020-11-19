<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    //
    public function allUserWithPhone()
    {
        return $user = User::all()->phone;
    }

    public function insertPhone()
    {
        $phone = new Phone();
        $phone->phone = '123';
        $user = new User();
        $user->name = 'John1';
        $user->email = 'John1@web.com';
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->password = 'abc';
        $user->remember_token = 'abcde';
        $user->save();
        $user->phone()->save($phone);
        return 'user and phone has been created';
    }

    public function getPhoneByUserID($id)
    {
        return $phone = User::find($id)->phone;
    }
}
