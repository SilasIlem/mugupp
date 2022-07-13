<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function community()
    {
        return $this->belongsTo(Community::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function views()
    {
        return $this->belongsToMany(User::class, 'event_views', 'event_id', 'user_id');
    }
}
