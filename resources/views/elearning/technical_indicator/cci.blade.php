@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2500px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Commodity Channel Index</h3>
                <p>Developed by Donald Lambert, the Commodity Channel Index​ (CCI) is a momentum-based oscillator used to help determine when an investment vehicle is reaching a condition of being overbought or oversold.</p>
                <p>This technical indicator is also used to assess price trend direction and strength. This information allows traders to determine if they want to enter or exit a trade, refrain from taking a trade, or add to an existing position. In this way, the indicator can be used to provide trade signals when it acts in a certain way.</p>
                <h5>Formula For the Commodity Channel Index</h5>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768122/E-Learning/CCIFormula.png" class="img-padding" >
                <h5>How to Calculate the Commodity Channel Index</h5>
                <ol>
                    <li>Determine how many periods your CCI will analyze. 20 is commonly used. Fewer periods result in a more volatile indicator, while more periods will make it smoother. For this calculation, we will assume 20 periods. Adjust the calculation if using a different number.</li>
                    <li>In a spreadsheet, track the high, low, close for 20 periods and compute the Typical Price.</li>
                    <li>After 20 periods, compute the Moving Average of the typical price by summing the last 20 Typical Prices and dividing by 20.</li>
                    <li>Calculate the Mean Deviation by subtracting the Moving Average from the Typical Price for the last 20 periods. Sum the absolute values (ignore minus signs) of these figures and then divide by 20.</li>
                    <li>Insert the most recent Typical Price, the Moving Average, and the Mean Deviation into the formula to compute the current CCI reading.</li>
                    <li>Repeat the process as each new period ends.</li>
                </ol>
                <h5>What Does the Commodity Channel Index Tell You?</h5>
                <p>The CCI is primarily used for spotting new trends, watching for overbought and oversold levels, and spotting weakness in trends when the indicator diverges with price.</p>
                <p>When the CCI moves from negative or near-zero territory to above 100, that may indicate the price is starting a new uptrend. Once this occurs, traders can watch for a pullback in price followed by a rally in both price and the CCI to signal a buying opportunity.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768122/E-Learning/CCI.png" class="img-padding" >
                <p>The same concept applies to an emerging downtrend. When the indicator goes from positive or near-zero readings to below -100, then a downtrend may be starting. This is a signal to get out of longs or to start watching for shorting opportunities.</p>
                <p>Overbought and oversold levels are not fixed since the indicator is unbound. Therefore, traders look to past readings on the indicator to get a sense of where the price reversed. For one stock, it may tend to reverse near +200 and -150. Another commodity may tend to reverse near +325 and -350. Zoom out on the chart to see lots of price reversal points, and the CCI readings at those times.</p>
                <p>There are also divergences. This is when the price is moving one way but the indicator is moving another. If the price is rising and the CCI is falling, this can indicate a weakness in the trend. While divergence is a poor trade signal, since it can last a long time and doesn't always result in a price reversal, it can be good for at least warning the trader that there is the possibility of a reversal. This way they can tighten stop loss levels or hold off on taking new trades in the price trend direction.</p>
                <h5>Limitations of Using the Commodity Channel Index</h5>
                <p>While often used to spot overbought and oversold conditions, the CCI is highly subjective in this regard. The indicator is unbound and therefore, prior overbought and oversold levels may have little impact in the future.</p>
                <p>The indicator is also lagging, which means at times it will provide poor signals. A rally to 100 or -100 to signal a new trend may come too late, as the price has had its run and is starting to correct already. Such incidents are called whipsaws; a signal is provided by the indicator but the price doesn't follow through after that signal and money is lost on the trade. If not careful, whipsaws can occur frequently. Therefore, the indicator is best used in conjunction with price analysis and other forms of technical analysis or indicators to help confirm or reject CCI signals.</p>
                <p class="citation">*Adapted from <cite>Mitchell, C. (2021a). Commodity Channel Index (CCI). https://www.investopedia.com/terms/c/commoditychannelindex.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop