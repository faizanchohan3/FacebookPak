<?php

namespace App\Services;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
class UserServices{

    public function register(String $email,String $password){

        $user = User::where("email", $email)->first();
        if($user!=null){
return false;
        }
        else{
User::create([

"name"=>"faizan",
    "email"=> $email,
    "password"=> Hash::make($password),

]);
return true;
        }
    }

}
