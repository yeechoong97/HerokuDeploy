@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2600px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Double Top & Double Bottom</h3>
                <p>The double top and double bottom are another pair of well-known chart patterns whose names don’t leave much to the imagination. These two reversal patterns illustrate a security's attempt to continue an existing trend. Upon several attempts to move higher, the trend is reversed and a new trend begins. These chart patterns formed will often resemble what looks like a “W” (for a double bottom) or an “M” (double top).</p>
                <h5>Double Top</h5>
                <p>The double-top pattern is found at the peaks of an upward trend and is a clear signal that the preceding upward trend is weakening and that buyers are losing interest. Upon completion of this pattern, the trend is considered to be reversed and the security is expected to move lower.</p>
                <p>The first stage of this pattern is the creation of a new high during the upward trend, which, after peaking, faces resistance and sells off to a level of support. The next stage of this pattern will see the price start to move back towards the level of resistance found in the previous run-up, which again sells off back to the support level. The pattern is completed when the security falls below (or breaks down) the support level that had backstopped each move the security made, thus marking the beginnings of a downward trend.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612766399/E-Learning/DoubleTop.png" class="img-padding" >
                <p>It's important to note that the price does not need to touch the level of resistance but should be close to the prior peak. Also, when using this chart pattern one should wait for the price to break below the key level of support before entering. Trading before the signal is formed can yield disastrous results, as the pattern is only setting up the possibility for the trend reversal and could trade within this banded range for some time without falling through.</p>
                <p>This pattern is a clear illustration of a battle between buyers and sellers. The buyers are attempting to push the security but are facing resistance, which prevents the continuation of the upward trend. After this goes on a couple of times, the buyers in the market start to give up or dry up, and the sellers start to take a stranglehold of the security, sending it down into a new downtrend.</p>
                <p>Again, volume should be an important focus as one should look for an increase in volume when the security falls below the support level. Also, as in other chart patterns, do not be alarmed if there is a return to the previous support level that has now become a resistance level in the newly established trend.</p>
                <h5>Double Bottom</h5>
                <p>This is the opposite chart pattern of the double top as it signals a reversal of the downtrend into an uptrend. This pattern will closely resemble the shape of a "W".</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612766399/E-Learning/DoubleBottom.png" class="img-padding" >
                <p>The double bottom is formed when a downtrend sets a new low in the price movement. This downward move will find support, which prevents the security from moving lower. Upon finding support, the security will rally to a new high, which forms the security's resistance point. The next stage of this pattern is another sell-off that takes the security down to the previous low. These two support tests form the two bottoms in the chart pattern. But again, the security finds support and heads back up. The pattern is confirmed when the price moves above the resistance the security faced on the prior move up.</p>
                <p>Remember that the security needs to break through the support line to signal a reversal in the downward trend and should be done on higher volume. As in the double top, do not be surprised if the price returns to the breakout point to test the new support level in the upward trend.</p>
                <h5>Price Objective and Adjustments</h5>
                <p>It's important to get an idea as to the size of the resulting move once the signal has been formed. In both the double top and double bottom, the initial price objective can be measured by taking the price distance between the support and resistance levels or the range that chart pattern trades.</p>
                <p>For example, assume in a double top that the upward trend peaks at $50 and retraces to $40 to form the support level. Assuming everything follows through on the chart pattern and the support level is broken at $40, the initial price objective should be set at $30 ($40-$10).</p>
                <p>Another problem that can occur is the second testing point, where the top or bottom actually breaks the level that the first top or bottom test created. If this occurs, it can give a signal that the previous trend will continue - instead of reverse - as the pattern suggests. However, don’t be too quick to abandon the pattern as it could still materialize.</p>
                <p>If the price does, in fact, move above the prior test, look to see if the move was accompanied by large volume, suggesting a trend continuation. For example, if on the second test of a double bottom the price falls below the support line on heavy volume, it is a good sign the downward trend will continue and not reverse. If the volume is very weak, it could just be a last attempt to continue the downward trend, but the trend will ultimately reverse.</p>
                <p>The double tops and double bottoms are strong reversal patterns that can provide trading opportunities. But it is important to be careful with these patterns as the price can often move either way. Consequently, it's important that the trade is implemented once the support/resistance line is broken.</p>
                <p class="citation">*Adapted from <cite>Bottom, D., Langager, B. C., & Murphy, C. (2007). Analyzing Chart Patterns. 1–31.</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop