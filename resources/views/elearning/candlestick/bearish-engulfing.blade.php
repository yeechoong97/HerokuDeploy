@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1280px;">
            <div class="sidenav-content-details">
            <h3 id="learning-title">Bearish Engulfing</h3>
            <p>A bearish engulfing pattern is a technical chart pattern that signals lower prices to come. The pattern consists of an up (white or green) candlestick followed by a large down (black or red) candlestick that eclipses or "engulfs" the smaller up candle. The pattern can be important because it shows sellers have overtaken the buyers and are pushing the price more aggressively down (down candle) than the buyers were able to push it up (up candle).</p>
            <img src ="{{asset('pictures/BearishEngulfing.png')}}" class="img-padding" >
            <h5>What Does a Bearish Engulfing Pattern Tell You?</h5>
            <p>A bearish engulfing pattern is seen at the end of some upward price moves. It is marked by the first candle of upward momentum being overtaken, or engulfed, by a larger second candle indicating a shift toward lower prices. The pattern has greater reliability when the open price of the engulfing candle is well above the close of the first candle, and when the close of the engulfing candle is well below the open of the first candle. A much larger down candle shows more strength than if the down candle is only slightly larger than the up candle.</p>
            <p>The pattern is also more reliable when it follows a clean move higher. If the price action is choppy or ranging, many engulfing patterns will occur but they are unlikely to result in major price moves since the overall price trend is choppy or ranging.</p>
            <p>Before acting on the pattern, traders typically wait for the second candle to close, and then take action on the following candle. Actions include selling a long position once a bearish engulfing pattern occurs, or potentially entering a short position.</p>
            <p>If entering a new short position, a stop loss can be placed above the high of the two-bar pattern.</p>
            <p>Astute traders consider the overall picture when utilizing bearish engulfing patterns. For example, taking a short trade may not be wise if the uptrend is very strong. Even the formation of a bearish engulfing pattern may not be enough to halt the advance for long. Yet, if the overall trend is down, and the price has just seen a pullback to the upside, a bearish engulfing pattern may provide a good shorting opportunity since the trade aligns with the longer-term downtrend.</p>
            <p>*Adapted from <b>Mitchell, C. (2020a). Bearish Engulfing Pattern Definition and Tactics. https://www.investopedia.com/terms/b/bearishengulfingp.asp</b></p>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop