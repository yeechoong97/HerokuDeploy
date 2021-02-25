@extends('layouts.default')
@section('content')
<?php
  use App\Common;
 ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="funds-container mx-auto">
    <div class="main-funds-header">Account Details  &ensp;<i class="far fa-question-circle" onclick="toggleFundsIntro()"></i></div>
        <div class="funds-subcontainer">
            <div class="funds-left-div px-3">
                <div class="form-group1 mx-auto" id="name-intro">
                    <label for="name">Name :</label>
                    <input class="form-control" type="text" value="{{$account->user->name}}" disabled/>
                </div>
                <div class="form-group1 mx-auto"  id="currency-intro">
                    <label for="name">Currency :</label>
                    <input class="form-control" type="text" value="USD" disabled/>
                </div>
                <div class="form-group1 mx-auto"  id="balance-intro">
                    <label for="name">Balance</label>
                    <input class="form-control" type="text" value="${{$account->balance}}" disabled/>
                </div>
                <div class="form-group1 mx-auto" id="margin-intro">
                    <label for="name">Margin Available:</label>
                    <input class="form-control" type="text" id="account-margin" value="${{$account->margin}}"  disabled/>
                </div>
            </div>
            <div class="funds-right-div px-3">
                <div class="form-group1 mx-auto" id="margin-used-intro">
                    <label for="name">Margin Used :</label>
                    <input class="form-control" type="text" id="account-margin-used" value="{{$account->margin_used}}" disabled/>
                </div>
                <div class="form-group1 mx-auto" id="leverage-intro">
                    <label for="name">Leverage :</label>
                    <div id="leverage-div">
                        <input class="form-control" type="text" id="leverage-id" value="{{$account->leverage}}" disabled/>
                        <a href="#" class="edit-btn" id="leverage-edit-intro"  onclick="editLeverage()">Edit</a>
                    </div>
                </div>
                <div class="btn-div">
                    <div class="form-group align-btn" id="general-btn-div">
                        <a href="{{ route('fund-deposit') }}" class="btn btn-primary btn-block" id="deposit-intro">Deposit</a>
                        <a href="{{ route('fund-withdraw') }}" class="btn btn-primary btn-block" id="withdraw-intro">Withdraw</a>
                    </div>
                    <div class="form-group align-btn" id="leverage-btn-div"  style="display:none" >
                        <a href="#" class="btn btn-confirm btn-block"onclick="submitLeverageForm()">Confirm</a>
                        <a href="#" class="btn btn-second btn-block" onclick="cancelEdit()">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/funds.js') }}"></script>  
<script>

//Display the alert message
window.onload = function() {
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist)
    appendFundAlert('Success','success',msg);
}

//Hide and display the essential contents
function editLeverage(){
    @if (count($account->order)==0)
        var data = `<form action="{!! route('fund-update') !!}" method="post" id="leverageForm">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <select class="form-control" name="leverage" id="leverage-list">
                    @foreach(Common::$leverage as $key=> $value)
                        @if ($account->leverage== $key)
                        <option value="{{$key}}" selected>{{$value}}</option>
                        @else
                        <option value="{{$key}}">{{$value}}</option>
                        @endif
                    @endforeach
                    </select>
                    </form>
                    <span id="alert-box" class="alert-span"></span>
                    `;
        document.getElementById('leverage-div').innerHTML = data;
        document.getElementById('general-btn-div').style.display = "none";
        document.getElementById('leverage-btn-div').style.display = "block";
    @else
        appendFundAlert('Error','error','You are not allowed to edit leverage unless all of your orders are completed.');
    @endif
}

//Submit the leverage form
function submitLeverageForm(){
    var initialLeverage = '{{$account->leverage}}';
    var selectedLeverage = document.getElementById('leverage-list').value;
    var alertBox = document.getElementById('alert-box');
    if(selectedLeverage==initialLeverage){
        alertBox.innerHTML = "*Please select a different leverage ratio.";
    }
    else{
        document.getElementById("leverageForm").submit();
    }
}

//Remove the new contents
function cancelEdit(){
    var data = `<input class="form-control" type="text" id="leverage-id" value="{{$account->leverage}}" disabled/>
                <a href="#" class="edit-btn" onclick="editLeverage()">Edit</a>`;
    document.getElementById('leverage-div').innerHTML = data;
    document.getElementById('general-btn-div').style.display = "block";
    document.getElementById('leverage-btn-div').style.display = "none";
}

</script>

@stop