<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function group(){
        return $this->belongsTo('App\Group');
    }

    public function userCreator(){ //Creator
        return $this->belongsTo('App\User');
    }

    public function usersBelongTo(){ //Belonger
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function issues(){
        return $this->hasMany('App\Issue');
    }
}
