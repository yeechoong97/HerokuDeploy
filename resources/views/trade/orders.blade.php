@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="orders-history-container">
    <h2>Order History</h2>
        <div class="orders-history-header">Order Details</div>
            <div class="orders-history-subcontainer">
                <div class="orders-upper-container">
                    <div class="orders-date-input">
                        <div class="half-date-input">
                            <div class="date-label">Start Date :</div>
                            <input type="date" id="start-date" class="form-control col-md-6 date-input" onchange="retrieve()" ></input>
                        </div>
                        <div class="half-date-input">
                            <div class="date-label">End Date :</div>
                            <input type="date" id="end-date" class="form-control col-md-6 date-input" onchange="retrieve()" ></input>
                        </div>
                    </div>
                </div>
                <div class="orders-lower-container">
                    <div class="orders_table_record" id="table_all_records">
                    <table id="all_orders" class="history-table">
                        <thead>
                        <tr>
                            <th align="center">TicketID <i class="fas fa-caret-down"></i></th>
                            <th>Date <i class="fas fa-caret-up"></i></th>
                            <th>Instrument</th>
                            <th>Units</th>
                            <th>Type</th>
                            <th>Entry</th>
                            <th>Exit</th>
                            <th>Spread Cost</th>
                            <th>Profit/Loss</th>
                        </tr>
                        </thead>
                        <tbody>
                            @include('trade.pagination')
                        </tbody>
                    </table>
                    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                </div>
            </div>
    </div>
</div>

<script>

$(window).on('load', function() {
    console.log('All assets are loaded');
})
    var page,prestart,preend;

    var start = "{{$start}}";
    var new_start = start.split(" ");

    var now = new Date();
    var year = now.getFullYear();
    var month = now.getMonth() + 1;
    var date = now.getDate();
    if (date<10){
        date = "0"+ date;
    }

    document.getElementById('start-date').value = new_start[0];
    document.getElementById('end-date').value = year+"-"+month+"-"+date;
    document.getElementById('start-date').min = new_start[0];
    document.getElementById('end-date').min = new_start[0];
    document.getElementById('start-date').max = year+"-"+month+"-"+date;
    document.getElementById('end-date').max = year+"-"+month+"-"+date;
    prestart = new_start[0];
    preend = year+"-"+month+"-"+date;

function retrieve(){
    var token = $('meta[name="csrf-token"]').attr('content');
    var start = document.getElementById('start-date').value;
    var end = document.getElementById('end-date').value;

    console.log(prestart + ">>>" + start);
    console.log(preend + "+++" + end)

    if (prestart!=start || preend !=end)
    {
        page = 1;
        prestart = start;
        preend = end;
    }
    
    $.ajax({
               type:'GET',
               url:'/view/fetch',
               data: {
                  _token:token,
                  start:start,
                  end:end,
                  page:page,
               },
               success:function(data) {
                $('tbody').html('');
                $('tbody').html(data);
               },
               error: function(data){
                  console.log(JSON.stringify(data));
               }
         });
}

$(document).on('click', '.pagination a', function(event){
  event.preventDefault();
  page = $(this).attr('href').split('page=')[1];
  $('#hidden_page').val(page);

  $('li').removeClass('active');
  $(this).parent().addClass('active');
  retrieve();
 });



</script>

@stop