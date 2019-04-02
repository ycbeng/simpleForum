<?php

namespace App;

use Auth;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    protected $fillable= ['content','discussion_id','user_id'];


    public function discussion(){

        return $this->belongsTo('App\Discussion');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function likes(){
        return $this->hasMany('App\Like');
    }

    public function is_liked_by_auth_user()
    {
        $id = Auth::id();

        $likers = array();  //new array to receveived user like data

        foreach($this->likes as $like):
            array_push($likers, $like->user_id);   // add value in the array
        endforeach;


        if(in_array($id, $likers))   // check with the login id and the Like id from DB
        {
            return true;
        }
        else {
            return false;
        }

    }


}
