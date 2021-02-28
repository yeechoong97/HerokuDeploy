<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use App\User;
use App\Common;
use App\Comment;
use Auth;
use DateTime;

class ForumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $userID = Auth::user()->user_id;
        $tagKey = 0;
        switch($request->tag)
        {
            case "All Posts":
                $forums = Forum::with('user')->with('comment.user')->orderBy('title','asc')->paginate(7);
                break;
            case "Your Posts":
                $forums = Forum::with('user')->with('comment.user')->where('user_id',$userID)->orderBy('title','asc')->paginate(7);
                break;
            default:
                foreach(Common::$forumTags as $key => $value)
                    $tagKey= ($value == $request->tag) ? $key : $tagKey;
                $forums = Forum::with('user')->with('comment.user')->where('tag',$tagKey)->orderBy('title','asc')->paginate(7);
                break;
        }
        return view('forum.index',[
            'forums' => $forums,
            'user_id' => $userID,
            'tagValue' => $request->tag
        ]);
    }

    public function store(Request $request)
    {
        $tagKey = 0;
        $userID = Auth::user()->user_id;
        $lastRecordID = Forum::orderBy('id','desc')->first();
        $forumID = (!$lastRecordID) ? "FOM1" : "FOM" . ($lastRecordID->id + 1);
        $forum = new Forum();
        $forum->user_id = $userID;
        $forum->forum_id = $forumID;
        $forum->tag = $request->tag;
        $forum->title = $request->title;
        $forum->contents = $request->contents;
        $forum->save();
        foreach(Common::$forumTags as $key => $value)
            $tagKey= ($key == $request->tag) ? $value : $tagKey;
        return redirect()->route('forum-show',['tag'=>$tagKey,'id'=>$forum->forum_id]);  
    }

    public function show(Request $request)
    {
        $userID = Auth::user()->user_id;
        $forums = Forum::with('user')->with('comment.user')->where('forum_id',$request->id)->get();
        return view('forum.view',[
            'forums' => $forums,
            'user_id'=> $userID,
            'tagValue' => $request->tag
        ]);
    }

    public function update(Request $request)
    {
        $forum = Forum::where('forum_id',$request->id)->first();
        $forum->tag = $request->tag;
        $forum->title = $request->title;
        $forum->contents = $request->contents;
        $forum->save();
        $tagKey="";
        foreach(Common::$forumTags as $key => $value)
            $tagKey= ($key == $request->tag) ? $value : $tagKey;
        return redirect()->route('forum-show',['tag'=>$tagKey,'id'=>$forum->forum_id]); 
    }

    public function destroy(Request $request)
    {
        $forum = Forum::with('comment')->where('forum_id',$request->id)->first();
        $forum->comment()->delete();
        $forum->delete();
        return redirect()->route('forum-index',$request->tag); 
    }

    public function store_comment(Request $request)
    {
        $userID = Auth::user()->user_id;
        $lastRecordID = Comment::orderBy('id','desc')->first();
        $commentID = (!$lastRecordID) ? "COM1" : "COM" . ($lastRecordID->id + 1);

        $comment = new Comment();
        $comment->forum_id = $request->id;
        $comment->user_id = $userID;
        $comment->comment_id = $commentID;
        $comment->contents = $request->contents;
        $comment->save();
        return redirect()->route('forum-show',['id'=>$request->id,'tag'=>$request->tag]);
    }

    public function update_comment(Request $request)
    {
        $comment = Comment::where('comment_id',$request->commentID)->first();
        $comment->contents = $request->commentContents;
        $forum_id = $comment->forum_id;
        $comment->save();
        return redirect()->route('forum-show',['id'=>$forum_id,'tag'=>$request->tagForumID]); 
    }

    public function destroy_comment(Request $request)
    {
        $comment = Comment::where('comment_id',$request->id)->first();
        $forum_id = $comment->forum_id;
        $comment->delete();
        return redirect()->route('forum-show',['id'=>$forum_id,'tag'=>$request->tag]);
    }

    public function fetchForums(Request $request)
    {
        if ($request->ajax()) 
        {
            $order = "asc";
            $type="title";
            $userID = Auth::user()->user_id;
            if($request->data['filter']=="oldest")
            {
                $type="created_at";
                $order="asc";
            }
            else if($request->data['filter']=="latest")
            {
                $type="created_at";
                $order="desc";
            }
            if($request->data['search']=="")
            {
                $tagKey = 0;
                switch($request->data['tag'])
                {
                    case "All Posts":
                        $forum = Forum::with('user')->with('comment.user')->orderBy($type,$order)->paginate(7);
                        break;
                    case "Your Posts":
                        $forum = Forum::with('user')->with('comment.user')->where('user_id',$userID)->orderBy($type,$order)->paginate(7);
                        break;
                    default:
                        foreach(Common::$forumTags as $key => $value)
                            $tagKey= ($value == $request->data['tag']) ? $key : $tagKey;
                        $forum = Forum::with('user')->with('comment.user')->where('tag',$tagKey)->orderBy($type,$order)->paginate(7);
                        break;
                }
            }
            else
            {
                $tagKey = 0;
                switch($request->data['tag'])
                {
                    case "All Posts":
                        $forum = Forum::with('user')->with('comment.user')->where('title','LIKE','%'.$request->data['search'].'%')->orderBy($type,$order)->paginate(7);
                        break;
                    case "Your Posts":
                        $forum = Forum::with('user')->with('comment.user')->where('user_id',$userID)->where('title','LIKE','%'.$request->data['search'].'%')->orderBy($type,$order)->paginate(7);
                        break;
                    default:
                        foreach(Common::$forumTags as $key => $value)
                            $tagKey= ($value == $request->data['tag']) ? $key : $tagKey;
                        $forum = Forum::with('user')->with('comment.user')->where('tag',$tagKey)->where('title','LIKE','%'.$request->data['search'].'%')->orderBy($type,$order)->paginate(7);
                        break;
                }
            }
                
            return view('forum.contents',[
                    'forums' => $forum,
                    'tagValue'=> $request->data['tag'],
                    'user_id' => $userID
                    ])->render();
        }
    }



}
