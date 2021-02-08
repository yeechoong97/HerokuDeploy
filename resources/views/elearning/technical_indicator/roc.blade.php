@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2700px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Rate Of Change</h3>
                <p>The Price Rate of Change (ROC) is a momentum-based technical indicator that measures the percentage change in price between the current price and the price a certain number of periods ago. The ROC indicator is plotted against zero, with the indicator moving upwards into positive territory if price changes are to the upside, and moving into negative territory if price changes are to the downside.</p>
                <p>The indicator can be used to spot divergences, overbought and oversold conditions, and centerline crossovers.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768193/E-Learning/ROC.png" class="img-padding" >
                <h5>Formula For the Rate Of Change</h5>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768193/E-Learning/ROCFormula.png" class="img-padding" >
                <h5>How to Calculate the Price Rate of Change Indicator</h5>
                <p>The main step in calculating the ROC, is picking the "n" value. Short-term traders may choose a small n value, such as nine. Longer-term investors may choose a value such as 200. The n value is how many periods ago the current price is being compared to. Smaller values will see the ROC react more quickly to price changes, but that can also mean more false signals. A larger value means the ROC will react slower, but the signals could be more meaningful when they occur.</p>
                <ol>
                    <li>Select an n value. It can be anything such as 12, 25, or 200. Short-term trader traders typically use a smaller number while longer-term investors use a larger number.</li>
                    <li>Find the most recent period's closing price.</li>
                    <li>Find the period's close price from n periods ago.</li>
                    <li>Plug the prices from steps two and three into the ROC formula.</li>
                    <li>As each period ends, calculate the new ROC value.</li>
                </ol>
                <h5>What Does the Price Rate of Change Indicator Tell You?</h5>
                <p>The Price Rate of Change (ROC) is classed as a momentum or velocity indicator because it measures the strength of price momentum by the rate of change. For example, if a stock's price at the close of trading today is $10, and the closing price five trading days prior was $7, then the five-day ROC is 42.85, calculated as</p>
                <h4 style="text-align:center">((10 − 7) ÷ 7) × 100 = 42.85</h4><br>
                <p>Like most momentum oscillators, the ROC appears on a chart in a separate window below the price chart. The ROC is plotted against a zero line that differentiates positive and negative values. Positive values indicate upward buying pressure or momentum, while negative values below zero indicate selling pressure or downward momentum. Increasing values in either direction, positive or negative, indicate increasing momentum, and moves back toward zero indicate waning momentum.</p>
                <p>Zero-line crossovers can be used to signal trend changes. Depending on the n value used these signal may come early in a trend change (small n value) or very late in a trend change (larger n value). The ROC is prone to whipsaws, especially around the zero line. Therefore, this signal is generally not used for trading purposes, but rather to simply alert traders that a trend change may be underway.</p>
                <p>Overbought and oversold levels are also used. These levels are not fixed, but will vary by the asset being traded. Traders look to see what ROC values resulted in price reversals in the past. Often traders will find both positive and negative values where the price reversed with some regularity. When the ROC reaches these extreme readings again, traders will be on high alert and watch for the price to start reversing to confirm the ROC signal. With the ROC signal in place, and the price reversing to confirm the ROC signal, a trade may be considered.</p>
                <p>ROC is also commonly used as a divergence indicator that signals a possible upcoming trend change. Divergence occurs when the price of a stock or another asset moves in one direction while its ROC moves in the opposite direction. For example, if a stock's price is rising over a period of time while the ROC is progressively moving lower, then the ROC is indicating bearish divergence from price, which signals a possible trend change to the downside. The same concept applies if the price is moving down and ROC is moving higher. This could signal a price move to the upside. Divergence is a notoriously poor timing signal since a divergence can last a long time and won't always result in a price reversal.</p>
                <h5>Limitation of Using the Price Rate of Change Indicator</h5>
                <p>One potential problem with using the ROC indicator is that its calculation gives equal weight to the most recent price and the price from n periods ago, despite the fact that some technical analysts consider more recent price action to be of more importance in determining likely future price movement.</p>
                <p>The indicator is also prone to whipsaws, especially around the zero line. This is because when the price consolidates the price changes shrink, moving the indicator toward zero. Such times can result in multiple false signals for trend trades, but does help confirm the price consolidation.</p>
                <p>While the indicator can be used for divergence signals, the signals often occur far too early. When the ROC starts to diverge, the price can still run in the trending direction for some time. Therefore, divergence should not be acted on as a trade signal, but could be used to help confirm a trade if other reversal signals are present from other indicators and analysis methods.</p>
                <p class="citation">*Adapted from <cite>Mitchell, C. (2020d). Price Rate Of Change Indicator (ROC). https://www.investopedia.com/terms/p/pricerateofchange.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop