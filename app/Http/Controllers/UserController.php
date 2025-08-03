<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\UserServices;

class UserController extends Controller
{
    public function __construct(protected UserServices $services){

    }
    public function register (Request $request){
$user=$request->validate([
"email"=>"required",
"password"=> "required",
]);
if(!$this->services->register($user['email'],$user['password'])){
    return response()->json(["error"=>"Account Already Exist"],400);
}
return response()->json(['message' => 'User registered successfully'], 201);
    }
public function login($email,$password){

    Auth::attempt([
        'email'=> $email,
            'password'=> $password
    ]);
}

}
