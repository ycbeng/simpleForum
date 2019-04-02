<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    //
    protected $fillable = ['title','slug'];

    public function discussions(){   //table name

        return $this->hasMany('App\Discussion');    //model name
        
    }
}


