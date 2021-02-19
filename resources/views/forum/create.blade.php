<div class="modal fade" id="createForum" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form method="POST" action="{{route('forum-store')}}">
                @csrf
                    <div class="modal-header d-flex align-items-center text-white">
                        <h6 class="modal-title mb-0" id="threadModalLabel">New Discussion</h6>
                        <a class="close remove-decoration" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter title" autofocus="" />
                        </div>
                        <!-- <textarea class="form-control summernote"></textarea> -->
                        <label for="contents">Contents</label>
                        <textarea id="summernote" name="contents"></textarea>

                        <!-- <div class="custom-file form-control-sm mt-3" style="max-width: 300px;">
                            <input type="file" class="custom-file-input" id="customFile" multiple="" />
                            <label class="custom-file-label" for="customFile">Attachment</label>
                        </div> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="form-control btn-danger col-md-2" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="form-control btn-primary col-md-2" >Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>