@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2600px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Parabolic SAR</h3>
                <p>The parabolic SAR indicator, developed by J. Wells Wilder, is used by traders to determine trend direction and potential reversals in price. The indicator uses a trailing stop and reverse method called "SAR," or stop and reverse, to identify suitable exit and entry points. Traders also refer to the indicator as the parabolic stop and reverse, parabolic SAR, or PSAR.</p>
                <p>The parabolic SAR indicator appears on a chart as a series of dots, either above or below an asset's price, depending on the direction the price is moving. A dot is placed below the price when it is trending upward, and above the price when it is trending downward.</p>
                <h5>The Formula for the Parabolic SAR Indicator is :</h5>
                <p>A rising PSAR has a slightly different formula than a falling PSAR.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768802/E-Learning/PSARFormula.png" class="img-padding" >
                <h5>How to Calculate the Parabolic SAR Indicator</h5>
                <p>There are lots of things to track when using the parabolic stop and reverse indicator. One thing to constantly keep in mind is that if the SAR is initially rising, and the price has a close below the rising SAR value, then the trend is now down and the falling SAR formula will be used. If the price rises above the falling SAR value, then switch to the rising formula.</p>
                <ol>
                    <li>Monitor price for at least five periods or more, recording the high and low (EPs).</li>
                    <li>If the price is rising, use the lowest low of those five periods as the Prior PSAR value in the formula. If the price is falling, use the highest high of those periods as the initial Prior PSAR value.</li>
                    <li>Use an AF of 0.02 initially, and increase by 0.02 for each new extreme high (rising) or low (falling). The maximum AF value is 0.2.</li>
                    <li>Ideally, utilize a spreadsheet where the high and low price, SAR, EP, and AF can be tracked on a period-by-period basis.</li>
                </ol>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768802/E-Learning/PSAR.png" class="img-padding" >
                <h5>What Does the Parabolic Stop and Reverse (SAR) Tell You?</h5>
                <p>The parabolic indicator generates buy or sell signals when the position of the dots moves from one side of the asset's price to the other. For example, a buy signal occurs when the dots move from above the price to below the price, while a sell signal occurs when the dots move from below the price to above the price.</p>
                <p>Traders also use the PSAR dots to set trailing stop loss orders. For example, if the price is rising, and the PSAR is also rising, the PSAR can be used as a possible exit if long. If the price drops below the PSAR, exit the long trade.</p>
                <p>The PSAR moves regardless of whether price moves. This means that if the price is rising initially, but then moves sideways, the PSAR will keep rising despite the sideways movement in price. A reversal signal will be generated at some point, even if the price hasn't dropped. The PSAR only needs to catch up to price to generate a reversal signal. For this reason, a reversal signal on the indicator doesn't necessarily mean the price is reversing.</p>
                <p>The parabolic indicator generates a new signal each time it moves to the opposite side of an asset's price. This ensures a position in the market always, which makes the indicator appealing to active traders. The indicator works most effectively in trending markets where large price moves allow traders to capture significant gains. When a security’s price is range-bound, the indicator will constantly be reversing, resulting in multiple low-profit or losing trades.</p>
                <p>For best results, traders should use the parabolic indicator with other technical indicators that indicate whether a market is trending or not, such as the average directional index (ADX), a moving average, or trendline. For example, traders might confirm a PSAR buy signal with an ADX reading above 30 and a bounce for a long-term rising trendline.</p>
                <h5>Limitations of Using the Parabolic Stop and Reverse (SAR) Indicator</h5>
                <p>The parabolic SAR is always on, and constantly generating signals, whether there is a quality trend or not. Therefore, many signals may be of poor quality because no significant trend is present or develops following a signal.</p>
                <p>Reversal signals are also generated, eventually, regardless of whether the price actually reverses. This is because a reversal is generated when the SAR catches up to the price due to the acceleration factor in the formula. Therefore, a reversal signal may get a trader out of a trade even though the price hasn't technically reversed.</p>
                <p class="citation">*Adapted from <cite>Mitchell, C. (2021c). Parabolic SAR (Stop and Reverse) Indicator Definition and Uses. https://www.investopedia.com/terms/p/parabolicindicator.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop