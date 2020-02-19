<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public function issue(){
        return $this->belongsTo('App\Issue');
    }
}
