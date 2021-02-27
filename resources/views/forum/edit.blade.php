<?php
use App\Common;
?>
<div class="modal fade" id="editForum" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST" action="{{route('forum-update')}}" id="forumEditForm">
            {{ method_field('PUT') }}
            @csrf
                <div class="modal-header d-flex align-items-center text-white">
                    <h6 class="modal-title mb-0" id="threadModalLabel">Edit Forum Post</h6>
                    <a class="close remove-decoration" data-dismiss="modal" aria-label="Close" onclick="dismissErrorMessageForum()">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="Title">Title</label>
                        <input type="text" id="forum-title" class="form-control" name="title" placeholder="Enter title" autofocus="" value=""/>
                        <div class="text-danger small mx-1 mt-1" id="error-msg-title"></div>
                    </div>
                    <div class="form-group">
                        <label for="tag">Category</label>
                        <select class="form-control" id="forum-tag" name="tag">
                                <option value="default" disabled selected>Select Category</option>
                            @foreach(Common::$forumTags as $key => $value)
                                <option value={{$key}}>{{$value}}</option>
                            @endforeach
                        </select>
                        <div class="text-danger small mx-1 mt-1" id="error-msg-select"></div>
                    </div>
                    <label for="contents">Contents</label>
                    <textarea id="forum-summernote" name="contents"></textarea>
                    <div class="text-danger small mx-1 mt-1" id="error-msg-contents"></div>
                    <input type="hidden" name="id" id="forum-id" value="" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="form-control btn-danger col-md-2" data-dismiss="modal" onclick="dismissErrorMessageForum()">Cancel</button>
                    <button type="button" class="form-control btn-primary col-md-2" onclick="validatePost('forumEditForm')" >Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

    