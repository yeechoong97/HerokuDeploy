@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2100px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Trend</h3>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1613376303/E-Learning/Trend.jpg" class="img-padding" >
                <div class="img-citation">Image retrieved from <cite>Bridgr. (2017). Taming the Supply Chain “ Bullwhip Effect ” with IoT. https://medium.com/@Bridgr/taming-the-supply-chain-bullwhip-effect-with-iot-fb5757552f78</cite></div>
                <p>A trend is the overall direction of a market or an asset's price. In technical analysis, trends are identified by trendlines or price action that highlight when the price is making higher swing highs and higher swing lows for an uptrend, or lower swing lows and lower swing highs for a downtrend.</p>
                <p>Many traders opt to trade in the same direction as a trend, while contrarians seek to identify reversals or trade against the trend. Uptrends and downtrends occur in all markets, such as stocks, bonds, and futures. Trends also occur in data, such as when monthly economic data rises or falls from month to month.</p>
                <h5>How Trends Work</h5>
                <p>Traders can identify a trend using various forms of technical analysis, including trendlines, price action, and technical indicators. For example, trendlines might show the direction of a trend while the relative strength index (RSI) is designed to show the strength of a trend at any given point in time.</p>
                <p>An uptrend is marked by an overall increase in price. Nothing moves straight up for long, so there will always be oscillations, but the overall direction needs to be higher in order for it to be considered an uptrend. Recent swing lows should be above prior swing lows, and the same goes for swing highs. Once this structure starts to breakdown, the uptrend could be losing steam or reversing into a downtrend. Downtrends are composed of lower swing lows and lower swing highs.</p>
                <p>While the trend is up, traders may assume it will continue until there is evidence that points to the contrary. Such evidence could include lower swing lows or highs, the price breaking below a trendline, or technical indicators turning bearish. While the trend is up traders focus on buying, attempting to profit from a continued price rise.</p>
                <p>When the trend turns down, traders focus more on selling or shorting, attempting to minimize losses or profit from the price decline. Most (not all) downtrends do reverse at some point, so as the price continues to decline more traders begin to see the price as a bargain and step in to buy. This could lead to the emergence of an uptrend again.</p>
                <p>Trends may also be used by investors focused on fundamental analysis. This form of analysis looks at changes in revenue, earnings, or other business or economic metrics. For example, fundamental analysts may look for trends in earnings per share and revenue growth. If earnings have grown for the past four quarters, this represents a positive trend. However, if earnings have declined for the past four quarters, it represents a negative trend.</p>
                <p>The lack of a trend—that is, a period of time where there is little overall upward or downward progress—is called a range or trendless period.</p>
                <h5>Using Trendlines</h5>
                <p>A common way to identify trends is using trendlines, which connect a series of highs (downtrend) or lows (uptrend). Uptrends connect a series of higher lows, creating a support level for future price movements. Downtrends connect a series of lower highs, creating a resistance level for future price movements. In addition to support and resistance, these trendlines show the overall direction of the trend.</p>
                <p>While trendlines do a good job of showing overall direction, they will often need to be redrawn. For example, during an uptrend, the price may fall below the trendline, yet this doesn't necessarily mean the trend is over. The price may move below the trendline and then continue rising. In such an event, the trendline may need to be redrawn to reflect the new price action.</p>
                <p>Trendlines should not be relied on exclusively to determine the trend. Most professionals also tend to look at price action and other technical indicators to help determine if a trend is ending or not. In the example above, a drop below the trendline isn't necessarily a sell signal, but if the price also drops below a prior swing low and/or technical indicators are turning bearish, then it might be.</p>
                <p class="citation blockquote-footer">Adapted from <cite>Mitchell, C. (2021b). Trend. https://www.investopedia.com/terms/t/trend.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop