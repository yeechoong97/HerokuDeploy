@extends('layouts.default')
@section('content')
<link href="{{ asset('css/orders.css') }}" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<body style="overflow-y:auto">
<div class="orders-history-container mx-auto">
        <div class="orders-history-header"><a href="{{route('order-summary')}}" class="remove-decoration text-white"><span class="fas fa-arrow-circle-left float-left my-1 mx-2"></span></a> Order History  &ensp;<span class="far fa-question-circle" onclick="toggleOrderIntro()"></span></div>
            <div class="orders-history-subcontainer">
                <div class="orders-upper-container">
                    <div class="orders-date-input">
                        <div class="half-date-input" id="start-date-intro">
                            <div class="date-label">Start Date :</div>
                                <input type="date" id="start-date" class="form-control col-md-5 date-input" value="{{$start}}" min="{{$start}}" max="{{$now}}" onchange="filterDate()" onfocus="savePreviousDate()" onkeypress="return false" ></input>
                            </div>
                        <div class="half-date-input" id="end-date-intro">
                            <div class="date-label">End Date :</div>
                                <input type="date" id="end-date" class="form-control col-md-5 date-input" value="{{$now}}" min="{{$start}}" max="{{$now}}" onchange="filterDate()" onfocus="savePreviousDate()" onkeypress="return false" ></input>
                            </div>
                        </div>
                    </div>
                <div class="orders-lower-container">
            <div class="row">
                <div class="mx-auto bg-white rounded shadow customization">
                    <div class="table-responsive">
                        <table id="all_orders"  class="table table-fixed" aria-label="orders-history-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="col1" scope="col">TicketID</th>
                                    <th class="col4" id="th-created_at" onclick="sortTable('created_at')" >Date <span class="fas fa-caret-down" id="span-created_at"></span></th>
                                    <th class="col3" id="th-pair" onclick="sortTable('pair')" >Instrument <span class="fas fa-caret-down" id="span-pair"></span></th>
                                    <th class="col2" id="th-units" onclick="sortTable('units')" >Units <span class="fas fa-caret-down" id="span-units"></span></th>
                                    <th class="col2" id="th-type" onclick="sortTable('type')" >Type <span class="fas fa-caret-down" id="span-type"></span></th>
                                    <th class="col2" id="th-entry">Entry</th>
                                    <th class="col2" id="th-exit">Exit</th>
                                    <th class="col3" id="th-cost" onclick="sortTable('cost')" >Spread Cost <span class="fas fa-caret-down" id="span-cost"></span></th>
                                    <th class="col3" id="th-profit" onclick="sortTable('profit')" >Profit/Loss <span class="fas fa-caret-down" id="span-profit"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @include('order.order-table')
                            </tbody>
                        </table>
                        <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                        <input type="hidden" name="hidden_sort" id="hidden_sort" value="created_at" />
                        <input type="hidden" name="hidden_order" id="hidden_order" value="desc" />
                        <input type="hidden" name="hidden_prev_start" id="hidden_prev_start" value="{{$start}}" />
                        <input type="hidden" name="hidden_prev_end" id="hidden_prev_end" value="{{$now}}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="{{ URL::asset('js/order.js') }}"></script>  
@stop

