@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1200px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Candlestick Introduction</h3>
                <p>Candlestick charts are a type of financial chart for tracking the movement of securities. They have their origins in the centuries-old Japanese rice trade and have made their way into modern day price charting. Some investors find them more visually appealing than the standard bar charts and the price actions easier to interpret.</p>
                <p>Candlesticks are so named because the rectangular shape and lines on either end resemble a candle with wicks. Each candlestick usually represents one day’s worth of price data about a stock. Over time, the candlesticks group into recognizable patterns that investors can use to make buying and selling decisions.</p>
                <h5>How to Read A Single Candlestick</h5>
                <p>Each candlestick represents one day’s worth of price data about a stock through four pieces of information: the opening price, the closing price, the high price, and the low price. The color of the central rectangle (called the real body) tells investors whether the opening price or the closing price was higher. A black or filled candlestick means the closing price for the period was less than the opening price; hence, it is bearish and indicates selling pressure. Meanwhile, a white or hollow candlestick means that the closing price was greater than the opening price. This is bullish and shows buying pressure. The lines at both ends of a candlestick are called shadows, and they show the entire range of price action for the day, from low to high. The upper shadow shows the stock’s highest price for the day, and the lower shadow shows the lowest price for the day.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612763509/E-Learning/CandlestickCandle.png" class="img-padding" >
                <p class="citation blockquote-footer">Adapted from <cite>Galstyan, M. (2021). Using Bullish Candlestick Patterns To Buy Stocks. https://www.investopedia.com/articles/active-trading/062315/using-bullish-candlestick-patterns-buy-stocks.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop