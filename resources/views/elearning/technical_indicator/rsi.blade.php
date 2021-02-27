@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 3000px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Relative Strength Index</h3>
                <p>The relative strength index (RSI) is a momentum indicator used in technical analysis that measures the magnitude of recent price changes to evaluate overbought or oversold conditions in the price of a stock or other asset. The RSI is displayed as an oscillator (a line graph that moves between two extremes) and can have a reading from 0 to 100. The indicator was originally developed by J. Welles Wilder Jr. and introduced in his seminal 1978 book, "New Concepts in Technical Trading Systems."</p>
                <p>Traditional interpretation and usage of the RSI are that values of 70 or above indicate that a security is becoming overbought or overvalued and may be primed for a trend reversal or corrective pullback in price. An RSI reading of 30 or below indicates an oversold or undervalued condition.</p>
                <h5>The Formula for RSI</h5>
                <p>The relative strength index (RSI) is computed with a two-part calculation that starts with the following formula:</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767938/E-Learning/RSIStep1Formula.png" class="img-padding" >
                <p>The average gain or loss used in the calculation is the average percentage gain or loss during a look-back period. The formula uses a positive value for the average loss.</p>
                <p>The standard is to use 14 periods to calculate the initial RSI value. For example, imagine the market closed higher seven out of the past 14 days with an average gain of 1%. The remaining seven days all closed lower with an average loss of -0.8%. The calculation for the first part of the RSI would look like the following expanded calculation:</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767938/E-Learning/RSIStep1Example.png" class="img-padding" >
                <p>Once there are 14 periods of data available, the second part of the RSI formula can be calculated. The second step of the calculation smooths the results.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767938/E-Learning/RSIStep2Formula.png" class="img-padding" >
                <h5>Calculation of the RSI</h5>
                <p>Using the formulas above, RSI can be calculated, where the RSI line can then be plotted beneath an asset's price chart.</p>
                <p>The RSI will rise as the number and size of positive closes increase, and it will fall as the number and size of losses increase. The second part of the calculation smooths the result, so the RSI will only near 100 or 0 in a strongly trending market.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767938/E-Learning/RSI.png" class="img-padding" >
                <p>As you can see in the above chart, the RSI indicator can stay in the overbought region for extended periods while the stock is in an uptrend. The indicator may also remain in oversold territory for a long time when the stock is in a downtrend. This can be confusing for new analysts, but learning to use the indicator within the context of the prevailing trend will clarify these issues.</p>
                <h5>What Does RSI Tell You?</h5>
                <p>The primary trend of the stock or asset is an important tool in making sure the indicator's readings are properly understood. For example, well-known market technician Constance Brown, CMT, has promoted the idea that an oversold reading on the RSI in an uptrend is likely much higher than 30%, and an overbought reading on the RSI during a downtrend is much lower than the 70% level.</p>
                <p>As you can see in the following chart, during a downtrend, the RSI would peak near the 50% level rather than 70%, which could be used by investors to more reliably signal bearish conditions. Many investors will apply a horizontal trendline that is between 30% and 70% levels when a strong trend is in place to better identify extremes. Modifying overbought or oversold levels when the price of a stock or asset is in a long-term, horizontal channel is usually unnecessary.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767938/E-Learning/Adjusted.png" class="img-padding" >
                <p>A related concept to using overbought or oversold levels appropriate to the trend is to focus on trading signals and techniques that conform to the trend. In other words, using bullish signals when the price is in a bullish trend and bearish signals when a stock is in a bearish trend will help to avoid the many false alarms the RSI can generate.</p>
                <h5>Example of RSI Divergences</h5>
                <p>A bullish divergence occurs when the RSI creates an oversold reading followed by a higher low that matches correspondingly lower lows in the price. This indicates rising bullish momentum, and a break above oversold territory could be used to trigger a new long position.</p>
                <p>A bearish divergence occurs when the RSI creates an overbought reading followed by a lower high that matches corresponding higher highs on the price.</p>
                <h5>Limitations of the RSI</h5>
                <p>The RSI compares bullish and bearish price momentum and displays the results in an oscillator that can be placed beneath a price chart. Like most technical indicators, its signals are most reliable when they conform to the long-term trend.</p>
                <p>True reversal signals are rare and can be difficult to separate from false alarms. A false positive, for example, would be a bullish crossover followed by a sudden decline in a stock. A false negative would be a situation where there is a bearish crossover, yet the stock accelerated suddenly upward.</p>
                <p>Since the indicator displays momentum, it can stay overbought or oversold for a long time when an asset has significant momentum in either direction. Therefore, the RSI is most useful in an oscillating market where the asset price is alternating between bullish and bearish movements.</p>
                <p class="citation blockquote-footer">Adapted from <cite>Fernando, J. (2020). Relative Strength Index (RSI). https://www.investopedia.com/terms/r/rsi.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop