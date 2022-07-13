<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function artisans()
    {
        return $this->hasMany(Artisan::class);
    }
}
