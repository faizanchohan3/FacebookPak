<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $table="user_detaiols";
    protected $fillable = [
        'name',
        'user_id',
        'username',
        'email',
        'password',
        'profile_picture',
        'cover_photo',
        'bio',
        'location',
        'website',
        'gender',
        'birthdate',
    ];
    public function user()
{
    return $this->belongsTo(User::class);
}
}
