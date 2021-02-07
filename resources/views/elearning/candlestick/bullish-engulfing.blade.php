@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1480px;">
            <div class="sidenav-content-details">
            <h3 id="learning-title">Bullish Engulfing</h3>
            <p>A bullish engulfing pattern is a white candlestick that closes higher than the previous day's opening after opening lower than the previous day's close. It can be identified when a small black candlestick, showing a bearish trend, is followed the next day by a large white candlestick, showing a bullish trend, the body of which completely overlaps or engulfs the body of the previous day’s candlestick.</p>
            <p>A bullish engulfing pattern may be contrasted with a bearish engulfing pattern.</p>
            <h5>Understanding a Bullish Engulfing Pattern</h5>
            <img src ="{{asset('pictures/BullishEngulfing.png')}}" class="img-padding" >
            <p>The bullish engulfing pattern is a two-candle reversal pattern. The second candle completely ‘engulfs’ the real body of the first one, without regard to the length of the tail shadows.</p>
            <p>This pattern appears in a downtrend and is a combination of one dark candle followed by a larger hollow candle. On the second day of the pattern, the price opens lower than the previous low, yet buying pressure pushes the price up to a higher level than the previous high, culminating in an obvious win for the buyers.</p>
            <h5>What Does a Bullish Engulfing Pattern Tell You</h5>
            <p>A bullish engulfing pattern is not to be interpreted as simply a white candlestick, representing upward price movement, following a black candlestick, representing downward price movement. For a bullish engulfing pattern to form, the stock must open at a lower price on Day 2 than it closed at on Day 1. If the price did not gap down, the body of the white candlestick would not have a chance to engulf the body of the previous day’s black candlestick.</p>
            <p>Because the stock both opens lower than it closed on Day 1 and closes higher than it opened on Day 1, the white candlestick in a bullish engulfing pattern represents a day in which bears controlled the price of the stock in the morning only to have bulls decisively take over by the end of the day.</p>
            <p>The white candlestick of a bullish engulfing pattern typically has a small upper wick, if any. That means the stock closed at or near its highest price, suggesting that the day ended while the price was still surging upward.</p>
            <p>This lack of an upper wick makes it more likely that the next day will produce another white candlestick that will close higher than the bullish engulfing pattern closed, though it’s also possible that the next day will produce a black candlestick after gapping up at the opening. Because bullish engulfing patterns tend to signify trend reversals, analysts pay particular attention to them.</p>
            <p>*Adapted from <b>Chen, J. (2021a). Bullish Engulfing Pattern. https://www.investopedia.com/terms/b/bullishengulfingpattern.asp</b></p>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop