<?php
use App\Common;
?>
<div class="modal fade" id="createComment" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="{{route('comment-store',['id'=>$forum->forum_id,'tag'=>$tagValue])}}" id="commentCreateForm">
                @csrf
                    <div class="modal-header d-flex align-items-center text-white">
                        <h6 class="modal-title mb-0" id="threadModalLabel">New Comment</h6>
                        <a class="close remove-decoration" data-dismiss="modal" aria-label="Close" onclick="dismissErrorMessage('error-msg-create-contents')">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <label for="contents">Comment</label>
                        <textarea id="comment-create-summernote" name="contents"></textarea>
                        <div class="text-danger small mx-1 mt-1" id="error-msg-create-contents"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="form-control btn-danger col-md-2" data-dismiss="modal" onclick="dismissErrorMessage('error-msg-create-contents')">Cancel</button>
                        <button type="button" class="form-control btn-primary col-md-2" onclick="validateComment('commentCreateForm')" >Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>