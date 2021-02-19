@extends('layouts.default')
@section('content')

<div class="container" style="height:1250px;margin-top:130px;">
<div class="main-body p-0 my-3" style="height:95%;border:1px solid #cbd5e0;">
    <div class="inner-wrapper">
        <!-- Inner sidebar -->
        <div class="inner-sidebar">
            <!-- Inner sidebar header -->
            <div class="inner-sidebar-header justify-content-center">
                <!-- <a class="btn-primary form-control has-icon" data-toggle="modal" data-target="#createForum" >
                    New Discussion
                </a> -->
                <a href="{{route('forum-index')}}" class="form-control btn-light has-icon text-center"><i class="fa fa-arrow-left mr-2"></i>Back</a>

            </div>
            <!-- /Inner sidebar header -->

            <!-- Inner sidebar body -->
            <div class="inner-sidebar-body p-0">
                <div class="p-3 h-100" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: -16px;">
                        <div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;">
                                    <div class="simplebar-content p-3" >
                                        <nav class="nav nav-pills nav-gap-y-1 flex-column">
                                            <a href="javascript:void(0)" class="nav-link nav-link-faded has-icon active">All Threads</a>
                                            <a href="javascript:void(0)" class="nav-link nav-link-faded has-icon">Popular this week</a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="simplebar-placeholder" style="width: 234px; height: 292px;"></div> -->
                    </div>
                    <!-- <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 151px; display: block; transform: translate3d(0px, 0px, 0px);"></div></div> -->
                </div>
            </div>
            <!-- /Inner sidebar body -->
        </div>
        <!-- /Inner sidebar -->

        <!-- Inner main -->
        <div class="inner-main">

            <!-- Forum Detail -->
            <div class="inner-main-body p-2 p-sm-3 forum-content">
                @foreach($forums as $forum)
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="media forum-item">
                            <a href="javascript:void(0)" class="card-link">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle" width="50" alt="User" />
                                <small class="d-block text-center text-muted">Newbie</small>
                            </a>
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-secondary">{{$forum->user->name}}</a>
                                <small class="text-muted ml-2">1 hour ago</small>
                                <h5 class="mt-1">{{$forum->title}}</h5>
                                <div class="mt-3 font-size-sm" >
                                    {!!$forum->contents!!}
                                </div>
                                <!-- <button class="d-inline form-control btn-primary  col-md-1">Edit</button> -->

                            </div>
                            <div class="text-muted text-center">
                                <a href="#" class="text-muted mx-1" data-toggle="modal" data-target="#editForum" onclick="editForum('{{$forum->id}}',`{{$forum->title}}`,`{!!$forum->contents!!}`)"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('forum-destroy',$forum->id) }}" class="text-muted mx-1"><i class="fas fa-trash-alt"></i></a>
                                <span><i class="far fa-comment ml-2"></i> 3</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>

    @include('forum.edit')

    <script>
function editForum(id, title, contents) {
    console.log(contents);
    document.getElementById('forum-title').value = title;
    document.getElementById('form-id').value = id;
    $('#summernote').summernote({
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
    ],
});
    $('#summernote').summernote('code',contents);
}
    </script>

@stop