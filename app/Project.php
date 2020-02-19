<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function group(){
        return $this->belongsTo('App\Group');
    }

    public function user(){ //Creator
        return $this->belongsTo('App\User');
    }

    public function users(){ //Belonger
        return $this->belongsToMany('App\User');
    }

    public function issues(){
        return $this->hasMany('App\Issue');
    }
}
