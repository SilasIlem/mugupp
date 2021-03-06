<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function views()
    {
        return $this->belongsToMany(User::class, 'notification_views', 'notification_id', 'user_id');
    }
}
