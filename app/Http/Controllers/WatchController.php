<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use App\Watch;


use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function watch($id)
    {
        Watch::create([
            'discussion_id' => $id,
            'user_id' => Auth::id()
        ]);

        Session::flash('success', 'You are watching this discussion.');

        return redirect()->back();
    }

    public function unwatch($id)
    {
        $watcher =  Watch::where('discussion_id', $id)->where('user_id', Auth::id());

        $watcher->delete();

        Session::flash('success', 'You are no longer watching this discussion.');

        return redirect()->back();
    }
}
