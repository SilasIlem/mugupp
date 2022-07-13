<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    public function community()
    {
        return $this->belongsTo(Community::class);
    }

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function views()
    {
        return $this->belongsToMany(User::class, 'topic_views', 'topic_id', 'user_id');
    }
}
