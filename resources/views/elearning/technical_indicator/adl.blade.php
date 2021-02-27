@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2300px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Accumulation Distribution Line</h3>
                <p>The accumulation/distribution indicator also called as ADL or A/D is a cumulative indicator that uses volume and price to assess whether a stock is being accumulated or distributed. The A/D measure seeks to identify divergences between the stock price and volume flow. This provides insight into how strong a trend is. If the price is rising but the indicator is falling it suggests that buying or accumulation volume may not be enough to support the price rise and a price decline could be forthcoming.</p>
                <h5>The Accumulation/Distribution Indicator (A/D) Formula</h5>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768860/E-Learning/ADLFormula.png" class="img-padding" >
                <h5>How to Calculate the A/D Line</h5>
                <ol>
                    <li>Start by calculating the multiplier. Note the most recent period's close, high, and low to calculate</li>
                    <li>Use the multiplier and the current period's volume to calculate the money flow volume.</li>
                    <li>Add the money flow volume to the last A/D value. For the first calculation, use money flow volume as the first value.</li>
                    <li>Repeat the process as each period ends, adding/subtracting the new money flow volume to/from the prior total. This is A/D.</li>
                </ol>
                <h5>What Does the Accumulation/Distribution Indicator (A/D) Tell You?</h5>
                <p>The A/D line helps to show how supply and demand factors are influencing price. A/D can move in the same direction as price changes or it may move in the opposite direction.</h5>
                <p>The multiplier in the calculation provides a gauge for how strong the buying or selling was during a particular period. It does this by determining whether the price closed in the upper or lower portion of its range. This is then multiplied by the volume. Therefore, when a stock closes near the high of the period's range and has high volume, it will result in a large A/D jump. Alternatively, if the price finishes near the high of the range but volume is low, or the volume is high but the price finishes more toward the middle of the range, the A/D will not move up as much.</p>
                <p>The same concepts apply when the price closes in the lower portion of the period's price range. Both volume and where the price closes within the period's range determine how much the A/D will decline by.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768860/E-Learning/ADL.png" class="img-padding" >
                <p>The A/D line is used to help assess price trends and potentially spot forthcoming reversals. If a security's price is in a downtrend while the A/D line is in an uptrend, the indicator shows there may be buying pressure and the security's price may reverse to the upside. Conversely, if a security's price is in an uptrend while the A/D line is in a downtrend, the indicator shows there may be selling pressure, or higher distribution. This warns that the price may be due for a decline.</p>
                <p>In both cases, the steepness of the A/D line provides insight into the trend. A strongly rising A/D line confirms a strongly rising price. Similarly, if the price is falling and the A/D is also falling, then there is still plenty of distribution and prices are likely to continue to decline.</p>
                <h5>Limitations of Using the Accumulation/Distribution Indicator (A/D)</h5>
                <p>The A/D indicator does not factor in price changes from one period to the next, and only focuses on where the price closes within the current period's range. This creates some anomalies.</p>
                <p>Assume a stock gaps down 20% on huge volume. The price oscillates throughout the day and finishes in the upper portion of its daily range, but is still down 18% from the prior close. Such a move would actually cause the A/D to rise. Even though the stock lost a significant amount of value, because it finished in the upper portion of its daily range the indicator will increase, likely dramatically, due to the large volume. Traders need to monitor the price chart and mark any potential anomalies like these as they could affect how the indicator is interpreted.</p>
                <p>Also, one of the main uses of the indicator is to monitor for divergences. Divergences can last a long time and are poor timing signals. When divergence appears between the indicator and price it doesn't mean a reversal is imminent. It may take a long time for the price to reverse, or it may not reverse at all.</p>
                <p>The A/D is just one tool that can be used to assess strength or weakness within a trend, but it is not without its faults. Use the A/D indicator in conjunction with other forms of analysis, such as price action analysis, chart patterns, or fundamental analysis, to get a more complete picture of what is moving the price of a stock.</p>
                <p class="citation blockquote-footer">Adapted from <cite>Mitchell, C. (2021.). Accumulation/Distribution Indicator (A/D). 2021. Retrieved February 7, 2021, from https://www.investopedia.com/terms/a/accumulationdistribution.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop