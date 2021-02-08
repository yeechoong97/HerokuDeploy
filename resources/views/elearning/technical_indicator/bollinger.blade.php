@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2700px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Bollinger Band</h3>
                <p>A Bollinger Band is a technical analysis tool defined by a set of trendlines plotted two standard deviations (positively and negatively) away from a simple moving average (SMA) of a security's price, but which can be adjusted to user preferences.</p>
                <p>Bollinger Bands were developed and copyrighted by famous technical trader John Bollinger, designed to discover opportunities that give investors a higher probability of properly identifying when an asset is oversold or overbought.</p>
                <h5>How To Calculate Bollinger Bands</h5>
                <p>The first step in calculating Bollinger Bands is to compute the simple moving average of the security in question, typically using a 20-day SMA. A 20-day moving average would average out the closing prices for the first 20 days as the first data point. The next data point would drop the earliest price, add the price on day 21 and take the average, and so on. Next, the standard deviation of the security's price will be obtained. Standard deviation is a mathematical measurement of average variance and features prominently in statistics, economics, accounting and finance.</p>
                <p>For a given data set, the standard deviation measures how spread out numbers are from an average value. Standard deviation can be calculated by taking the square root of the variance, which itself is the average of the squared differences of the mean. Next, multiply that standard deviation value by two and both add and subtract that amount from each point along the SMA. Those produce the upper and lower bands.</p>
                <p><b>Here is this Bollinger Band formula:</b></p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768631/E-Learning/BollingerFormula.png" class="img-padding" >
                <h5>What Do Bollinger Bands Tell You?</h5>
                <p>Bollinger Bands are a highly popular technique. Many traders believe the closer the prices move to the upper band, the more overbought the market, and the closer the prices move to the lower band, the more oversold the market. John Bollinger has a set of 22 rules to follow when using the bands as a trading system.</p>
                <p>In the chart depicted below, Bollinger Bands bracket the 20-day SMA of the stock with an upper and lower band along with the daily movements of the forex's price. Because standard deviation is a measure of volatility, when the markets become more volatile the bands widen; during less volatile periods, the bands contract.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768631/E-Learning/Bollinger.png" class="img-padding" >
                <h5>The Squeeze</h5>
                <p>The squeeze is the central concept of Bollinger Bands. When the bands come close together, constricting the moving average, it is called a squeeze. A squeeze signals a period of low volatility and is considered by traders to be a potential sign of future increased volatility and possible trading opportunities. Conversely, the wider apart the bands move, the more likely the chance of a decrease in volatility and the greater the possibility of exiting a trade. However, these conditions are not trading signals. The bands give no indication when the change may take place or which direction price could move.</p>
                <h5>Breakouts</h5>
                <p>Approximately 90% of price action occurs between the two bands. Any breakout above or below the bands is a major event. The breakout is not a trading signal. The mistake most people make is believing that that price hitting or exceeding one of the bands is a signal to buy or sell. Breakouts provide no clue as to the direction and extent of future price movement.</p>
                <h5>Limitations of Bollinger Bands</h5>
                <p>Bollinger Bands are not a standalone trading system. They are simply one indicator designed to provide traders with information regarding price volatility. John Bollinger suggests using them with two or three other non-correlated indicators that provide more direct market signals. He believes it is crucial to use indicators based on different types of data. Some of his favored technical techniques are moving average divergence/convergence (MACD), on-balance volume and relative strength index (RSI).</p>
                <p>Because they are computed from a simple moving average, they weight older price data the same as the most recent, meaning that new information may be diluted by outdated data. Also, the use of 20-day SMA and 2 standard deviations is a bit arbitrary and may not work for everyone in every situation. Traders should adjust their SMA and standard deviation assumptions accordingly and monitor them.</p>
                <p class="citation">*Adapted from <cite>Hayes, A. (2020a). Bollinger Band® Definition. https://www.investopedia.com/terms/b/bollingerbands.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop