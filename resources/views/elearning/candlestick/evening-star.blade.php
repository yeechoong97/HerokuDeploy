@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1300px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Evening Star</h3>
                <p>An Evening Star is a stock-price chart pattern used by technical analysts to detect when a trend is about to reverse. It is a bearish candlestick pattern consisting of three candles: a large white candlestick, a small-bodied candle, and a red candle.</p>
                <p>Evening Star patterns are associated with the top of a price uptrend, signifying that the uptrend is nearing its end. The opposite of the Evening Star is the Morning Star pattern, which is viewed as a bullish indicator.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612765848/E-Learning/EveningStar.png" class="img-padding" >
                <h5>What Does a Evening Star Tell You?</h5>
                <p>A candlestick pattern is a way of condensely presenting certain information about a stock. Specifically, it represents the open, high, low, and close price for the stock over a given time period.</p>
                <p>Each candlestick consists of a candle and two wicks. The length of the candle is a function of the range between the highest and lowest price during that trading day. A long candle indicates a large change in price, while a short candle indicates a small change in price. In other words, long candlestick bodies are indicative of intense buying or selling pressure, depending on the direction of the trend. At the same time, short candlesticks are indicative of little price movement.</p>
                <p>The Evening Star pattern is considered a very strong indicator of future price declines. Its pattern forms over a period of three days, in which the first day consists of a large white candle signifying a continued rise in prices; the second day consists of a smaller candle that shows a more modest increase in price, while the third day shows a large red candle that opens at a price below the previous day and then closes near the middle of the first day.</p>
                <p>The Evening Star pattern is considered a reliable indicator that a downward trend has begun. However, it can be difficult to discern amidst the noise of stock-price data. To help identify it reliably, traders often use price oscillators and trendlines to confirm whether an Evening Star pattern has in fact occurred.</p>
                <p class="citation">*Adapted from <cite>Fernando, J. (2021). Evening Star. https://www.investopedia.com/terms/e/eveningstar.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop