@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2200px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">William %R</h3>
                <p>Williams %R, also known as the Williams Percent Range, is a type of momentum indicator that moves between 0 and -100 and measures overbought and oversold levels. The Williams %R may be used to find entry and exit points in the market. The indicator is very similar to the Stochastic oscillator and is used in the same way. It was developed by Larry Williams and it compares a stock’s closing price to the high-low range over a specific period, typically 14 days or periods.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768728/E-Learning/William.png" class="img-padding" >
                <h5>The Formula for the Williams %R is :</h5>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768728/E-Learning/WilliamFormula.png" class="img-padding" >
                <h5>How to Calculate the Williams %R</h5>
                <p>The Williams %R is calculated based on price, typically over the last 14 periods.</p>
                <ol>
                    <li>Record the high and low for each period over 14 periods.</li>
                    <li>On the 14th period, note the current price, the highest price, and lowest price. It is now possible to fill in all the formula variables for Williams %R.</li>
                    <li>On the 15th period, note the current price, highest price, and lowest price, but only for the last 14 periods (not the last 15). Compute the new Williams %R value.</li>
                    <li>As each period ends compute the new Williams %R, only using the last 14 periods of data.</li>
                </ol>
                <h5>What Does Williams %R Tell You?</h5>
                <p>The indicator is telling a trader where the current price is relative to the highest high over the last 14 periods (or whatever number of lookback periods is chosen).</p>
                <p>When the indicator is between -20 and zero the price is overbought, or near the high of its recent price range. When the indicator is between -80 and -100 the price is oversold, or far from the high of its recent range.</p>
                <p>During an uptrend, traders can watch for the indicator to move below -80. When the price starts moving up, and the indicator moves back above -80, it could signal that the uptrend in price is starting again.</p>
                <p>The same concept could be used to find short trades in a downtrend. When the indicator is above -20, watch for the price to start falling along with the Williams %R moving back below -20 to signal a potential continuation of the downtrend.</p>
                <p>Traders can also watch for momentum failures. During a strong uptrend, the price will often reach -20 or above. If the indicator falls, and then can't get back above -20 before falling again, that signals that the upward price momentum is in trouble and a bigger price decline could follow.</p>
                <p>The same concept applies to a downtrend. Readings of -80 or lower are often reached. When the indicator can no longer reach those low levels before moving higher it could indicate the price is going to head higher.</p>
                <h5>Limitations of Using the Williams %R</h5>
                <p>Overbought and oversold readings on the indicator don't mean a reversal will occur. Overbought readings actually help confirm an uptrend, since a strong uptrend should regularly see prices that are pushing to or past prior highs (what the indicator is calculating).</p>
                <p>The indicator can also be too responsive, meaning it gives many false signals. For example, the indicator may be in oversold territory and starts to move higher, but the price fails to do so. This is because the indicator is only looking at the last 14 periods. As periods go by, the current price relative to the highs and lows in the lookback period changes, even if the price hasn't really moved.</p>
                <p class="citation">*Adapted from <cite>Mitchell, C. (2020e). Williams %R Definition and Uses. https://www.investopedia.com/terms/w/williamsr.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop