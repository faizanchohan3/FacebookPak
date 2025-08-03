<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix("/auth")->group(function () {
    Route::get("/login", [UserController::class,'login']);
    Route::post("/register", [UserController::class,'register']);

});

Route::apiResource("/posts", PostController::class)->middleware("auth:sanctum");




Route::put('/comments/{id}',[CommentController::class,'UpdateComment']);
Route::delete('/comments/{id}',[CommentController::class,'deletecomments']);

Route::post('/likes',[LikeController::class,"Createlikes"]);
Route::delete('/likes/{id}',[LikeController::class,"Deletelikes"]);

Route::get("/Follows",[FollowController::class,"GetFollows"]);
