<?php
use App\Common;
?>
<div class="modal fade" id="editPassword" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered" style="width:30%" role="document">
        <div class="modal-content">
            <form method="POST" action="{{route('profile-password-update')}}">
            {{ method_field('PUT') }}
            @csrf
                <div class="modal-header d-flex align-items-center text-white">
                    <h6 class="modal-title mb-0" id="threadModalLabel">Edit Password</h6>
                    <a class="close remove-decoration" data-dismiss="modal" aria-label="Close" onclick="dismissErrorMessagePassword()">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="Old Password">Current Password</label>
                        <input type="password" id="current-password" class="form-control" name="current_password" placeholder="Enter current password" value="" required autofocus/>
                        @error('current_password')
                            <div class="text-danger small mx-1 mt-1" id="error-msg-current-password">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="New Password">New Password</label>
                        <input type="password" id="new-password" class="form-control" name="password" placeholder="Enter new password" value="" required autofocus/>
                        @error('password')
                        <div class="text-danger small mx-1 mt-1" id="error-msg-new-password">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Confirm Password">Confirm Password</label>
                        <input type="password" id="confirm-password"  class="form-control" name="password_confirmation" placeholder="Enter confirm password"  value="" required autofocus/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="form-control btn-danger col-md-2" data-dismiss="modal" onclick="dismissErrorMessagePassword()">Cancel</button>
                    <button type="submit" class="form-control btn-primary col-md-3">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>
