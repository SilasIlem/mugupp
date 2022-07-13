<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    public function artisans()
    {
        return $this->hasMany(Artisan::class);
    }

    public function profile()
    {
        return $this->hasOne(DistrictProfile::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
