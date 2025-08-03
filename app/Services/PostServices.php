<?php
namespace App\Services;

use App\Models\Post;
use App\Models\User;
class PostServices{

    public function data(){

       $user=User::create([
        "name"=> "sulman11213456",
        "email"=> "sulmn112216234#5@gmail.com",
        "password"=> bcrypt("232131"),

       ]);
       $post=Post::create([
        "content"=>"this is my first post asa developer",
        "user_id"=> $user->id,
          "media_url"=>'https://wwe.rasf/c,/.com',
          "privacy"=>"public",


    ]);


    return $post;
    }
}
