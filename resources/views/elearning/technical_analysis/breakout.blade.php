@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1800px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Breakout</h3>
                <p>A breakout refers to when the price of an asset moves above a resistance area, or moves below a support area. Breakouts indicate the potential for the price to start trending in the breakout direction. For example, a breakout to the upside from a chart pattern could indicate the price will start trending higher. Breakouts that occur on high volume (relative to normal volume) show greater conviction which means the price is more likely to trend in that direction.</p>
                <h5>What Does a Breakout Tell You?</h5>
                <p>A breakout occurs because the price has been contained below a resistance level or above a support level, potentially for some time. The resistance or support level becomes a line in the sand which many traders use to set entry points or stop loss levels. When the price breaks through the support or resistance level traders waiting for the breakout jump in, and those who didn't want the price to breakout exit their positions to avoid larger losses.</p>
                <p>This flurry of activity will often cause volume to rise, which shows lots of traders were interested in the breakout level. The higher than average volume helps confirm the breakout. If there is little volume on the breakout, the level may not have been significant to a lot of traders, or not enough traders felt convicted to place a trade near the level yet. These low volume breakouts are more likely to fail. In the case of an upside breakout, if it fails the price will fall back below resistance. In the case of a downside breakout, often called a breakdown, if it fails the price will rally back above the support level it broke below.</p>
                <p>Breakouts are commonly associated with ranges or other chart patterns, including triangles, flags, wedges, and head-and-shoulders. These patterns are formed when the price moves in a specific way which results in well-defined support and/or resistance levels. Traders then watch these levels for breakouts. They may initiate long positions or exit short positions if the price breaks above resistance, or they may initiate short positions or exit long position if the price breaks below support.</p>
                <p>Even after a high volume breakout, the price will often (but not always) retrace to the breakout point before moving in the breakout direction again. This is because short-term traders will often buy the initial breakout, but then attempt to sell quite quickly for a profit. This selling temporarily drives the price back to the breakout point. If the breakout is legitimate (not a failure), then the price should move back in the breakout direction. If it doesn't, it's a failed breakout.</p>
                <p>Traders who use breakouts to initiate trades typically utilize stop loss orders in case the breakout fails. In the case of going long on an upside breakout, a stop loss is typically placed just below the resistance level. In the case of going short on a downside breakout, a stop loss is typically placed just above the support level that has been breached.</p>
                <h5>Example of a Breakout</h5>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767401/E-Learning/Breakout.png" class="img-padding" alt="breakout">
                <div class="img-citation">Image retrieved from <cite>Mitchell, C. (2020b). Breakout Definition and Example. https://www.investopedia.com/terms/b/breakout.asp/</cite></div>
                <p>The chart shows a large increase in volume, associated with an earnings release, as the price breaks through the resistance area of a triangle chart pattern. The breakout was so strong that it caused a price gap. The price continued to move higher and didn't retrace to the original breakout point. That is a sign of a very strong breakout.</p>
                <p>Traders could have used the breakout to potentially enter long positions and/or get out of short positions. If entering long, a stop loss would be placed just below the resistance level of the triangle (or even below triangle support). Because the price had a large gaping breakout, this stop loss location may not be ideal. After the price continued to move higher following the breakout the stop loss could be trailed up in order to reduce risk or lock in a profit.</p>
                <p class="citation blockquote-footer">Adapted from <cite>Mitchell, C. (2020b). Breakout Definition and Example. https://www.investopedia.com/terms/b/breakout.asp/</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop