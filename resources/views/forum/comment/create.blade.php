<?php
use App\Common;
?>
<div class="modal fade" id="createComment" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="{{route('comment-store',['id'=>$forum->forum_id,'tag'=>$tagValue])}}">
                @csrf
                    <div class="modal-header d-flex align-items-center text-white">
                        <h6 class="modal-title mb-0" id="threadModalLabel">New Comment</h6>
                        <a class="close remove-decoration" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <label for="contents">Comment</label>
                        <textarea id="comment-create-summernote" name="contents"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="form-control btn-danger col-md-2" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="form-control btn-primary col-md-2" >Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>