<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function impressed()
    {
        return $this->hasMany(Impression::class, 'post_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function savedby()
    {
        return $this->belongsToMany(User::class, 'saved_posts', 'post_id', 'user_id');
    }

    public function views()
    {
        return $this->belongsToMany(User::class, 'post_views', 'post_id', "user_id");
    }
}
