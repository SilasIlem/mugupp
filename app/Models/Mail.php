<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;

    public function views()
    {
        return $this->belongsToMany(User::class, 'mail_views', 'mail_id', 'user_id');
    }
}
