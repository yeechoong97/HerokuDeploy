@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2200px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Flags & Pennants</h3>
                <p>The flag and pennant patterns are two continuation patterns that closely resemble each other, differing only in their shape during the pattern's consolidation period. This is the reason the terms flag and pennant are often used interchangeably. A flag is a rectangular shape, while the pennant looks more like a triangle.</p>
                <p>These two patterns are formed when there is a sharp price movement followed by generally sideways price movement, which is the flag or pennant. The pattern is complete when there is a price breakout in the same direction of the initial sharp price movement. The following move will see a similarly sharp move in the same direction as the prior sharp move. The complete move of the chart pattern - from the first sharp move to the last sharp move - is referred to as the flag pole.</p>
                <p>The flag or pennant is considered to be flying at half-mast, as the distance of the initial price movement is thought to be roughly equal to the proceeding price move. The reason these patterns form is that after a large price movement, the market consolidates, or pauses, before resuming the initial trend.</p>
                <h5>The Flag</h5>
                <p>The flag pattern forms what looks like a rectangle. The rectangle is formed by two parallel trendlines that act as support and resistance for the price until the price breaks out. In general, the flag will not be perfectly flat but will have its trendlines sloping.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612766605/E-Learning/Flag.png" class="img-padding" >
                <p>In general, the slope of the flag should move in the opposite direction of the initial sharp price movement; so if the initial movement were up, the flag should be downward sloping.</p>
                <p>The buy or sell signal is formed once the price breaks through the support or resistance level, with the trend continuing in the prior direction. This breakthrough should be on heavier volume to improve the signal of the chart pattern.</p>
                <h5>The Pennant</h5>
                <p>The pennant forms what looks like a symmetrical triangle, where the support and resistance trendlines converge towards each other. The pennant pattern does not need to follow the same rules found in triangles, where they should test each support or resistance line several times. Also, the direction of the pennant is not as important as it is in the flag; however, the pennant is generally flat.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612766605/E-Learning/Pennant.png" class="img-padding" >
                <h5>General Ideas</h5>
                <p>While the construct of the pause in the trend is different for the flag and pennant, the attributes of the chart patterns themselves are similar. It is vital that the price movement prior to the flag or pennant be a strong, sharp move.</p>
                <p>Typically, these patterns take less time to form during downtrends than in uptrends. In terms of pattern length, they are generally short-term patterns lasting one to three weeks, but can be formed over longer periods.</p>
                <p>The volume, as with most breakout signals, should be seen as strong during the breakout to confirm the signal. Upon breakout, the initial price objective is equal to the distance of the prior move added to the breakout point. For example, if a prior sharp up movement was from $30 to $40, then the resulting price objective from a price breakout of $38 would be $48 ($38+$10).</p>
                <p class="citation">*Adapted from <cite>Bottom, D., Langager, B. C., & Murphy, C. (2007). Analyzing Chart Patterns. 1–31.</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop