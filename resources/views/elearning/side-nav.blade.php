<div class="col-md-6 col-xl-2 offset-xl-0 sidenav">
    <div>
        <form method="post" id="searchForm" action="{!! route('learning-search') !!}">
            {{ method_field('POST') }}
            {{ csrf_field() }}
            <input type="text" id="search-text" name="search" class="form-control col-md-15" placeholder="Search">
            <a class="search-btn"><i class="fas fa-search" onclick="document.getElementById('searchForm').submit();"></i></a>
        </form>
    </div>
    <div class="sidenav-menu">
        <a class="dropdown-btn" href="#">Forex Introduction <i class="fas fa-plus"></i></a>
            <div class="dropdown-container">
            <a href="{{route('learning-intro')}}">Introduction to Forex Market</a>
            <a href="{{route('learning-trader')}}">Forex Trader Types</a>
            <a href="{{route('learning-stock')}}">Forex Vs Stock</a>
            <a href="{{route('learning-benefit')}}">Forex Benefits</a>
            </div>
        <a class="dropdown-btn" href="#">FOREX Knowledge<i class="fas fa-plus"></i></a>
            <div class="dropdown-container">
                <a href="{{route('learning-currency')}}">Currency Pair</a>
                <a href="{{route('learning-leverage')}}">Leverage & Margin</a>
                <a href="{{route('learning-quote')}}">Quotes</a>
                <a href="{{route('learning-pips')}}">Pips</a>
                <a href="{{route('learning-spread')}}">Spread</a>
                <a href="{{route('learning-liquidity')}}">Liquidity</a>
                <a href="{{route('learning-session')}}">Trading Session</a>
                <a href="{{route('learning-chart')}}">Chart Types</a>
                <a href="{{route('learning-trade')}}">How To Trade</a>
                <a href="{{route('learning-mistake')}}">Common Trading Mistakes</a>
            </div>
        <a class="dropdown-btn" href="#">FOREX Order<i class="fas fa-plus"></i></a>
            <div class="dropdown-container">
                <a href="{{route('learning-long-short')}}">Long Position vs Short Position</a>
                <a href="{{route('learning-bullish-bearish')}}">Bearish & Bullish</a>
                <a href="{{route('learning-types')}}">Order Types</a>
            </div>
        <a class="dropdown-btn" href="#">Candlestick Patterns<i class="fas fa-plus"></i></a>
            <div class="dropdown-container">
                <a href="{{route('learning-candlestick')}}">Candlestick Introduction</a>
                <a href="{{route('learning-bearish-engulfing')}}">Bearish Engulfing</a>
                <a href="{{route('learning-bullish-engulfing')}}">Bullish Engulfing</a>
                <a href="{{route('learning-evening-star')}}">Evening Star</a>      
                <a href="{{route('learning-morning-star')}}">Morning Star</a>
                <a href="{{route('learning-doji')}}">Doji</a>
                <a href="{{route('learning-hammer')}}">Hammer</a>
                <a href="{{route('learning-spinning-top')}}">Spinning Top</a>
                <a href="{{route('learning-three-white-soldiers')}}">Three White Soldiers</a>
                <a href="{{route('learning-three-black-crows')}}">Three Black Crows</a>
            </div>
        <a class="dropdown-btn" href="#">Chart Patterns<i class="fas fa-plus"></i></a>
            <div class="dropdown-container">
                <a href="{{route('learning-chart-intro')}}">Chart Patterns Introduction</a>
                <a href="{{route('learning-cup-and-handle')}}">Cup And Handle</a>
                <a href="{{route('learning-double-top-bottom')}}">Double Top & Double Bottom</a>
                <a href="{{route('learning-flags-pennants')}}">Flags & Pennants</a>
                <a href="{{route('learning-head-and-shoulders')}}">Head And Shoulders</a>
                <a href="{{route('learning-round-bottom')}}">Round Bottoms</a>
                <a href="{{route('learning-wedge')}}">The Wedge</a>
                <a href="{{route('learning-triangle')}}">Triangle</a>
                <a href="{{route('learning-triple-top-bottom')}}">Triple Top & Triple Bottom</a>
            </div>
        <a class="dropdown-btn" href="#">Fundamental Analysis<i class="fas fa-plus"></i></a>
            <div class="dropdown-container">
                <a href="{{route('learning-fundamental')}}">Fundamental Analysis Introduction</a>
            </div>
        <a class="dropdown-btn" href="#">Technical Analysis<i class="fas fa-plus"></i></a>
            <div class="dropdown-container">
                <a href="{{route('learning-technical-intro')}}">Technical Analysis Introduction</a>
                <a href="{{route('learning-breakout')}}">Breakout</a>
                <a href="{{route('learning-gaps')}}">Gaps</a>
                <a href="{{route('learning-slippage')}}">Slippage</a>
                <a href="{{route('learning-support-resistance')}}">Support & Resistance</a>
                <a href="{{route('learning-trend')}}">Trend</a>
                <a href="{{route('learning-volume')}}">Volumes</a>
            </div>
        <a class="dropdown-btn" href="#">Technical Indicators<i class="fas fa-plus"></i></a>
            <div class="dropdown-container">
                <a href="{{route('learning-indicator-intro')}}">Technical Indicator Introduction</a>
                <a href="{{route('learning-adl')}}">Accumulation Distribution Line</a>
                <a href="{{route('learning-aroon')}}">Aroon</a>
                <a href="{{route('learning-atr')}}">Average True Range</a>
                <a href="{{route('learning-bollinger')}}">Bollinger Band</a>
                <a href="{{route('learning-cci')}}">Commodity Channel Index</a>
                <a href="{{route('learning-dmi')}}">Directional Movement Index</a>
                <a href="{{route('learning-macd')}}">MACD</a>
                <a href="{{route('learning-momentum')}}">Momentum</a>
                <a href="{{route('learning-mfi')}}">Money Flow Index</a>
                <a href="{{route('learning-ma')}}">Moving Average</a>
                <a href="{{route('learning-obv')}}">On-Balance Volume</a>
                <a href="{{route('learning-psar')}}">Parabolic SAR</a>
                <a href="{{route('learning-roc')}}">Rate Of Change</a>
                <a href="{{route('learning-rsi')}}">Relative Strength Index</a>
                <a href="{{route('learning-stochastic')}}">Stochastic Oscillator</a>
                <a href="{{route('learning-william')}}">William %R</a>
            </div>
    </div>
</div>