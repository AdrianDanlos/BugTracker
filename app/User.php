<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'name', 'public_name', 'photo_url', 'is_developer', 'media_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function groupsCreated(){ //Creator
        return $this->hasMany('App\Group');
    }

    public function groupsBelongTo(){ //Belonger
        return $this->belongsToMany('App\Group');
    }

    public function projectsCreated(){ //Creator
        return $this->hasMany('App\Project');
    }

    public function projectsBelongTo(){ //Belonger
        return $this->belongsToMany('App\Project')->withTimestamps();
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function issues(){
        return $this->hasMany('App\Issues');
    }
}
