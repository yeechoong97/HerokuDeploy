@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2200px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Momentum</h3>
                <p>Momentum is the speed or velocity of price changes in a stock, security, or tradable instrument. Momentum shows the rate of change in price movement over a period of time to help investors determine the strength of a trend. Stocks that tend to move with the strength of momentum are called momentum stocks.</p>
                <p>Momentum is used by investors to trade stocks in an uptrend by going long (or buying shares) and going short (or selling shares) in a downtrend. In other words, a stock can be exhibit bullish momentum, meaning the price is rising, or bearish momentum where the price is steadily falling.</p>
                <p>Since momentum can be quite powerful and indicate a strong trend, investors need to recognize when they're investing with or against the momentum of a stock or the overall market.</p>
                <h5>Understanding Momentum</h5>
                <p>Momentum measures the rate of the rise or fall in stock prices. For trending analysis, momentum is a useful indicator of strength or weakness in the issue's price. History has shown that momentum is far more useful during rising markets than falling markets because markets rise more often than they fall. In other words, bull markets tend to last longer than bear markets.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768453/E-Learning/Momentum.png" class="img-padding" >
                <p>Momentum is analogous to a train whereby the train slowly accelerates when it starts moving, but during the ride, the train stops accelerating. However, the train moves but at a higher velocity because all of the momentum built up from accelerating is propelling it forward. At the end of the ride, the train decelerates as it slows down.</p>
                <p>In the markets, some investors might get in and buy a stock early while the price is beginning to accelerate higher, but once the fundamentals kick in and it's clear to market participants that the stock has upward potential, the price takes off. For momentum investors, the most profitable part of the ride is when prices are moving at a high velocity.</p>
                <p>Of course, once the revenue and earnings are realized, the market usually adjusts its expectations and the price retraces or comes back down to reflect the financial performance of the company.</p>
                <h5>Calculating Momentum</h5>
                <p>There are many charting software programs and investing websites that can measure momentum for a stock so that investors don't have to calculate it anymore. However, it's important to understand what goes into those calculations to better understand what variables are used in determining a stock's momentum or trend.</p>
                <p><b>The formula for momentum is: </b></p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768453/E-Learning/MomentumFormula.png" class="img-padding" >
                <h5>Special Considerations</h5>
                <p>When the momentum indicator slides below the zero line and then reverses in an upward direction, it doesn't necessarily mean that the downtrend is over. It merely means that the downtrend is slowing down. The same is true for the plotted momentum above the zero line. It may take a few moves above or below the zero line before a trend is established.</p>
                <p>It's important to note that many factors drive momentum. Economic growth in the economy, earnings reports, and the Federal Reserve's monetary policy all impact companies and whether their stock prices rise or fall.</p>
                <p>In other words, momentum isn't a predictor of price movement, but instead, reflective of the overall mood and fundamentals of the market. Also, geopolitical and geofinancial risks can drive momentum and money into-or-away from stocks. Although it's helpful for investors to understand the market's momentum, it's also important to know what factors are driving momentum and ultimately price movements.</p>
                <p class="citation">*Adapted from <cite>Investopedia.com. (2021). Momentum Indicates Stock Price Strength. https://www.investopedia.com/articles/technical/081501.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop