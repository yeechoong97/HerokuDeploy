<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use Auth;
use App\User;

class ForumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $forum = Forum::with('user')->get();
        return view('forum.index',[
            'forums' => $forum
        ]);
    }

    public function create()
    {
        $id = Auth::user()->user_id;
        return view('forum.create',[
            'user' => $id
        ]);
    }

    public function store(Request $request)
    {
        $id = Auth::user()->user_id;
        $forum = new Forum();
        $forum->user_id = $id;
        $forum->title = $request->title;
        $forum->contents = $request->contents;
        $forum->save();
        return redirect()->route('forum-index'); 
    }

    public function show(Request $request)
    {
        $id = Auth::user()->user_id;
        $forum = Forum::with('user')->where('id',$request->id)->get();
        return view('forum.view',[
            'forums' => $forum,
            'user_id'=> $id,
        ]);
    }

    public function update(Request $request)
    {
        $forum = Forum::where('id',$request->id)->first();
        $forum->title = $request->title;
        $forum->contents = $request->contents;
        $forum->save();
        return redirect()->route('forum-index'); 
    }

    public function destroy(Request $request)
    {
        $forum = Forum::where('id',$request->id)->first();
        $forum->delete();
        return redirect()->route('forum-index'); 
    }


}
