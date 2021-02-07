@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 3680px;">
            <div class="sidenav-content-details">
            <h3 id="learning-title">Chart Types</h3>
            <h5>Line Chart</h5>
            <p>The line chart is the original type of chart. In order to plot it, a line connects single prices for a selected time period. The most popular line chart is the daily chart. Although any point in the day can be plotted, most traders focus on the closing price, which they perceive as the most important. But an immediate problem with the daily line chart is the fact that it is impossible to see the price activity for the balance of the day.</p>
            <img src ="{{asset('pictures/LineChart.png')}}" class="img-padding" >
            <p>Line charts are considered for technical analysis because due to the sophistication of current charting services, daily price activity does not need to be lost.</p>
            <p>Daily line charts are useful when looking for the big picture or the major trend because, without line charts, intraday activity would be-come an unimportant detail. When plotted over a long stretch of time, such as several years, a line chart is easier to visualize. Also, technical analysis goes well beyond chart formation; in order to execute certain models and techniques, line charts are better suited than any of the other charts. However the line chart is a continuous chart, and this is a disadvantage because price gaps cannot be charted on a continuous chart.</p>
            <h5>Bar Chart</h5>
            <p>The bar chart is arguably the most popular type of chart currently in use. It consists of four significant points</p>
            <img src ="{{asset('pictures/BarStick.png')}}" class="img-padding" >
            <ul>
                <li><b>The High and The Low Prices</b>, which are united by a vertical bar</li>
                <li><b>The Opening price</b>, which is marked with a little horizontal line to the left of the bar</li>
                <li><b>The Closing Price</b>, which is marked with a little horizontal line to the right of the bar</li>
            </ul>
            <img src ="{{asset('pictures/BarChart.png')}}" class="img-padding" >
            <p>Bar charts have the obvious advantage of displaying the currency range for the period selected. The most popular period is daily, followed by weekly. Other periods may be selected as well. An advantage of this chart is that, unlike line charts, the bar chart is able to plot price gaps that are formed in the currency futures market. </p>
            <h5>Candlestick Chart</h5>
            <p>The candlestick chart is closely related to the bar chart. It also consists of four major prices: high, low, open, and close. In addition to the common readings, the candlestick chart has a set of particular interpretations. It is also easier to view.</p>
            <img src ="{{asset('pictures/CandlestickChart.png')}}" class="img-padding" >
            <p>The opening and closing prices form the body (jittai) of the candlestick. To indicate that the opening was lower than the closing, the body of the bar is left blank. In its original form, the body was colored red. Current standard electronic displays allow you to keep it blank or select a color of your choice. If the currency closes below its opening, the body is filled. In its original form, the body was colored black, but the electronic displays allow you to keep it filled or to select a color of your choice.</p>
            <img src ="{{asset('pictures/CandlestickCandle.png')}}" class="img-padding" >
            <p>The intraday (or weekly) direction on a candlestick chart can be traced by means of two "shadows": the upper shadow (uwakage) and the lower shadow (shitakage).</p>
            <p>Just as with a bar chart, the candlestick chart is unable to trace every price movement during a day's activity.</p>
            <h5>Area Chart</h5>
            <img src ="{{asset('pictures/AreaChart.png')}}" class="img-padding" >
            <p>Area forex charts type is an offshoot from common line chart, but its displays the price movements by means of areas. Its main advantage is Area charts are very clean and simple to use. Filling the space below the price really highlights the price trend. An area chart clearly displays local price movements, spikes and dips in any trading periods. This charting technique is usually used to display the profitability of investment projects.</p>
            <p>*Adapted from <b>Forex On-Line Manual For Successful Trading. (2019).</b></p>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop