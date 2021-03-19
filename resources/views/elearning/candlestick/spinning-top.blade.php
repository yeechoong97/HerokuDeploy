@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1400px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Spinning Top</h3>
                <p>A spinning top is a candlestick pattern that has a short real body that's vertically centered between long upper and lower shadows. The candlestick pattern represents indecision about the future direction of the asset. It means that neither buyers nor sellers could gain the upper hand.</p>
                <p>A candlestick pattern forms when the buyers push the price up during a given time period, and the sellers push the price down during the same time period, but ultimately the closing price ended up very close to the open. After a strong price advance or decline, spinning tops can signal a potential price reversal if the candle that follows confirms. A spinning top can have a close above or below the open, but the two prices are always close together.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612765668/E-Learning/SpinningTop.png" class="img-padding" alt="spinning-top">
                <h5>What Does a Spinning Top Tell You?</h5>
                <p>Spinning tops are a sign of indecision in the asset; the long upper and lower shadows indicate there wasn't a meaningful change in price between the open and close. The bulls sent the price sharply higher and the bears sent the price sharply lower, but in the end, the price closed near where it opened. This indecision can signal more sideways movement, especially if the spinning top occurs within an established range. It can also signal a possible price reversal if it occurs following a price advance or decline.</p>
                <p>Sometimes spinning tops may signal a significant trend change. A spinning top that occurs at the top of an uptrend could be a sign that bulls are losing their control and the trend may reverse. Similarly, a spinning top at the bottom of a downtrend could signal that bears are losing control and bulls may take the reins.</p>
                <p>In any case, confirmation helps clarify what the spinning top is saying. The confirmation comes from the next candle. If a trader believes a spinning top after an uptrend could result in a reversal to the downside, the candle that follows the spinning top should see prices drop. If it doesn't, the reversal is not confirmed and the trader will need to wait for another trade signal. If the spinning top occurs within a range, this indicates indecision is still prevalent and the range will likely continue. The candle that follows should confirm, meaning it stays within the established sideways channel.</p>
                <p>Spinning tops are a common candlestick pattern, which means they work best in conjunction with other forms of technical analysis. For example, traders may look at technical indicators, like the moving average convergence-divergence (MACD) or relative strength index (RSI), for signs of a reversal before taking a trade based on a spinning top. Indicators or other forms of analysis, such as identifying support and resistance, may aid in making decisions based on candlestick patterns.</p>
                <p class="citation blockquote-footer">Adapted from <cite>Mitchell, C. (2021). Spinning Top Candlestick. https://www.investopedia.com/terms/s/spinning-top.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop