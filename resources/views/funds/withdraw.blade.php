@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="funds-container mx-auto">
    <div class="funds-header">Withdrawal</div>
        <div class="funds-subcontainer">
            <div class="funds-left-div px-3">
                <div class="form-group1 mx-auto">
                    <label for="name">Name :</label>
                    <input class="form-control" type="text" value="{{$account->user->name}}" disabled/>
                </div>
                <div class="form-group1 mx-auto">
                    <label for="name">Margin Available:</label>
                    <input class="form-control" type="text" value="${{$account->margin}}" disabled/>
                </div>
                <div class="form-group1 mx-auto">
                    <div class="beautiful bs-callout bs-callout-info">
                        <h5>Info</h5>
                        <ul class="notice-list">
                            <li>Minimum Account Balance is 100.00</li>
                            <li>Minimum Available Margin is 100.00</li>
                            <li>Maximum Withdrawal Amount is 50,000.00</li>
                            <li><strong>NO</strong> real monetary cost required</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="funds-right-div px-3">
                <div class="form-group1 mx-auto">
                    <label for="name">Balance :</label>
                    <input class="form-control" type="text" value="${{$account->balance}}" disabled/>
                </div>
                <div class="form-group1 mx-auto">
                    <label for="name">Amount :</label>
                    <div id="leverage-div">
                        <form method="post" id="myForm" action="{!! route('withdraw-update') !!}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="input-container">
                                <input class="form-control" type="number" name="amount" id="amount_input" placeholder="Enter Amount" onkeyup="validateWithdrawalInput('{{$account->balance}}','{{$account->margin}}')" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" autofocus/>
                                <span class="fas fa-check fa-lg tick-span" id="tick" style="display:none"></span>
                                <span class="fas fa-times fa-lg cross-span" id="cross" style="display:none"></span>
                            </div>
                        </form>
                    </div>
                    <div class="error-label small" id="error-msg"></div>
                </div>
                <div class="btn-div">
                    <div class="form-group align-btn" id="lev-btn-div" >
                        <a href="#" class="btn btn-confirm btn-block" id="submit-btn" onclick="submitForm()">Confirm</a>
                        <a href="{{ route('fund-index') }}" class="btn-danger btn-second btn-block">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/funds.js') }}"></script>  
@stop
