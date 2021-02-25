@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2900px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Triangle</h3>
                <p>As you may have noticed, chart pattern names don't leave much to the imagination. This is no different for the triangle patterns, which clearly form the shape of a triangle. The basic construct of this chart pattern is the convergence of two trendlines - flat, ascending or descending - with the price of the security moving between the two trendlines.</p>
                <p>There are three types of triangles, which vary in construct and significance: the symmetrical triangle, the descending triangle and the ascending triangle.</p>
                <h5>Symmetrical triangle</h5>
                <p>The symmetrical triangle is mainly considered to be a continuation pattern that signals a period of consolidation in a trend followed by a resumption of the prior trend. It is formed by the convergence of a descending resistance line and an ascending support line. The two trendlines in the formation of this triangle should have a similar slope converging at a point known as the apex. The price of the security will bounce between these trendlines, towards the apex, and typically breakout in the direction of the prior trend.</p>
                <p>If preceded by a downward trend, the focus should be on a break below the ascending support line. If preceded by an upward trend, look for a break above the descending resistance line. However, this pattern doesn't always lead to a continuation of the previous trend. A break in the opposite direction of the prior trend should signal the formation of a new trend.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612766475/E-Learning/SymmetricalTriangle.png" class="img-padding" >
                <p>The first part of this pattern is the creation of a high in the upward trend, which is followed by a sell-off to a low. The price then moves to another high that is lower than the first high and again sells off to a low, which is higher than the previous low. At this point the trendlines can be drawn, which creates the apex. The price will continue to move between these lines until breakout.</p>
                <p>The pattern is complete when the price breaks out of the triangle - look for an increase in volume in the direction of the breakout. This pattern is also susceptible to a return to the previous support or resistance line that it just broke through, so make sure to watch for this level to hold if it does indeed break out.</p>
                <h5>Ascending Triangle</h5>
                <p>The ascending triangle is a bullish pattern, which gives an indication that the price of the security is headed higher upon completion. The pattern is formed by two trendlines: a flat trendline being a point of resistance and an ascending trendline acting as a price support.</p>
                <p>The price of the security moves between these trendlines until it eventually breaks out to the upside. This pattern will typically be preceded by an upward trend, which makes it a continuation pattern; however, it can be found during a downtrend.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612766474/E-Learning/AscendingTriangle.png" class="img-padding" >
                <p>As seen above, the price moves to a high that faces resistance leading to a sell-off to a low. This follows another move higher, which tests the previous level of resistance. Upon failing to move past this level of resistance, the security again sells off - but to a higher low. This continues until the price moves above the level of resistance or the pattern fails.</p>
                <p>The most telling part of this pattern is the ascending support line, which gives an indication that sellers are starting to leave the security. After the sellers are knocked out of the market, the buyers can take the price past the resistance level and resume the upward trend.</p>
                <p>The pattern is complete upon breakout above the resistance level, but it can fall below the support line (thus breaking the pattern), so be careful when entering prior to breakout.</p>
                <h5>Descending triangle</h5>
                <p>The descending triangle is the opposite of the ascending triangle in that it gives a bearish signal to chartists, suggesting that the price will trend downward upon completion of the pattern. The descending triangle is constructed with a flat support line and a downward-sloping resistance line.</p>
                <p>Similar to the ascending triangle, this pattern is generally considered to be a continuation pattern, as it is preceded by a downward trendline. But again, it can be found in an uptrend.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612766474/E-Learning/DescendingTriangle.png" class="img-padding" >
                <p>The first part of this pattern is the fall to a low that then finds a level of support, which sends the price to a high. The next move is a second test of the previous support level, which again sends the stock higher - but this time to a lower level than the previous move higher. This is repeated until the price is unable to hold the support level and falls below, resuming the downtrend.</p>
                <p>This pattern indicates that buyers are trying to take the security higher, but continue to face resistance. After several attempts to push the stock higher, the buyers fade and the sellers overpower them, which sends the price lower.</p>
                <p class="citation">*Adapted from <cite>Bottom, D., Langager, B. C., & Murphy, C. (2007). Analyzing Chart Patterns. 1–31.</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop