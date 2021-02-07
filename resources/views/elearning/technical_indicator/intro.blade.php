@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1680px;">
            <div class="sidenav-content-details">
            <h3 id="learning-title">Technical Indicator Intro</h3>
            <img src ="{{asset('pictures/IndicatorTypes.png')}}" class="img-padding" >
            <p>Technical indicators are heuristic or pattern-based signals produced by the price, volume, and/or open interest of a security or contract used by traders who follow technical analysis.</p>
            <p>By analyzing historical data, technical analysts use indicators to predict future price movements. Examples of common technical indicators include the Relative Strength Index, Money Flow Index, Stochastics, MACD and Bollinger Bands</p>
            <h5>How Technical Indicators Work</h5>
            <p>Technical analysis is a trading discipline employed to evaluate investments and identify trading opportunities by analyzing statistical trends gathered from trading activity, such as price movement and volume. Unlike fundamental analysts, who attempt to evaluate a security's intrinsic value based on financial or economic data, technical analysts focus on patterns of price movements, trading signals, and various other analytical charting tools to evaluate a security's strength or weakness.</p>
            <p>Technical analysis can be used on any security with historical trading data. This includes stocks, futures, commodities, fixed-income, currencies, and other securities. In this tutorial, we’ll usually analyze stocks in our examples, but keep in mind that these concepts can be applied to any type of security. In fact, technical analysis is far more prevalent in commodities and forex markets where traders focus on short-term price movements.</p>
            <p>Technical indicators, also known as "technicals," are focused on historical trading data, such as price, volume, and open interest, rather than the fundamentals of a business, like earnings, revenue, or profit margins. Technical indicators are commonly used by active traders, since they're designed to analyze short-term price movements, but long-term investors may also use technical indicators to identify entry and exit points.</p>
            <h5>Types of Indicators</h5>
            <ol>
                <li><b>Overlays</b></li>
                Technical indicators that use the same scale as prices are plotted over the top of the prices on a stock chart. Examples include moving averages and Bollinger Bands.
                <li><b>Oscillators</b></li>
                Technical indicators that oscillate between a local minimum and maximum are plotted above or below a price chart. Examples include the stochastic oscillator, MACD or RSI.
            </ol>
            <p>Traders often use many different technical indicators when analyzing a security. With thousands of different options, traders must choose the indicators that work best for them and familiarize themselves with how they work. Traders may also combine technical indicators with more subjective forms of technical analysis, such as looking at chart patterns, to come up with trade ideas. Technical indicators can also be incorporated into automated trading systems given their quantitative nature.</p>
            <p>*Adapted from <b>CHEN, J. (2021). Technical Indicator. https://www.investopedia.com/terms/t/technicalindicator.asp</b></p>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop