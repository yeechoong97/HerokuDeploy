@extends('layouts.default')
@section('content')
<?php
  use App\Common;
 ?>

<link href="{{ asset('css/funds.css') }}" rel="stylesheet">
<link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<body style="overflow:hidden">
<div class="funds-container mx-auto">
    <div class="main-funds-header">Profile</div>
        <div class="funds-subcontainer">
            <div class="mx-auto pt-2 text-center">
                <img src="{{$user->avatar}}" class="rounded-circle" width="70" alt="User" /><br/>
                <a class="text-center small remove-decoration" data-toggle="modal" data-target="#avatarList">Edit</a>
            </div>
            <div class="funds-left-div" style="height:50%">
                <div class="form-group1 mx-auto" id="name-intro">
                    <label for="name">Username :</label>
                    <input class="form-control" type="text" value="{{$user->username}}" disabled/>
                </div>
                <div class="form-group1 mx-auto"  id="currency-intro">
                    <label for="name">Email :</label>
                    <input class="form-control" type="text" value="{{$user->email}}" disabled/>
                </div>
                <div class="  mx-auto text-center">
                    <a href="#" class="btn edit-left-profile-btn btn-block float-right mr-3 text-white" data-toggle="modal" data-target="#editProfile" onclick="assignProfileValue('{{$user->name}}','{{$user->email}}','{{$user->phone}}')">Edit Profile</a>
                </div>
                <div style="bottom: 0px;left: 0px;position: absolute;" class="mx-2">
                @if($user->tutorial == 1)
                <input type="checkbox" id="tutorial-checkbox" class="float-left mx-2 show-again" checked onclick="changeTutorialStatus()" />
                @else
                <input type="checkbox" id="tutorial-checkbox" class="float-left mx-2 show-again" onclick="changeTutorialStatus()" />
                @endif
                <label class="my-2 small">Do not show tutorial on startup</label>
                </div>
            </div>
            <div class="funds-right-div" style="height:50%">
                <div class="form-group1 mx-auto" id="margin-used-intro">
                    <label for="name">Name :</label>
                    <input class="form-control" type="text"  value="{{$user->name}}" disabled/>
                </div>
                <div class="form-group1 mx-auto" id="margin-intro">
                    <label for="name">Phone</label>
                    <input class="form-control" type="text" value="{{$user->phone}}"  disabled/>
                </div>
                <div class="btn-div">
                    <div class="form-group d-inline" id="general-btn-div">
                        <a href="#" class="btn-danger btn-second btn-block" data-toggle="modal" data-target="#editPassword">Edit Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="avatarList" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                    <div class="modal-header d-flex align-items-center text-white">
                        <h6 class="modal-title mb-0" id="threadModalLabel">Pick your avatar</h6>
                        <a class="close remove-decoration" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <div class="modal-body">
                    <form action="{{route('profile-avatar')}}" method="POST">
                    @csrf
                        @foreach(Common::$avatarLists as $key => $value)
                            <div style="width:60px;height:70px" class="float-left mx-3 my-2">
                                <img src="{{$key}}" class="rounded-circle avatar-border" width="50" alt="User" />
                                @if($value == $avatar)
                                <input type="radio" name="avatar_list" value="{{$value}}" style="margin-left:35%" checked/>
                                @else
                                <input type="radio" name="avatar_list" value="{{$value}}" style="margin-left:35%"/>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="form-control btn-danger col-md-2" id="dismissModalBtn" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="form-control btn-primary col-md-2">Change</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@include('profile.edit-password')
@include('profile.edit-profile')

<script type="text/javascript" src="{{ URL::asset('js/home.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/profile.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
<script>
//Display the alert message
@if($errors->any())
    $('#editPassword').modal();
@endif

window.onload = function() {
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist)
    appendProfileAlert(msg);
}

</script>
@stop