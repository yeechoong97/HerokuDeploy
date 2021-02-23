@extends('layouts.default')
@section('content')
<?php
use App\Common;
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" /> -->
<div class="container" style="height:1250px;margin-top:130px;">
<div class="main-body p-0 my-3" style="height:95%;border:1px solid #cbd5e0;">
    <div class="inner-wrapper">
        <div class="inner-sidebar">
            <div class="inner-sidebar-header justify-content-center" id="new-post-intro">
                <a class="btn-primary form-control has-icon remove-decoration" data-toggle="modal" data-target="#createForum" >
                    New Post
                </a>
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
                                            <a href="{{route('forum-index','All Posts')}}" class="nav-link nav-link-faded has-icon"><i class="fas fa-tag mr-2"></i>All Posts</a>
                                            <a href="{{route('forum-index','Your Posts')}}" class="nav-link nav-link-faded has-icon"><i class="fas fa-tag mr-2"></i>Your Posts</a>
                                            @foreach(Common::$forumTags as $key => $value)
                                            <a href="{{route('forum-index',$value)}}" class="nav-link nav-link-faded has-icon"><i class="fas fa-tag mr-2"></i>{{$value}}</a>
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
            <div class="inner-main-header">
                <div class="forum-question-btn">
                    <i class="far fa-question-circle text-info" onclick="showForumTips()"></i>
                </div>
                <a class="nav-link nav-icon rounded-circle mr-3 d-md-none" href="#" data-toggle="inner-sidebar"><i class="material-icons">arrow_forward_ios</i></a>
                <select class="custom-select form-control custom-select-sm w-auto mr-1" id="select-filter">
                    <option value="title" selected>Title</option>
                    <option value="latest">Latest</option>
                    <option value="oldest">Oldest</option>
                </select>
                <span class="input-icon input-icon-sm ml-auto" style="width:30%">
                        <input type="text" id="search-forum-text" name="search" class="form-control col-md-10 float-left" placeholder="Search">
                        <a class="float-right mr-3 my-2 remove-decoration" id="searchBtn"><i class="fas fa-search"></i></a>
                </span>
            </div>
            <div class="inner-main-body p-2 p-sm-3 collapse forum-content show" id="main-contents-forum">
               @include('forum.contents')
            </div>            
        </div>
    </div>
    <input type="hidden" name="hidden_page" id="hidden_page_number" value="1" />
@include('forum.create')

<script type="text/javascript" src="{{ URL::asset('js/forum.js') }}"></script> 
<script>
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
        ['view', ['fullscreen', 'codeview', 'help']]
    ]
});

window.addEventListener("load",(event)=>{
    displayAuthor();
})

function displayAuthor(){
    @foreach($forums as $forum)
    var currentDate = new Date();
    var forumCreated = new Date("{{$forum->created_at}}");
    var differentDay = calculateDayDifference(currentDate,forumCreated);
    if(differentDay==0)
        dayMessage = " today";
    else if(differentDay==1)
        dayMessage = " 1 day ago";
    else
        dayMessage = ` ${differentDay} days ago`;
    document.getElementById('{{$forum->forum_id}}-duration-id').innerHTML=`Created <span class="text-secondary font-weight-bold">${dayMessage}</span> `
    @endforeach
}

document.getElementById('searchBtn').addEventListener('click', function() {
    document.getElementById('hidden_page_number').value = 1;
    resetFilter();
    searchForum();
})

document.getElementById('search-forum-text').addEventListener('keyup', function(event) {
    if(event.keyCode === 13)
    {
        event.preventDefault();
        document.getElementById('searchBtn').click();
    }
})

document.getElementById('select-filter').addEventListener('change', function() {
    document.getElementById('hidden_page_number').value = 1;
    searchForum();
})

    </script>

@stop

