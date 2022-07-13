<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function follower()
    {
        return $this->hasOne(User::class, 'source_id');
    }

    public function followed()
    {
        return $this->hasOne(User::class, 'target_id');
    }
}
