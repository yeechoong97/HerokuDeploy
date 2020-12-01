@extends('layouts.default')
@section('content')


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="funds-container">
    <h2>My Funds</h2>
        <div class="funds-header">Deposit</div>
            <div class="funds-subcontainer">
                <div class="rTable">
                        <div class="rTableRow">
                            <div class="rTableCell_label">Name: </div>
                            <div class="rTableCell_data">{{$name}}</div>
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
                            <div class="rTableCell_label">Amount :</div>
                            <form method="post" id="myForm" action="{!! route('deposit-update') !!}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="rTableCell_data">$ <input type="number" name="amount" id="amount_input" class="amount" onkeyup="validateInput('{{$account->balance}}')" /><span class="fas fa-check tick-span" id="tick" style="display:none"></span><span class="fas fa-times cross-span" id="cross" style="display:none"></span></div>
                            </form>
                        </div>
                        <div class="rTableRow">
                            <div class="rTableCell_label"></div>
                            <div class="error-label" id="error-msg"></div>
                        </div>
                    </div>
                    <div class="alert-infobox notice">
                        <h6 class="alert-heading"><u>Note</u></h6>
                        <ul class="notice-list">
                            <li>Maximum Account Balance is 1,00,000.00</li>
                            <li>Maximum Deposit Amount is 50,000.00</li>
                            <li>Fees are <strong>NOT</strong> required For Deposit Process</li>
                        </ul> 
                    </div>  
                <div class="form-group row mb-0 btn-withdrawal">
                    <div class="col-md-4 offset-md-4">
                        <a href="{{ route('fund-index') }}" class="btn btn-danger btn-size">Cancel</a>
                        <a href="#" class="btn register-btn btn-size" id="submit-btn" onclick="submitForm()">Confirm</a>
                    </div>
                </div>
            </div>
    </div>
</div>

<script>

    function validateInput(balance){

        var amount = document.getElementById('amount_input').value;
        var acc_balance = parseFloat(balance);
        amount = parseFloat(amount);

        if (amount<=50000 && amount!=0)
        {
            document.getElementById('cross').style.display= 'none';
            document.getElementById('tick').style.display= 'inline';
        }
        else if(amount>=acc_balance)
        {
            document.getElementById('tick').style.display= 'none';
            document.getElementById('cross').style.display= 'inline';
        }
        else
        {
            document.getElementById('tick').style.display= 'none';
            document.getElementById('cross').style.display= 'inline';
        }        
        document.getElementById('error-msg').innerHTML ="";
    }

    function submitForm(){
        var amount = document.getElementById('amount_input').value;
        amount = parseFloat(amount);
        var status = document.getElementById('cross').style.display;

        if (amount<=0 || isNaN(amount)==true || status=="inline")
        {
            document.getElementById('error-msg').innerHTML = "*Invalid amount is entered";
        }
        else{
            document.getElementById("myForm").submit();
        }
    }

</script>

@stop