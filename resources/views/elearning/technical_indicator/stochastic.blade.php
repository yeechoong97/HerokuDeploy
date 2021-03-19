@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2400px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Stochastic Oscillator</h3>
                <p>A stochastic oscillator is a momentum indicator comparing a particular closing price of a security to a range of its prices over a certain period of time. The sensitivity of the oscillator to market movements is reducible by adjusting that time period or by taking a moving average of the result. It is used to generate overbought and oversold trading signals, utilizing a 0–100 bounded range of values.</p>
                <h5>The Formula for Stochastic Oscillator</h5>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768047/E-Learning/StochasticFormula.png" class="img-padding" alt="stochastic-formula">
                <p>Notably, %K is referred to sometimes as the fast stochastic indicator. The "slow" stochastic indicator is taken as %D = 3-period moving average of %K.</p>
                <p>The general theory serving as the foundation for this indicator is that in a market trending upward, prices will close near the high, and in a market trending downward, prices close near the low. Transaction signals are created when the %K crosses through a three-period moving average, which is called the %D.</p>
                <p>The difference between the slow and fast Stochastic Oscillator is the Slow %K incorporates a %K slowing period of 3 that controls the internal smoothing of %K. Setting the smoothing period to 1 is equivalent to plotting the Fast Stochastic Oscillator.</p>
                <h5>What Does the Stochastic Oscillator Tell You?</h5>
                <p>The stochastic oscillator is range-bound, meaning it is always between 0 and 100. This makes it a useful indicator of overbought and oversold conditions. Traditionally, readings over 80 are considered in the overbought range, and readings under 20 are considered oversold. However, these are not always indicative of impending reversal; very strong trends can maintain overbought or oversold conditions for an extended period. Instead, traders should look to changes in the stochastic oscillator for clues about future trend shifts.</p>
                <p>Stochastic oscillator charting generally consists of two lines: one reflecting the actual value of the oscillator for each session, and one reflecting its three-day simple moving average. Because price is thought to follow momentum, the intersection of these two lines is considered to be a signal that a reversal may be in the works, as it indicates a large shift in momentum from day to day.</p>
                <p>Divergence between the stochastic oscillator and trending price action is also seen as an important reversal signal. For example, when a bearish trend reaches a new lower low, but the oscillator prints a higher low, it may be an indicator that bears are exhausting their momentum and a bullish reversal is brewing.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768047/E-Learning/Stochastic.png" class="img-padding" alt="stochastic">
                <h5>A Brief History</h5>
                <p>The stochastic oscillator was developed in the late 1950s by George Lane. As designed by Lane, the stochastic oscillator presents the location of the closing price of a stock in relation to the high and low range of the price of a stock over a period of time, typically a 14-day period. Lane, over the course of numerous interviews, has said that the stochastic oscillator does not follow price or volume or anything similar. He indicates that the oscillator follows the speed or momentum of price.</p>
                <p>Lane also reveals in interviews that, as a rule, the momentum or speed of the price of a stock changes before the price changes itself. In this way, the stochastic oscillator can be used to foreshadow reversals when the indicator reveals bullish or bearish divergences. This signal is the first, and arguably the most important, trading signal Lane identified.</p>
                <h5>Example of How to Use the Stochastic Oscillator</h5>
                <p>The stochastic oscillator is included in most charting tools and can be easily employed in practice. The standard time period used is 14 days, though this can be adjusted to meet specific analytical needs. The stochastic oscillator is calculated by subtracting the low for the period from the current closing price, dividing by the total range for the period and multiplying by 100. As a hypothetical example, if the 14-day high is $150, the low is $125 and the current close is $145, then the reading for the current session would be: (145-125) / (150 - 125) * 100, or 80.</p>
                <p>By comparing the current price to the range over time, the stochastic oscillator reflects the consistency with which the price closes near its recent high or low. A reading of 80 would indicate that the asset is on the verge of being overbought.</p>
                <h5>Limitations of the Stochastic Oscillator</h5>
                <p>The primary limitation of the stochastic oscillator is that it has been known to produce false signals. This is when a trading signal is generated by the indicator, yet the price does not actually follow through, which can end up as a losing trade. During volatile market conditions, this can happen quite regularly. One way to help with this is to take the price trend as a filter, where signals are only taken if they are in the same direction as the trend.</p>
                <p class="citation blockquote-footer">Adapted from <cite>Hayes, A. (2020a). Stochastic Oscillator. https://www.investopedia.com/terms/s/stochasticoscillator.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop