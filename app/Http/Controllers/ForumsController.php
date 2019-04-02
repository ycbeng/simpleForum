<?php

namespace App\Http\Controllers;
use App\Discussion;
use App\Channel;
use Auth;

use Illuminate\Http\Request;

class ForumsController extends Controller
{
    public function index(){

        switch(request('filter')){
            case 'me':
                $discussions=Discussion::where('user_id',Auth::id())->paginate(3);
            break;


            default:
                $discussions = Discussion::orderby('created_at','desc')->paginate(3);
                
            break;
        }


        
        return view('forum',['discussion'=>$discussions]);
    }

    public function channel($slug)
    {
        $channel = Channel::where('slug', $slug)->first();

        return view('channel')->with('discussions', $channel->discussions()->paginate(5));
    }

    
}
