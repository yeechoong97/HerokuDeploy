@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1500px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Round Bottoms</h3>
                <p>A rounding bottom, also referred to as a saucer bottom, is a long-term reversal pattern that signals a shift from a downtrend to an uptrend. This pattern is traditionally thought to last anywhere from several months to several years. Due to the long-term look of these patterns and their components, the signal and construct of these patterns are more difficult to identify than other reversal patterns.</p>
                <p>A rounding-bottom pattern looks similar to a cup and handle, but without the handle. The basic formation of a rounding bottom comes from a downward price movement to a low, followed by a rise from the low back to the start of the downward price movement - forming what looks like a rounded bottom.</p>
                <p>The pattern should be preceded by a downtrend but will sometimes be preceded by a sideways price movement that formed after a downward trend. The start of the rounding bottom (its left side) is usually caused by a peak in the downward trend followed by a long price descent to a new long-term low.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612766851/E-Learning/RoundBottoms.png" class="img-padding" >
                <p>The time distance from the initial peak to the long-term low is considered to be half the distance of the rounding bottom. This helps to give chartists an idea to as to how long the chart pattern will last or when the pattern is expected to be complete, with a breakout to the upside. For example, if the first half of the pattern is one year, then the signal will not be formed until around a year later.</p>
                <p>In terms of the chart pattern's quality, the two stages of the rounding bottom should be similar in length. If the price were to rise too quickly from the low to the prior peak, the strength of the chart pattern would be diminished. This does not mean that they must be equal, but the trend should illustrate a cup shape on the chart.</p>
                <p>The way in which the price moves from peak to low and from low to second peak may cause some confusion as the long-term nature of the pattern can display several different price movements. The price movement does not necessarily move in a straight line but will often have many ups and downs. However, the general direction of the price movement (either up or down) is important, depending on the stage of the pattern.</p>
                <p>Volume is one of the most important confirming measures for this pattern where volume should be high at the initial peak (or start of the pattern) and weaken as the price movement heads toward the low. As the price moves away from the low to the price level set by the initial peak, volume should be rising.</p>
                <p>Breakouts in chart patterns should be accompanied by a large increase in volume, which helps to strengthen the signal formed by the breakout. Once the price moves above the peak that was established at the start of the chart pattern, the downward trend is considered to have reversed and a buy signal is formed.</p>
                <p class="citation">*Adapted from <cite>Bottom, D., Langager, B. C., & Murphy, C. (2007). Analyzing Chart Patterns. 1–31.</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop