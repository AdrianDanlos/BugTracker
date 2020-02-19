<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    public function project(){
        return $this->belongsTo('App\Project');
    }

    public function medias(){
        return $this->hasMany('App\Media');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
