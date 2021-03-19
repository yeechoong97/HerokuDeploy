@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2000px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">The Wedge</h3>
                <p>The wedge chart pattern signals a reverse of the trend that is currently formed within the wedge itself. Wedges are similar in construction to a symmetrical triangle in that there are two trendlines - support and resistance - which band the price of a security.</p>
                <p>The wedge pattern differs in that it is generally a longer-term pattern, usually lasting three to six months. It also has converging trendlines that slant in an either upward or downward direction, which differs from the more uniform trendlines of triangles.</p>
                <p>There are two main types of wedges – falling and rising – which differ on the overall slant of the pattern. A falling wedge slopes downward, while a rising wedge slants upward.</p>
                <h5>Falling Wedge</h5>
                <p>The falling wedge is a generally bullish pattern signaling that one will likely see the price break upwards through the wedge and move into an uptrend. The trendlines of this pattern converge, with both being slanted in a downward direction as the price is trading in a downtrend.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612766723/E-Learning/FallingWedge.png" class="img-padding" alt="falling-wedge">
                <p>From the above, one can see that a wedge is similar to the triangles, in that the price movement bounces between the two trendlines, which are bounding the price movement.</p>
                <p>Another thing to look at in the falling wedge is that the upper (or resistance) trendline should have a sharper slope than the support level in the wedge construction. When the lower (or support) trendline is clearly flatter as the pattern forms, it signals that selling pressure is waning, as sellers have trouble pushing the price down further each time the security is under pressure.</p>
                <p>The price movement in the wedge should at minimum test both the support trendline and the resistance trendline twice during the life of the wedge. The more times it tests each level, especially on the resistance end, the higher quality the wedge pattern is thought to be.</p>
                <p>The buy signal is formed when the price breaks through the upper resistance line. This breakout move should be on heavier volume, but due to the longer-term nature of this pattern, it's important that the price has successive closes above the resistance line.</p>
                <h5>Rising Wedge</h5>
                <p>Conversely, a rising wedge is a bearish pattern that signals that the security is likely to head in a downward direction. The trendlines of this pattern converge, with both trendlines slanted in an upward direction.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612766723/E-Learning/RisingWedge.png" class="img-padding" alt="rising-wedge">
                <p>Again, the price movement is bounded by the two converging trendlines. As the price moves towards the apex of the pattern, momentum is weakening. A move below the lower support would be viewed by traders as a reversal in the upward trend.</p>
                <p>As the strength of the buyers weakens (exhibited by their inability to take the price higher), the sellers start to gain momentum. The pattern is complete, with the sellers taking control of the security, when the price falls below the supporting trendline.</p>
                <p class="citation blockquote-footer">Adapted from <cite>Bottom, D., Langager, B. C., & Murphy, C. (2007). Analyzing Chart Patterns. 1–31.</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop