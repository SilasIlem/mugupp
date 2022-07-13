<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uid',
        'name',
        'email',
        'password',
        'paid',
        'referrer',
        'understood',
        'subscription',
        'comment',
        'bio',
        'user_pic'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'followers', 'target_id', 'source_id');
    }

    public function following()
    {
        return $this->belongsToMany(User::class, 'followers', 'source_id', 'target_id');
    }

    public function savedposts()
    {
        return $this->belongsToMany(User::class, 'saved_posts', 'user_id', 'post_id');
    }

    public function contacts()
    {
        return $this->belongsToMany(User::class, 'contacts', 'source_id', 'target_id')->withPivot('status');
    }

    public function contacted_by()
    {
        return $this->belongsToMany(User::class, 'contacts', 'target_id', 'source_id')->withPivot('status');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function impressions()
    {
        return $this->hasMany(Impression::class, 'user_id');
    }

    public function viewed_posts()
    {
        return $this->belongsToMany(Post::class, 'post_views', 'user_id', 'post_id');
    }

    public function viewed_topics()
    {
        return $this->belongsToMany(Topic::class, 'topic_views', 'user_id', 'topic_id');
    }

    public function viewed_mails()
    {
        return $this->belongsToMany(Mail::class, 'mail_views', 'user_id', 'mail_id');
    }


    public function viewed_notifications()
    {
        return $this->belongsToMany(Notification::class, 'notification_views', 'user_id', 'notification_id');
    }

    public function viewed_events()
    {
        return $this->belongsToMany(Event::class, 'event_views', 'user_id', 'event_id');
    }

    public function artistry()
    {
        return $this->hasMany(Artisan::class);
    }
}
