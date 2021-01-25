@extends('layouts.default')
@section('content')
<?php
use App\Common;
?>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

<body style="overflow-x:hidden">
<div class="upper-container">
    <div class="row upper-row-container" >
        <div class="col-md-6 col-xl-10 offset-xl-0 chart-section" >
            <div class="chart-container-btn">
                <select class="form-control col-md-2" id="typeSelect" onchange="create()">
                    <option value="default" selected disabled>Annotation Type</option>
                    @foreach(Common::$annotation as $key=> $value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
                <select class="form-control col-md-1" id="seriesSelect" onchange ="changeSeries()">
                    @foreach(Common::$series as $key=> $value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
                <select class="form-control col-md-1" id="intervalSelect" onchange ="changeSeries()">
                    @foreach(Common::$interval as $key=> $value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
                <select class="form-control col-md-3"  id="indicatorSelect" onchange ="changeIndicator()">
                    <option value="default" selected disabled>Add Indicator</option>
                    @foreach(Common::$indicator as $key=> $value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
                <button class="form-control col-md-1 reset-btn" onclick="resetChart()">Reset</button>
                <!-- <button class="form-control col-md-1" onclick="removeAll()">Remove All</button> -->
                <!-- <button class="form-control col-md-1" onclick ="removeSelected()">Remove</button> -->
                <button class="question-btn">
                    <i class="far fa-question-circle"></i>
                </button>

                <div class="f_control col-md-1 spread_order_button" onclick="testing()">
                    <a href="#" class="spread_btn">
                        <span class="span-title-spread">SPREAD</span>
                        <span class="span-data" id="pips-action"></span>
                    </a>
                </div>

                <div class="f_control col-md-1 buy_order_button " id ="buy" onclick="openLightbox('buy')">
                    <a href="#" class="buy_btn">
                        <span class="span-title-buy">BUY</span>
                        <span class="span-data" id="buy-action"></span>
                    </a>
                </div>

                <div class="f_control col-md-1 sell_order_button " id ="sell" onclick="openLightbox('sell')">
                    <a href="#" class="sell_btn">
                        <span class="span-title-sell">SELL</span>
                        <span class="span-data" id="sell-action"></span>
                    </a>
                </div>
            </div>
        <div id="container" class="chart-section-container bg-white rounded shadow"></div>
        <input type="hidden" value="EUR_USD" id="instrumentSelect"/>
    </div>
        <div class="col-md-6 col-xl-2 offset-xl-0 account-section">
            <div class="row account">
                <div class="mx-auto bg-white rounded shadow customization">
                    <div class="table-responsive account-table" id="account_table">
                        <table class="table" >
                            <thead>
                                <tr>
                                    <th colspan="2" class="col" >Account Details &ensp;<i class="far fa-question-circle"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Currency :</td>
                                    <td>USD</td>
                                </tr>
                                <tr>
                                    <td>Balance :</td>
                                    <td>${{$account->balance}}</td>
                                </tr>
                                <tr>
                                    <td>Margin :</td>
                                    <td id="account-margin">${{$account->margin}}</td>
                                </tr>
                                <tr>
                                    <td>Margin Used :</td>
                                    <td id="account-margin-used">{{$account->margin_used}}</td>
                                </tr>
                                <tr>
                                    <td>Leverage :</td>
                                    <td id="account-leverage">{{$account->leverage}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lower-container">
    <div class="row lower-row-container" >
        <div class="col-md-6 col-xl-10 offset-xl-0 order-section">
            <div class="row order">
                <div class="mx-auto bg-white rounded shadow order-customization">
                    <div class="order-table table-responsive" id="table_all_orders">
                        <table class="table-fixed table" id="all_orders">
                            <thead>
                            <tr>
                                <th class="col1">TicketID</th>
                                <th class="col2">Date</th>
                                <th class="col1">Pair</th>
                                <th class="col1">Units</th>
                                <th class="col1">Type</th>
                                <th class="col1">Margin</th>
                                <th class="col1">Price</th>
                                <th class="col1">Current</th>
                                <th class="col1">Profit (USD)</th>
                                <th class="col2">Profit (Pips)</th>
                                <th class="col1">Profit (%)</th>
                                <th class="col1">Action <i class="far fa-question-circle"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($account->order as $record)
                                <tr>
                                    <td class="col1">{{$record->ticketID}}</td>
                                    <td class="col2">{{$record->created_at->toDateString()}}</td>
                                    <td class="col1">{{$record->pair}}</td>
                                    <td class="col1">{{$record->available_units}}</td>
                                    <td class="col1">{{$record->type}}</td>
                                    <td class="col1">{{$record->margin}}</td>
                                    <td class="col1">{{$record->entry_price}}</td>
                                    <td class="col1"></td>
                                    <td class="col1"></td>
                                    <td class="col2"></td>
                                    <td class="col1"></td>
                                    <td class="col1"><a class="close_position" onclick="openOrderBox('{{$record->ticketID}}',100)"><span class="far fa-times-circle"></span></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-2 offset-xl-0 price-section">
            <div class="price-container bg-white rounded shadow mx-auto">
                <div class="header">
                    <h6>Rates &ensp;<i class="far fa-question-circle"></i></h6>
                </div>
                <div class="price mx-auto">
                    <div class="rates">
                        <div class="header" id="EUR_USD_header" onclick="changeInstrument('EUR_USD')" style="background-color:#fff7eb">EUR/USD <span class="fas fa-check-circle" id="EUR_USD_span"></span></div>
                            <div class="rates-container">
                                <div class="sell-rates" id="EUR_USD_Sell" style="background-color:#ffeded"></div>
                                <div class="buy-rates" id="EUR_USD_Buy" style="background-color:#e0f0ff"></div>
                            </div>
                        <div class="pips" id="EUR_USD_Pips" style="background-color:#f5edff"></div>
                    </div>
                </div>
                <div class="price mx-auto">
                    <div class="rates">
                        <div class="header" id="AUD_USD_header" onclick="changeInstrument('AUD_USD')">AUD/USD <span class="fas fa-check-circle" id="AUD_USD_span" style="display:none"> </div>
                            <div class="rates-container">
                                <div class="sell-rates" id="AUD_USD_Sell"></div>
                                <div class="buy-rates" id="AUD_USD_Buy"></div>
                            </div>
                        <div class="pips" id="AUD_USD_Pips"></div>
                    </div>
                </div>
                <div class="price mx-auto">
                    <div class="rates">
                        <div class="header" id="GBP_USD_header" onclick="changeInstrument('GBP_USD')">GBP/USD <span class="fas fa-check-circle" id="GBP_USD_span" style="display:none"></div>
                            <div class="rates-container">
                                <div class="sell-rates" id="GBP_USD_Sell"></div>
                                <div class="buy-rates" id="GBP_USD_Buy"></div>
                            </div>
                        <div class="pips" id="GBP_USD_Pips"></div>
                    </div>
                </div>
                <div class="price mx-auto">
                    <div class="rates">
                        <div class="header" id="USD_JPY_header" onclick="changeInstrument('USD_JPY')">USD/JPY<span class="fas fa-check-circle" id="USD_JPY_span" style="display:none"></div>
                            <div class="rates-container">
                                <div class="sell-rates" id="USD_JPY_Sell"></div>
                                <div class="buy-rates" id="USD_JPY_Buy"></div>
                        </div>
                        <div class="pips" id="USD_JPY_Pips"></div>
                    </div>
                </div>
                <div class="price mx-auto">
                    <div class="rates">
                        <div class="header" id="EUR_JPY_header" onclick="changeInstrument('EUR_JPY')">EUR/JPY <span class="fas fa-check-circle" id="EUR_JPY_span" style="display:none"></div>
                            <div class="rates-container">
                                <div class="sell-rates" id="EUR_JPY_Sell"></div>
                                <div class="buy-rates" id="EUR_JPY_Buy"></div>
                        </div>
                        <div class="pips" id="EUR_JPY_Pips"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('subpage.close-lightbox')
@include('subpage.order-lightbox')
</body>

<script type="text/javascript">

var token = $('meta[name="csrf-token"]').attr('content');
var result,mapping,secondPlot = "";
var result = `{!!$data!!}`;
var chart = anychart.stock();
var plot = chart.plot(0);
var dataTable = anychart.data.table();

anychart.onDocumentReady(function ()
{
    dataTable.addData(result);
    mapping = dataTable.mapAs({open: 1, high: 2, low: 3, close: 4 });

    // map loaded data for the scroller
    var scrollerMapping = dataTable.mapAs();
    scrollerMapping.addField('value', 5);

    // set grid settings
    plot.yGrid(true).xGrid(true).yMinorGrid(true).xMinorGrid(true);
    // set the legend for stock chart
    plot.legend().itemsFormat(
    "{%seriesName}: {%value}{decimalsCount:6}" +
        "{%open} ,{%high},{%low},{%close})"
    );
    //set the label of legend
    plot.legend().itemsFormat(function() {
    var series = this.series;
    switch(series.getType()){
        case "line":
        case "area":
        case "column":
        case "stick":
        case "market":
            return  series.name()+ ": " + validateValue(this.value);
        case "candlestick":
        case "ohlc":
            return series.name()   + ": " +  "(O:" + this.open + " / "+ "H:" + this.high + " / " + "L:" +  this.low + " / "+ "C:" + this.close + ")";
            break;
        case "range-area":
            return series.name()+ ": (" + "H:"+this.high + ";" + "L:" + this.low +")";
    }
    });


    var series = plot.candlestick(mapping);
    var instrument = "{{$instrument}}";
    instrument = instrument.replace("_","/");
    series.name(instrument);
    var title = chart.title();
    title.enabled(true);
    title.text(instrument+ " Chart");
    title.fontSize(24);
    title.fontWeight('bold');
    title.fontFamily("San Serif");
    title.margin(-10,0,-40,0);
    title.align("right");
    series.legendItem().iconType('rising-falling');
    chart.scroller().candlestick(mapping);
    chart.crosshair().displayMode("float");
    chart.container('container');
    chart.draw();

    chart.listen("annotationDrawingFinish", function(){
    document.getElementById("typeSelect").value = "default";
    });


    //   window.setInterval(stream, 500);

//Updating chart
function stream() {
    var series = document.getElementById('seriesSelect').value;
    var interval = document.getElementById('intervalSelect').value;
    var instrument = document.getElementById('instrumentSelect').value;
    $.ajax({
        type:'POST',
        url:'index/data',
        data: {
            _token:token,
            series:series,
            interval:interval,
            instrument:instrument,
        },
        success:function(data) {
        dataTable.addData(data.response);
    }});
    };
});

function checkTools(tool)
{
    @foreach(Common::$indicatorFunc as $key=> $value)
    if (tool == "{{$key}}")
    {
        eval("{{$value}}");
    }
    @endforeach
}

function testing(){
    var token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        type:'GET',
        url:'/index/testing',
        data: {
            _token:token,
        },
        success:function(data) {
            $("#testing_case").html(data);
            document.getElementById('testingbox').style.display = 'block';
        },
        error: function(data){
            console.log(JSON.stringify(data));
            }
    });
}


</script>

@stop