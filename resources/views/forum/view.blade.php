@extends('layouts.default')
@section('content')
<?php
use App\Common;
?>
<div class="container" style="height:1250px;margin-top:130px;">
<div class="main-body p-0 my-3" style="height:95%;border:1px solid #cbd5e0;">
    <div class="inner-wrapper">
        <div class="inner-sidebar">
            <div class="inner-sidebar-header justify-content-center">
                <a href="{{route('forum-index',$tagValue)}}" class="form-control btn-light has-icon text-center remove-decoration"><span class="fa fa-arrow-left mr-2"></span>Back</a>
            </div>
            <div class="inner-sidebar-body p-0">
                <div class="p-3 h-100" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: -16px;">
                        <div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;">
                                    <div class="simplebar-content p-3" >
                                        <nav class="nav nav-pills nav-gap-y-1 flex-column" id="tag-list">
                                            <a href="{{route('forum-index','All Posts')}}" class="nav-link nav-link-faded has-icon"><span class="fas fa-tag mr-2"></span>All Posts</a>
                                            <a href="{{route('forum-index','Your Posts')}}" class="nav-link nav-link-faded has-icon"><span class="fas fa-tag mr-2"></span>Your Posts</a>
                                            @foreach(Common::$forumTags as $key => $value)
                                            <a href="{{route('forum-index',$value)}}" class="nav-link nav-link-faded has-icon"><span class="fas fa-tag mr-2"></span>{{$value}}</a>
                                            @endforeach
                                            <input type="hidden" id="tag-id" value="{{$tagValue}}" />
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="inner-main">
            <div class="inner-main-body p-2 p-sm-3 forum-content">
                @foreach($forums as $forum)
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="media forum-item">
                            <div class="card-link">
                                <img src="{{$forum->user->avatar}}" class="rounded-circle ml-1" width="50" alt="User" />
                                <small class="d-block text-center text-muted" style="width:60px">{{$forum->user->name}}</small>
                            </div>
                            <div class="media-body ml-3">
                                <h5 class="mt-1 font-weight-bold">{{$forum->title}}</h5>
                                <small class="text-muted ml-2">{{$forum->created_at->format('j M , Y  h:i A')}}</small>
                                <div class="mt-3 font-size-sm" >{!!$forum->contents!!}</div>
                            </div>
                            <div class="text-muted text-center">
                                @if($forum->user->user_id===$user_id)
                                    <a href="#" class="text-muted mx-1" data-toggle="modal" data-target="#editForum" onclick="editForum('{{$forum->forum_id}}','{{$forum->tag}}',`{{$forum->title}}`,`{{$forum->contents}}`)"><span class="fas fa-edit"></span></a>
                                    <a href="#" onclick="appendAlertDeletePost('{{$forum->forum_id}}','{{$tagValue}}')"  class="text-muted mx-1"><span class="fas fa-trash-alt"></span></a>
                                @endif
                                <span><span class="far fa-comment mx-1"></span> {{count($forum->comment)}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                @for($index= 0;$index<count($forum->comment);$index++)
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="media forum-item">
                            <div class="card-link">
                                <img src="{{$forum->comment[$index]->user->avatar}}" class="rounded-circle ml-1" width="50" alt="User" />
                                <small class="d-block text-center text-muted" style="width:60px">{!!$forum->comment[$index]->user->name!!}</small>
                            </div>
                            <div class="media-body ml-3">
                                <small class="text-muted ml-2">{{$forum->comment[$index]->created_at->format('j M , Y  h:i A')}}</small>
                                <div class="mt-3 font-size-sm" >
                                    {!!$forum->comment[$index]->contents!!}
                                </div>
                            </div>
                            <div class="text-muted text-center">
                                @if($forum->comment[$index]->user->user_id===$user_id)
                                <a href="#" class="text-muted mx-1" data-toggle="modal" data-target="#editComment" onclick="editComment('{!!$forum->comment[$index]->comment_id!!}','{!!$tagValue!!}',`{{$forum->comment[$index]->contents}}`)"><span class="fas fa-edit"></span></a>
                                <a href="#" class="text-muted mx-1" onclick="appendAlertDeleteComment('{{$forum->comment[$index]->comment_id}}','{{$tagValue}}')"><span class="fas fa-trash-alt"></span></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
                <div class="form-group my-3">
                    <button type="button" class="form-control mx-auto col-md-3 btn-success" data-toggle="modal" data-target="#createComment" onclick="openSummernote()">Comment</button>
                </div>
            </div>
        </div>
</div>
@include('forum.edit')
@include('forum.comment.create')
@include('forum.comment.edit')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js" integrity="sha384-llmpdW/XN7NR6OnZQFvy2xN3KRv+Br5lpV3IEJYCJITjcjlfdSdxb0R3hAhfPsGq" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ URL::asset('js/forum.js') }}"></script> 

<script>
function editForum(forumID,forumTag, forumTitle, forumContents) {
    document.getElementById('forum-title').value = forumTitle;
    document.getElementById('forum-id').value = forumID;
    document.getElementById('forum-tag').value = forumTag;
    $('#forum-summernote').summernote({
    placeholder: 'Enter Contents Here',
    tabsize: 2,
    height: 120,
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture']],
        ['view', ['help']]
    ],
});
    $('#forum-summernote').summernote('code',forumContents);
}

function editComment(commentID,forumTag,commentContents) {
    document.getElementById('comment-id').value =commentID;
    document.getElementById('comment-forum-tag-id').value = forumTag;
    $('#comment-edit-summernote').summernote({
    placeholder: 'Enter Contents Here',
    tabsize: 2,
    height: 120,
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture']],
        ['view', ['help']]
    ],
});
    $('#comment-edit-summernote').summernote('code',commentContents);
}

function openSummernote()
{
    $('#comment-create-summernote').summernote({
    placeholder: 'Enter Contents Here',
    tabsize: 2,
    height: 120,
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture']],
        ['view', ['help']]
    ],
});
}

function deleteComment(commentID,pageTagValue) {
    document.location.href = `/forum/comment/destroy/${commentID}/${pageTagValue}`;
}

function deletePost(postID,pageTagValue) {
    document.location.href = `/forum/${pageTagValue}/${postID}/destroy`;
}
</script>

@stop