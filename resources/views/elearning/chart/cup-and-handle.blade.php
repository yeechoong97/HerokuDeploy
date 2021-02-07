@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1780px;">
            <div class="sidenav-content-details">
            <h3 id="learning-title">Cup And Handle</h3>
            <p>A cup-and-handle pattern resembles the shape of a tea cup on a chart. This is a bullish continuation pattern where the upward trend has paused, and traded down, but will continue in an upward direction upon the completion of the pattern. This pattern can range from several months to a year, but its general form remains the same.</p>
            <p>The cup-and-handle pattern is preceded by an upward move, which stalls and sells off. The sell-off is what forms the initial part of this pattern. After the sell-off, the security will basically trade flat for an extended period of time, with no clear trend. The next part of the pattern is the upward move back towards the peak of the preceding upward move. The last part of the pattern, known as the handle, is a relatively smaller downward move before the security moves higher and continues the previous trend.</p>
            <h5>Components of the Cup and Handle</h5>
            <p>There are several components of the cup and handle that should be noted in order to evaluate the potential trading signal. First, it's important that there is an upward trend before the formation of the cup and handle. In general, the larger the prior trend is, the lower the potential for a large breakout after the pattern has been completed. The reason being that a lot of the run-up in the security happened prior to the formation of the cup, again weakening the size of the potential upward move.</p>
            <img src ="{{asset('pictures/CupAndHandle.png')}}" class="img-padding" >
            <p>The construct of the cup itself is also important: it should be a nicely rounded formation, similar to a semi-circle. The reason is that a cup-and-handle pattern is a signal of consolidation within a trend, where the weaker investors leave the market and new buyers and resolute holders stay in the security. If the shape of the cup is too sharp (or quick), it is not considered a true consolidation phase in the upward trend and thus weakens the potential trade signal.</p>
            <p>The cup's height should also be a focus: a traditional cup-and-handle pattern should be between one-third and two-thirds the size of the previous upward movement, depending on market volatility. So, if the move of the preceding trend was from $10 to $35, the height of the cup should be at least $8 (roughly $25 x 33%) to $16 (roughly $25 x 66%). The height of the cup can also be used as an initial price target after the pattern completes itself and breaks out of the handle.</p>
            <h5>The Handle</h5>
            <p>Another important component to watch is the handle, as it completes the pattern. As mentioned before, the handle is the downward move by the security after the upward move on the right side of the cup. If the handle is downward moving, the general rule is that the handle's downward movement can retrace one-third of the gain made in the right side of the cup. During this downward move, a descending trendline can be drawn, which forms the signal for the breakout. A move by the security above this descending trendline is a signal that the prior upward trend is set to begin.</p>
            <p>A more conservative breakout signal would be above the price point of the two peaks in the cup. This is the price where the initial upward trend peaked and the point where the cup's upward move on the right side peaked before entering the handle. A breakout above this point is the strongest signal of a true resumption of the prior trend.</p>
            <p>As with most chart patterns, volume is vital in the confirmation of the pattern itself and the signal formed. Again, the most important area of focus is the breakout: the stronger the volume on the upward breakout, the clearer the sign that the upward trend will continue. Like the head-and-shoulders pattern, the price may move back to the trendline to test the support.</p>
            <p>The cup and handle is another time-tested pattern that has created valuable gains for investors. The components mentioned above are not absolutes but help to highlight areas of focus as a security trades in a cup and handle.</p>
            <p>*Adapted from <b>Bottom, D., Langager, B. C., & Murphy, C. (2007). Analyzing Chart Patterns. 1–31.</b></p>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop