@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1200px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Three White Soldiers</h3>
                <p>Three white soldiers is a bullish candlestick pattern that is used to predict the reversal of the current downtrend in a pricing chart. The pattern consists of three consecutive long-bodied candlesticks that open within the previous candle's real body and a close that exceeds the previous candle's high. These candlesticks should not have very long shadows and ideally open within the real body of the preceding candle in the pattern.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612766064/E-Learning/ThreeWhiteSoldiers.png" class="img-padding" >
                <h5>What Does a Three White Soldiers Tell You?</h5>
                <p>The three white soldiers candlestick pattern suggests a strong change in market sentiment in terms of the stock, commodity or pair making up the price action on the chart. When a candle is closing with small or no shadows, it suggests that the bulls have managed to keep the price at the top of the range for the session. Basically, the bulls take over the rally all session and close near the high of the day for three consecutive sessions. In addition, the pattern may be preceded by other candlestick patterns suggestive of a reversal, such as a doji.</p>
                <p>As three white soldiers is a bullish visual pattern, it is used as an entry or exit point. Traders who are short on the security look to exit and traders who are waiting to take up a bullish position see the three white soldiers as an entry opportunity.</p>
                <p>When trading the three white soldiers pattern, it's important to note that the strong moves higher could create temporary overbought conditions. The relative strength index (RSI), for example, may have moved above 70.0 levels. In some cases, there is a short period of consolidation following the three soldiers pattern, but the short- and intermediate-term bias remains bullish. The significant move higher could also reach key resistance levels where the stock could experience consolidation before continuing to move higher.</p>
                <p class="citation">*Adapted from <cite>Chen, J. (2020c). Three White Soldiers Definition. https://www.investopedia.com/terms/t/three_white_soldiers.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop