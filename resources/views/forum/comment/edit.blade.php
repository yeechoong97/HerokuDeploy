<?php
use App\Common;
?>
<div class="modal fade" id="editComment" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="{{route('comment-update')}}">
                {{ method_field('PUT') }}
                @csrf
                    <div class="modal-header d-flex align-items-center text-white">
                        <h6 class="modal-title mb-0" id="threadModalLabel">Edit Comment</h6>
                        <a class="close remove-decoration" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <label for="contents">Contents</label>
                        <textarea id="comment-edit-summernote" name="commentContents"></textarea>
                        <input type="hidden" name="commentID" id="comment-id" value="" />
                        <input type="hidden" name="tagForumID" id="comment-forum-tag-id" value="" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="form-control btn-danger col-md-2" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="form-control btn-primary col-md-2" >Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    