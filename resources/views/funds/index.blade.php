@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="funds-container">
    <h2>My Funds</h2>
        <div class="funds-header">Account Details</div>
            <div class="funds-subcontainer">
                <div class="rTable">
                        <div class="rTableRow">
                            <div class="rTableCell_label">Name: </div>
                            <div class="rTableCell_data">{{$account->user->name}}</div>
                        </div>
                        <div class="rTableRow">
                            <div class="rTableCell_label">Currency :</div>
                            <div class="rTableCell_data">USD</div>
                        </div>
                        <div class="rTableRow">
                            <div class="rTableCell_label">Balance :</div>
                            <div class="rTableCell_data">${{$account->balance}}</div>
                        </div>
                        <div class="rTableRow">
                            <div class="rTableCell_label">Margin :</div>
                            <div class="rTableCell_data"  id="account-margin">${{$account->margin}}</div>
                        </div>
                        <div class="rTableRow">
                            <div class="rTableCell_label">Margin Used :</div>
                            <div class="rTableCell_data" id="account-margin-used">{{$account->margin_used}}</div>
                        </div>
                        <div class="rTableRow leverage">
                            <div class="rTableCell_label">Leverage :</div>
                            <div class="rTableCell_data" id="leverage-id">{{$account->leverage}} <a href="#" class="edit-btn" onclick="editLeverage()">Edit</a></div>
                        </div>
                    </div>
                <div class="form-group row mb-0 btn-margin">
                    <div class="col-md-4 offset-md-4">
                        <a href="{{ route('fund-deposit') }}" class="btn btn-primary btn-size">Deposit</a>
                        <a href="{{ route('fund-withdraw') }}" class="btn btn-primary btn-size">Withdraw</a>
                    </div>
                </div>
            </div>
    </div>
</div>

<script>

    function editLeverage(){
        @if (count($account->order)==0)
            var data = `<form action="{!! route('fund-update') !!}" method="post" id="myForm">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <select class="select-lev" name="leverage" id="leverage-list" required>
                                <option value="placeholder" disabled selected>Select Leverage</option>
                                <option value="50 : 1">50 : 1</option>
                                <option value="30 : 1">30 : 1</option>
                                <option value="10 : 1">10 : 1</option>
                        </select>
                        <a href="#" class="a-btn" onclick="submitForm()">Submit</a>
                        <a href="#" class="a-btn" onclick="cancelEdit()">Cancel</a>
                        </form>
                        <span id="alert-box" class="alert-span"></span>
                        `;
            document.getElementById('leverage-id').innerHTML = data;
        @else
             alert('You are not allowed to edit leverage unless all of your orders are completed.');
        @endif
        
    }

    function submitForm(){
        var initial = '{{$account->leverage}}';
        var value = document.getElementById('leverage-list').value;
        var span = document.getElementById('alert-box');

        if (value =="placeholder"){
            span.innerHTML = "*Please select a leverage ratio.";
        }
        else if(value==initial){
            span.innerHTML = "*Please select a different leverage ratio.";
        }
        else{
            document.getElementById("myForm").submit();
        }
    }

    function cancelEdit(){
        var data = `{{$account->leverage}} <a href="#" class="edit-btn" onclick="editLeverage()">Edit</a>`;
        document.getElementById('leverage-id').innerHTML = data;
    }


</script>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
    alert(msg);
    }
</script>

@stop