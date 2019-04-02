<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Watch;
use App\Reply;
use App\Discussion;
use App\User;
use DB;

class DiscussionController extends Controller
{
    public function create(){
        return view('discuss');
    }

    public function store(){
        //dd(request());
        $r=request();
        $this->validate($r,[
            'channel_id'=>'required',
            'content'=>'required',
            'title'=>'required'
        ]);

        $discussion=Discussion::create([

            'title'=>$r->title,
            'content'=>$r->content,
            'channel_id'=>$r->channel_id,
            'user_id'=>Auth::id()
            

        ]);

        Session::flash('success','Discussion was successfully created');
        Return redirect()->back();
        //return redirect()->route('discussion', ['slug' => $discussion->slug ]);
        
    }

    public function show($id)
    {
        $discussion = Discussion::where('id', $id)->first();

        $best_answer = $discussion->replies()->where('best_answer', 1)->first();

        return view('discussions.show')
                        ->with('d', $discussion)
                        ->with('best_answer', $best_answer);
    }

    public function reply($id){
        $d=Discussion::find($id);
        $reply=Reply::create([
            'user_id'=>Auth::id(),
            'discussion_id'=>$id, 
            'content'=>request()->reply
        ]);
        Session::flash('success','Replied to discussion.');
        return redirect()->back();
    }


    public function upload(Request $request){

        //$user=User::find('id',Auth::id())->first();
        //return view ('uploadAvatar')->with('d',$user); 
        $image=$request->file('avatar');
        $image->move('images',$image->getClientOriginalName());

        

        $userid=Auth::id();
        $imageName="http://localhost/laravel/forum/public/images/".$image->getClientOriginalName();
        //$user=User::where('id', $id)->first();
        //$user->avatar="http://localhost/laravel/forum/resources/assets/avatar/bbb.png";        
        //$user->save();
        DB::update('update users set avatar = ? where id = ?',[$imageName,$userid]);

        Session::flash('success',"Upload succesful!");
        return view ('uploadAvatar');
    }
}
