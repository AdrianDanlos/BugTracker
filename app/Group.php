<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function projects(){
        return $this->hasMany('App\Project');
    }

    public function userCreator(){ //Creator
        return $this->belongsTo('App\User');
    }

    public function usersBelongTo(){ //Belonger
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
