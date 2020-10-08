<?php

namespace App\Models;
use Illuminate\Foundation;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Jenssegers\Mongodb\Auth\User as Authenticatable;

class User extends Authenticatable
{ 
    use HasFactory, Notifiable, Followable;
    protected $guarded  = [];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        return asset($value ?: '/avatars/avatar1.png');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function timeline()
    {
        $friends = $this->follows()->pluck('id');

        return Tweet::whereIn('user_id', $friends)
                ->orwhere('user_id', $this->id)
                ->latest()->paginate(20);
    }

    public function tweets ()
    {
        return $this->hasMany(Tweet::class)->latest();   
    }

    public function path($append = '')
    {
        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }
}
