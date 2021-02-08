@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2700px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Triple Top & Triple Bottom</h3>
                <p>The triple top and triple bottom are reversal patterns that are formulated when a security attempts to move past a key level of support or resistance in the direction of the prevailing trend.</p>
                <p>This chart pattern represents the market's attempt to move a security in a certain direction. After three failed attempts, the buyers (in the case of a top) or sellers (in the case of a bottom) give up, and the opposing group in the market takes a hold of the security, sending it downward (sellers) or upward (buyers).</p>
                <h5>Triple Top</h5>
                <p>This bearish reversal pattern is formed when a security that is trending upward tests a similar level of resistance three times without breaking through. Each time the security tests the resistance level, it falls to a similar area of support. After the third fall to the support level, the pattern is complete when the security falls through the support; the price is then expected to move in a downward trend.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612766790/E-Learning/TripleTop.png" class="img-padding" >
                <p>The first step in this pattern is the creation of a new high in an uptrend that is stalled by selling pressure, which forms a level of resistance. The selling pressure causes the price to fall until it finds a level of support, as buyers move back into the security. The buying pressure sends the price back up to the area of resistance the security previously met. Again, the sellers enter the market and send the security back down to the support level.</p>
                <p>This up-and-down movement is repeated for the third time; but this time the buyers, after failing three times, give up on the security, and the sellers take over. Upon falling through the level of support, the security is expected to trend downward.</p>
                <p>This pattern can be difficult to spot in the early stages as it will initially look like a double-top pattern, which was discussed in a previous section. The most important thing here is that one waits for the price to move past the level of resistance before entering the security, as the security could actually just end up being range-bound, where it trades between the two levels for some time.</p>
                <p>In the triple-top formation, each test of resistance at the upper end should be marked with declining volume at each successive peak. And again, when the price breaks below the support level, it should be accompanied by high volume. Once the signal is formed, the price objective is based on the size of the chart pattern or the price distance between the level of resistance and support. This is then deducted from the breakout point.</p>
                <h5>Triple Bottom</h5>
                <p>This bullish reversal pattern has all of the same attributes as the triple top but signals a reversal of a downward trend. The triple-bottom pattern illustrates a security that is trading in a downtrend and attempts to fall through a level of support three times, each time moving back to a level of resistance. After the third attempt to push the price lower, the pattern is complete when the price moves above the resistance level and begins trading in an upward trend.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612766790/E-Learning/TripleBottom.png" class="img-padding" >
                <p>This pattern begins by setting a new low in a downtrend, which is followed by a rally to a high. This sets up the range of trading for the triple-bottom pattern. After hitting the high, the price again comes under selling pressure, which sends it back down to the previous low. Buyers again move back into the security at this support level, sending the price back up again, usually to the previous high.</p>
                <p>This is repeated a third time, but after failing again to move to a new low, the pattern is complete when the security moves above the resistance level to begin trading in an uptrend.</p>
                <p>In this pattern, volume plays a role similar to the triple top, declining at each trough as it tests the support level, which is a sign of diminishing selling pressure. Again, volume should be high on a breakout above the resistance level on the completion of the pattern.</p>
                <p>The price objective will also initially be calculated as the distance of the chart pattern added to the price breakout. So if the chart pattern is formed between $50 and $30 at a price breakout of $50 the price objective is $70 ($50+$20).</p>
                <h5>Meaning Behind Triple Tops and Bottoms</h5>
                <p>The significance of these two formations is that an established trend has hit a major section of support/resistance, which stops the trend's ability to continue. This is an indication that the buying or selling pressure that is supporting the trend is beginning to weaken. It also is an indication that the opposite pressure is gaining strength.</p>
                <p>The chart pattern is signaling that there is a shift in the supply and demand of the security and of the balance between buyers and sellers. When a reversal signal is formed in a triple top, there is a shift from buyers moving the security upward to sellers moving the security downward.</p>
                <p class="citation">*Adapted from <cite>Bottom, D., Langager, B. C., & Murphy, C. (2007). Analyzing Chart Patterns. 1–31.</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop