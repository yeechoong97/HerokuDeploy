@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2600px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Aroon</h3>
                <p>The Aroon Oscillator is a trend-following indicator that uses aspects of the Aroon Indicator (Aroon Up and Aroon Down) to gauge the strength of a current trend and the likelihood that it will continue. Readings above zero indicate that an uptrend is present, while readings below zero indicate that a downtrend is present. Traders watch for zero line crossovers to signal potential trend changes. They also watch for big moves, above 50 or below -50 to signal strong price moves.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612769066/E-Learning/Aroon.png" class="img-padding" alt="aroon">
                <h5>The Formula for the Aroon Oscillator is</h5>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612769066/E-Learning/AroonFormula.png" class="img-padding" alt="aroon-formula">
                <h5>How to Calculate the Aroon Oscillator</h5>
                <ol>
                    <li>Calculate Aroon Up by finding how many periods it has been since the last 25-period high. Subtract this from 25, then divide the result by 25. Multiply by 100.</li>
                    <li>Calculate Aroon Down by finding how many periods it has been since the last 25-period low. Subtract this from 25, then divide the result by 25. Multiply by 100.</li>
                    <li>Subtract Aroon Down from Aroon Up to get the Aroon Oscillator value.</li>
                    <li>Repeat the steps as each time period ends.</li>
                </ol>
                <h5>What Does the Aroon Oscillator Tell You?</h5>
                <p>The Aroon Oscillator was developed by Tushar Chande in 1995 as part of the Aroon Indicator system. Chande’s intentions for the system was to highlight short-term trend changes. The name Aroon is derived from the Sanskrit language and roughly translates to “dawn’s early light.”</p>
                <p>The Aroon Indicator system includes Aroon Up, Aroon Down and Aroon Oscillator. The Aroon Up and Aroon Down lines must be calculated first before drawing the Aroon Oscillator.</p>
                <p>This indicator typically uses a timeframe of 25 periods however the timeframe is subjective. Use more periods get fewer waves and a smoother looking indicator. Use fewer periods to generate move waves and quicker turnarounds in the indicator.</p>
                <p>Aroon Up and Aroon Down move between zero and 100.</p>
                <p>On a scale of zero to 100, the higher the indicator’s value, the stronger the trend. For example, a price reaching new highs one day ago would have an Aroon Up value of 96 ((25-1)/25)x100). Similarly, a price reaching new lows one day ago would have an Aroon Down value of 96 ((25-1)x100).</p>
                <p>The highs and lows used in the Aroon Up and Aroon Down calculations help to create an inverse relationship between the two indicators. When the Aroon Up value increases, the Aroon Down value will typically see a decrease and vice versa.</p>
                <p>The Aroon Oscillator moves between -100 and 100. A high oscillator value is an indication of an uptrend while a low oscillator value is an indication of a downtrend.</p>
                <p>When Aroon Up remains high from consecutive new highs, the oscillator value will be high, following the uptrend. When a security’s price is on a downtrend with many new lows, the Aroon Down value will be higher resulting in a lower oscillator value.</p>
                <p>The Aroon Oscillator line can be included with or without the Aroon Up and Aroon Down when viewing a chart. Significant changes in the direction of the Aroon Oscillator can help to identify a new trend.</p>
                <h5>Aroon Oscillator Trade Signals</h5>
                <p>The Aroon Oscillator can generate trade signals or provide insight into the current trend direction of an asset.</p>
                <p>When the oscillator moves above the zero line it means the Aroon Up is crossing above the Aroon Down. This means the price has made a high more recently than a low. That could be a sign that an uptrend is starting.</p>
                <p>When the oscillator moves below zero, it means the Aroon Down is crossing below the Aroon Up. A low occurred more recently than a high, which could signal a downtrend is starting.</p>
                <h5>Limitations of Using the Aroon Oscillator</h5>
                <p>The Aroon Oscillator does a good job of keeping a trader in a trade when a long-term trend develops. This is because during an uptrend, for example, the price tends to keep making new highs which keeps the oscillator above zero.</p>
                <p>During choppy market conditions, the indicator will provide poor trade signals, as the price and the oscillator whipsaw back and forth.</p>
                <p>The indicator may also sometimes provide trade signals too late to be of use. The price may have already run a significant distance before the trade signal develops. The price may be due for a retracement when the trade signal is appearing.</p>
                <p>The number of time periods is also arbitrary. There is no proof that a more recent high or low within the last 25-periods will result in a new and sustained uptrend or downtrend.</p>
                <p>The indicator is best used in conjunction with price action analysis, fundamentals if long-term trading, and other technical indicators.</p>
                <p class="citation blockquote-footer">Adapted from <cite>Mitchell, C. (2019). Aroon Oscillator. https://www.investopedia.com/terms/a/aroonoscillator.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop