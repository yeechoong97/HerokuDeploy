@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2500px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Money Flow Index</h3>
                <p>The Money Flow Index (MFI) is a technical oscillator that uses price and volume data for identifying overbought or oversold signals in an asset. It can also be used to spot divergences which warn of a trend change in price. The oscillator moves between 0 and 100.</p>
                <p>Unlike conventional oscillators such as the Relative Strength Index (RSI), the Money Flow Index incorporates both price and volume data, as opposed to just price. For this reason, some analysts call MFI the volume-weighted RSI.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768997/E-Learning/MFI.png" class="img-padding" >
                <h5>The Formulas for the Money Flow Index Are:</h5>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768997/E-Learning/MFIFormula.png" class="img-padding" >
                <p>When the price advances from one period to the next Raw Money Flow is positive and it is added to Positive Money Flow. When Raw Money Flow is negative because the price dropped that period, it is added to Negative Money Flow.</p>
                <h5>How to Calculate the Money Flow Index</h5>
                <p>There are several steps for calculating the Money Flow Index. If doing it by hand, using a spreadsheet is recommended.</p>
                <ol>
                    <li>Calculate the Typical Price for each of the last 14 periods.</li>
                    <li>For each period, mark whether the typical price was higher or lower than the prior period. This will tell you whether Raw Money Flow is positive or negative.</li>
                    <li>Calculate Raw Money Flow by multiplying the Typical Price by Volume for that period. Use negative or positive numbers depending on whether the period was up or down (see step above).</li>
                    <li>Calculate the Money Flow Ratio by adding up all the positive money flows over the last 14 periods and dividing it by the negative money flows for the last 14 periods.</li>
                    <li>Calculate the Money Flow Index (MFI) using the ratio found in step four.</li>
                    <li>Continue doing the calculations as each new period ends, using only the last 14 periods of data.</li>
                </ol>
                <h5>What Does the Money Flow Index Tell You?</h5>
                <p>One of the primary ways to use the Money Flow Index is when there is a divergence. A divergence is when the oscillator is moving in the opposite direction of price. This is a signal of a potential reversal in the prevailing price trend.</p>
                <p>For example, a very high Money Flow Index that begins to fall below a reading of 80 while the underlying security continues to climb is a price reversal signal to the downside. Conversely, a very low MFI reading that climbs above a reading of 20 while the underlying security continues to sell off is a price reversal signal to the upside.</p>
                <p>Traders also watch for larger divergences using multiple waves in the price and MFI. For example, a stock peaks at $10, pulls back to $8, and then rallies to $12. The price has made two successive highs, at $10 and $12. If MFI makes a lower higher when the price reaches $12, the indicator is not confirming the new high. This could foreshadow a decline in price.</p>
                <p>The overbought and oversold levels are also used to signal possible trading opportunities. Moves below 10 and above 90 are rare. Traders watch for the MFI to move back above 10 to signal a long trade, and to drop below 90 to signal a short trade.</p>
                <p>Other moves out of overbought or oversold territory can also be useful. For example, when an asset is in an uptrend, a drop below 20 (or even 30) and then a rally back above it could indicate a pullback is over and the price uptrend is resuming. The same goes for a downtrend. A short-term rally could push the MFI up to 70 or 80, but when it drops back below that could be the time to enter a short trade in preparation for another drop.</p>
                <h5>Limitations of the Money Flow Index</h5>
                <p>The MFI is capable of producing false signals. This is when the indicator does something that indicates a good trading opportunity is present, but then the price doesn't move as expected resulting in a losing trade. A divergence may not result in a price reversal, for instance.</p>
                <p>The indicator may also fail to warn of something important. For example, while a divergence may result in a price reversing some of the time, divergence won't be present for all price reversals. Because of this, it is recommended that traders use other forms of analysis and risk control and not rely exclusively on one indicator.</p>
                <p class="citation">*Adapted from <cite>Mitchell, C. (2020d). Money Flow Index - MFI Definition and Uses. https://www.investopedia.com/terms/m/mfi.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop