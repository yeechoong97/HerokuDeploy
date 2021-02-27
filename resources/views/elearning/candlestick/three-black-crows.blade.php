@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1500px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Three Black Crows</h3>
                <p>Three black crows is a phrase used to describe a bearish candlestick pattern that may predict the reversal of an uptrend. Candlestick charts show the day's opening, high, low, and closing prices for a particular security. For stocks moving higher the candlestick is white or green. When moving lower, they are black or red.</p>
                <p>The black crow pattern consists of three consecutive long-bodied candlesticks that have opened within the real body of the previous candle and closed lower than the previous candle. Often, traders use this indicator in conjunction with other technical indicators or chart patterns as confirmation of a reversal.</p>
                <h5>Three Black Crows Explained</h5>
                <p>Three black crows are a visual pattern, meaning that there are no particular calculations to worry about when identifying this indicator. The three black crows pattern occurs when bears overtake the bulls during three consecutive trading sessions. The pattern shows on the pricing charts as three bearish long-bodied candlesticks with short or no shadows or wicks.</p>
                <p>In a typical appearance of three black crows, the bulls will start the session with the price opening modestly higher than the previous close, but the price is pushed lower throughout the session. In the end, the price will close near the session low under pressure from the bears. This trading action will result in a very short or nonexistent shadow. Traders often interpret this downward pressure sustained over three sessions to be the start of a bearish downtrend.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612766063/E-Learning/ThreeBlackCrows.png" class="img-padding" >
                <h5>Example of How to Use Three Black Crows</h5>
                <p>As a visual pattern, it's best to use three black crows as a sign to seek confirmation from other technical indicators. The three black crows pattern and the confidence a trader can put into it depends a lot on how well-formed the pattern appears. The three black crows should ideally be relatively long-bodied bearish candlesticks that close at or near the low price for the period. In other words, the candlesticks should have long, real bodies and short, or nonexistent, shadows. If the shadows are stretching out, then it may simply indicate a minor shift in momentum between the bulls and bears before the uptrend reasserting itself.</p>
                <p>Volume can make the three black crows pattern more accurate. Volume during the uptrend leading up to the pattern is relatively low, and the three-day, black crow pattern comes with relatively high volume during the sessions. In this scenario, the uptrend was established by a small group of bulls and then reversed by a larger group of bears.</p>
                <p>Of course, with markets being what they are that could also mean a large number of small bullish traders running into a smaller group of large volume bearish trades. The actual number of market participants matters less than the volume each is bringing to the table.</p>
                <p class="citation blockquote-footer">Adapted from <cite>Majaski, C. (2021). Three Black Crows. https://www.investopedia.com/terms/t/three_black_crows.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop