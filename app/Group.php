<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function projects(){
        return $this->hasMany('App\Project');
    }

    public function user(){ //Creator
        return $this->belongsTo('App\User');
    }

    public function users(){ //Belonger
        return $this->belongsToMany('App\User');
    }
}
