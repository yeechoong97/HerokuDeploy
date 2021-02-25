@extends('layouts.default')
@section('content')
<?php
  use App\Common;
 ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<body style="overflow:hidden">
<div class="funds-container mx-auto">
    <div class="main-funds-header">Order Summary &ensp;<i class="far fa-question-circle" onclick="toggleSummaryIntro()"></i></div>
        <div class="funds-subcontainer">               
            <div class="my-3 px-5 float-left" style="width:50%">
                <div class="form-group" id="select_month_intro">
                    <label >Month</label>
                    <form id="month-id" action="{{route('order-change-month')}}" method="POST">
                    @csrf
                    <select class="form-control" onchange="changeMonth()"  name="month_select">
                        @foreach($numberOfMonths as $month)
                            @if($month == $selectedMonth)
                            <option value="{{$month}}" selected>{{$month->format('M Y')}}</option>
                            @else
                            <option value="{{$month}}">{{$month->format('M Y')}}</option>
                            @endif
                        @endforeach
                    </select>
                    </form>
                </div>
                <div class="form-group"  id="total-profit-intro">
                    <label>Total Profits</label>
                    <input type="text" class="form-control text-success" readonly value="$ {{$monthlySummary[1]}}"/>
                </div>
                <div class="form-group" id="total-loss-intro">
                    <label>Total Losses</label>
                    <input type="text" class="form-control text-danger"  readonly value="$ {{$monthlySummary[2]}}"/>
                </div>
                <div class="form-group" id="total-order-intro">
                    <label>Total Number of Orders</label>
                    <input type="text" class="form-control"  readonly value="{{$monthlySummary[0]}}"/>
                </div>
            </div>
            <div class="my-4 px-5 text-center table-responsive float-right" style="width:50%">
                <table class="table col-md-15 table-bordered" id="summary-table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Instrument</th>
                            <th>Profit ($)</th>
                            <th>Loss ($)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>EUR/USD</td>
                            <td>{{$monthlySummary[3][0]}}</td>
                            <td>{{$monthlySummary[3][1]}}</td>
                        </tr>
                        <tr>
                            <td>AUD/USD</td>
                            <td>{{$monthlySummary[4][0]}}</td>
                            <td>{{$monthlySummary[4][1]}}</td>
                        </tr>
                        <tr>
                            <td>GBP/USD</td>
                            <td>{{$monthlySummary[5][0]}}</td>
                            <td>{{$monthlySummary[5][1]}}</td>
                        </tr>
                        <tr>
                            <td>USD/JPY</td>
                            <td>{{$monthlySummary[6][0]}}</td>
                            <td>{{$monthlySummary[6][1]}}</td>
                        </tr>
                        <tr>
                            <td>EUR/JPY</td>
                            <td>{{$monthlySummary[7][0]}}</td>
                            <td>{{$monthlySummary[7][1]}}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{route('order-show-history')}}" class="form-control btn-primary col-md-10 my-2 mx-auto remove-decoration" id="order-history-intro">View Orders History</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/order.js') }}"></script>
@stop