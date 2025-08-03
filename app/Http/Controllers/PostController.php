<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use App\Services\PostServices;
class PostController extends Controller
{

    public function __construct(protected PostServices $postServices){}
    public function index(Request $req){


   return $this->postServices->data();

    }
}
