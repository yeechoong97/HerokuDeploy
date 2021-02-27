@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2100px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">MACD</h3>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767662/E-Learning/MACD.png" class="img-padding" >
                <p>The Moving Average Convergence Divergence (MACD) is a technical indicator which simply measures the relationship of exponential moving averages (EMA).The MACD displays a MACD line (red), signal line (orange) and a histogram (yellow) - showing the difference between the MACD line and the signal line.</p>
                <p>The MACD line is the difference between two exponentially levelled moving averages – usually 12 and 26-periods, whilst the signal line is generally a 9-period exponentially smoothed average of the MACD line.</p>
                <p>These MACD lines waver in and around the zero line. This gives the MACD the characteristics of an oscillator giving overbought and oversold signals above and below the zero-line respectively.</p>
                <h5>What Does MACD Measure?</h5>
                <p>The MACD measures momentum or trend strength by using the MACD line and zero line as reference points:</p>
                <ul>
                    <li>When the MACD line crosses <b>ABOVE</b> the zero line, this signals an uptrend</li>
                    <li>When the MACD line crosses <b>BELOW</b> the zero line, this signals an downtrend</li>
                </ul>
                <p>In addition, the MACD signals buy or sell orders which are given when the two MACD lines cross over as outlined below:</p>
                <ul>
                    <li>When the MACD line crosses <b>ABOVE</b> the signal line, traders use this as a <b>BUY</b> indication</li>
                    <li>When the MACD line crosses <b>BELOW</b> the signal line, traders use this as a <b>SELL</b> indication</li>
                </ul>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767662/E-Learning/MACDSignal.png" class="img-padding" >
                <h5>How is MACD Calculated</h5>
                <p>Most charting platforms offer the MACD indicator, and implement this calculation using the aforementioned default periods. The formula below breaks down the varying components of the MACD to make it comfortable for traders to apply.</p>
                <ol>
                    <li><b>MACD Line</b> : 12-Period EMA - 26-period EMA</li>
                    <li><b>Signal Line</b> : 9-Period EMA</li>
                    <li><b>Histogram</b> : Difference between MACD line and Signal line
                </ol>
                <p>As mentioned previously, the MACD histogram plots the difference between the two moving average lines. The histogram fluctuates in and around the zero designation on the MACD indicator. When the MACD line is above the signal line, then the histogram will be positive. The opposite is true when the MACD line sits below the signal, whereby the histogram will plot below the zero as a negative value. A zero value on the histogram indicates a crossing over of the two moving average lines thus marking buy/sell signals.</p>
                <h5>Limitations of MACD</h5>
                <p>The MACD indicator is considered to work best in trending markets. This limits its use for traders depending on their trading strategies. For example, range bound/consolidating markets will generally give flawed signals when using the MACD. Traders will need to truly understand the MACD as well as when to employ the indicator for optimal use. Novice traders may find this indicator difficult to use initially, which is why going through basic moving average and EMA fundamentals will benefit traders who are looking to make use of the MACD indicator.</p>
                <p>The variations that can be implemented with the MACD indicator is almost infinite which makes it very personal to the trader. This subjective nature of the MACD will mean that results differ from trader to trader which take away any consistency. Traders will need to follow a basic outline when using the MACD:</p>
                <ul>
                    <li>Selecting EMA parameters</li>
                    <li>Using an appropriate time frame, as MACD may function differently across time frames</li>
                </ul>
                <p class="citation blockquote-footer">Adapted from <cite>Venketas, W. (2019c). What the MACD Indicator is and How it Works. https://www.dailyfx.com/education/technical-analysis-tools/macd-indicator.html</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop