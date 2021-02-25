<?php
use App\Common;
?>
<div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered" style="width:30%" role="document">
        <div class="modal-content">
            <form method="POST" action="{{route('profile-update')}}" id="profileEditForm">
            {{ method_field('PUT') }}
            @csrf
                <div class="modal-header d-flex align-items-center text-white">
                    <h6 class="modal-title mb-0" id="threadModalLabel">Edit Profile</h6>
                    <a class="close remove-decoration" data-dismiss="modal" aria-label="Close" onclick="dismissErrorMessageProfile()">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="Title">Name</label>
                        <input type="text" id="profile-name" class="form-control" name="name" value="{{$user->name}}" required autofocus/>
                        <div class="text-danger small mx-1 mt-1" id="error-msg-name"></div>
                    </div>
                    <div class="form-group">
                        <label for="Title">Email</label>
                        <input type="text" id="profile-email" class="form-control " name="email" value="{{$user->email}}" required autofocus/>
                        <div class="text-danger small mx-1 mt-1" id="error-msg-email"></div>
                    </div>
                    <div class="form-group">
                        <label for="Title">Phone</label>
                        <input type="number" id="profile-phone" class="form-control" name="phone" value="{{$user->phone}}" maxlength="11" required autofocus onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                        <div class="text-danger small mx-1 mt-1" id="error-msg-phone"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="form-control btn-danger col-md-2" data-dismiss="modal" onclick="dismissErrorMessageProfile()">Cancel</button>
                    <button type="button" class="form-control btn-primary col-md-3" onclick="validateProfile()">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>
