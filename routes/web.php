<?php

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post', function () {

    $post=Post::all();
    return response()->json($post);
});
Route::get('/createUser', function () {
    $user=new User([

        'name'=> 'Faizan',
        'email'=> 'faizanchohan30@gmail.com',
      'password'=> bcrypt('faizan134')  ,


    ]);

$user->save();
return response()->json($user);
});


Route::get('/createpost', function () {
    $post=new Post([
        'user_id'=>3,
        'content'=>'I love cats',
        'media_url'=>'https://www.laravel.com',
        'privacy'=> 'public',
    ]);
    $post->save();
    return response()->json($post);
});

Route::get('/createComment', function () {

$comment=new Comment([
    'user_id'=> 3,
    'comment_text'=> 'I love it too',
    'post_id'=>7,
]);
$comment->save();
return response()->json($comment);
});
Route::get('/getpost', function () {
$post=Post::with('comments','user')->get();
return response()->json($post);
}
);
