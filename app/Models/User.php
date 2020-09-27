<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute()
    {
        // return "images/avatar1.png/?u=" .$this->email;
        return "images/avatar1.png";
    }

    public function timeline()
    {
    //     return Tweet::where('user_id', $this->id)->latest()->get();
        // include all of the user's tweets
        // as well as the tweets of everyone
        // they follow.....in desc order by date

        $friends = $this->follows()->pluck('id');
        // $ids->push($this->id);

        // return Tweet::whereIn('user_id', $ids)->latest()->get();
        return Tweet::whereIn('user_id', $friends)
                ->orwhere('user_id', $this->id)
                ->latest()->get();
    }

    public function tweets ()
    {
        return $this->hasMany(Tweet::class);   
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
