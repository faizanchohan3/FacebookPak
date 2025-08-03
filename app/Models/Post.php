<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="post";

    protected $fillable=[
  'user_id',
        'content',
        'media_url',
        'privacy',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
    return $this->hasMany(Comment::class);
    }

    public function like(){

    return $this->belongsto(Likes::class);
    }
}
