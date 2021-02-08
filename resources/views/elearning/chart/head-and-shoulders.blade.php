@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 3800px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Head And Shoulders</h3>
                <p>The head-and-shoulders pattern is one of the most popular and reliable chart patterns in technical analysis. And as one might imagine from the name, the pattern looks like a head with two shoulders.</p>
                <p>Head and shoulders is a reversal pattern that, when formed, signals the security is likely to move against the previous trend. There are two versions of the head-and-shoulders pattern. The head-and-shoulders top is a signal that a security's price is set to fall, once the pattern is complete, and is usually formed at the peak of an upward trend. The second version, the head-and-shoulders bottom (also known as inverse head and shoulders), signals that a security's price is set to rise and usually forms during a downward trend.</p>
                <p>Both of these head and shoulders have a similar construction in that there are four main parts to the head-and-shoulder chart pattern: two shoulders, a head and a neckline. The patterns are confirmed when the neckline is broken, after the formation of the second shoulder.</p>
                <p>The head and shoulders are sets of peaks and troughs. The neckline is a level of support or resistance. The head and shoulders pattern is based on Dow Theory's peak-and-trough analysis. An upward trend, for example, is seen as a period of successive rising peaks and rising troughs. A downward trend, on the other hand, is a period of falling peaks and troughs. The head-and-shoulders pattern illustrates a weakening in a trend where there is deterioration in the peaks and troughs.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612766275/E-Learning/HeadAndShoulders.png" class="img-padding" >
                <h5>Head and Shoulders Top</h5>
                <p>Again, the head-and-shoulders top signals to chart users that a security's price is likely to make a downward move, especially after it breaks below the neckline of the pattern. Due to this pattern forming mostly at the peaks of upward trends, it is considered to be a trend-reversal pattern, as the security heads down after the pattern's completion.</p>
                <p>This pattern has four main steps for it to complete itself and signal the reversal. The first step is the formation of the left shoulder, which is formed when the security reaches a new high and retraces to a new low. The second step is the formation of the head, which occurs when the security reaches a higher high, then retraces back near the low formed in the left shoulder. The third step is the formation of the right shoulder, which is formed with a high that is lower than the high formed in the head but is again followed by a retracement back to the low of the left shoulder. The pattern is complete once the price falls below the neckline, which is a support line formed at the level of the lows reached at each of the three retracements mentioned above.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612766277/E-Learning/InverseHeadAndShoulders.png" class="img-padding" >
                <h5>Inverse Head and Shoulders (Head-and-Shoulders Bottom)</h5>
                <p>The inverse head-and-shoulders pattern is the exact opposite of the head-and-shoulders top, as it signals that the security is set to make an upward move. Often coming at the end of a downtrend, the inverse head and shoulders is considered to be a reversal pattern, as the security typically heads higher after the completion of the pattern.</p>
                <p>Again, there are four steps to this pattern, starting with the formation of the left shoulder, which occurs when the price falls to a new low and rallies to a high. The formation of the head, which is the second step, occurs when the price moves to a low that is below the previous low, followed by a return to the previous high. This move back to the previous high creates the neckline for this chart pattern. The third step is the formation of the right shoulder, which sees a sell-off, but to a low that is higher than the previous one, followed by a return to the neckline. The pattern is complete when the price breaks above the neckline.</p>
                <h5>Volume</h5>
                <p>In technical analysis and chart-pattern analysis, volume plays an important role as it is used as a secondary indicator. Volume indicates activity and money movement. When volume is high, there is a lot of activity and money changing hands - making it an important indicator to follow.</p>
                <p>For the head-and-shoulders pattern, volume is used mainly at the point of breakout to help confirm the pattern. At this point, it's important that the breakout happens on a large-volume move. For a head-and-shoulders top, when the price breaks below the neckline (in a downward direction), it's best when this occurs during a large volume increase, which signals heavy selling. This strongly indicates that the underlying supply and demand in the market is moving in the same direction the chart pattern is predicting.</p>
                <p>Volume can also be used as a secondary indicator during the formation of the pattern, well before the breakout, to gain an idea of the pattern's strength.</p>
                <p>For a head-and-shoulders top, the left shoulder should show heavy volume as it hits its new peak. Low volume should take the left shoulder down to the neckline. The run towards the peak in the head should be on lighter volume compared to the peak formed in the left shoulder.</p>
                <p>This should be a warning, as volume should move with trends - not against them. The peak formed in the right shoulder should be seen with even lighter volume than in either the head or the left shoulder. And again, the volume should be high when the neckline is broken, which is by far the most important area to watch in terms of volume. If the volume is lighter on the neckline break, the chances of the price moving back to the neckline after breaking is greater than if the neckline break was accompanied by large volume.</p>
                <p>This interaction of volume and price movement in forming the reversal signal is not set in stone. However, it is the general tendency in the chart pattern.</p>
                <h5>Slope of the Neckline</h5>
                <p>Another key factor in the head-and-shoulders pattern is the formation of the neckline. The reason being that the neckline acts as support or resistance during the formation of the pattern, along with being the entry point at which the pattern confirms itself.</p>
                <p>In most of the above examples, the neckline is flat, but this need not be the case for the pattern to provide a potential trade. In most cases, the neckline will in fact be slanted either up or down. In general, a technically strong head-and-shoulders top should have a flat or slightly upward-trending neckline. For a head-and-shoulders bottom, it should be flat or slightly downward.</p>
                <h5>Price Objective</h5>
                <p>An important, but often overlooked, factor in technical analysis and chart patterns is the calculation of price objectives. This is a measure of where the price is considered to be headed, based on a confirmed pattern.</p>
                <p>While the price's direction is already known, based on the signal, what needs to be calculated is the projected price movement. This is done so that targets can be set, protective stops can be instituted and the worth of a trade can be evaluated.</p>
                <p>This is measured based on the height of the chart pattern, which is essentially the distance in price between the peak of the head and the neckline. For example, let's say that in a head-and-shoulders top, the peak of the head is formed at $50 and the neckline was established at $40 - a difference of $10.</p>
                <p>The price objective is calculated by subtracting the price at which the pattern breaks the neckline ($40) by the difference between the head and the neckline ($10). Based on this example, the price objective is $30 ($40-$10).</p>
                <p>This price objective is not an absolute and is used as a guideline to the attractiveness of a trade. The larger the difference between the objective and the price at the neckline, the more worth the trade has, as it will yield greater returns.</p>
                <p class="citation">*Adapted from <cite>Bottom, D., Langager, B. C., & Murphy, C. (2007). Analyzing Chart Patterns. 1–31.</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop