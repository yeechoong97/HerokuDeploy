@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1300px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Hammer</h3>
                <p>A hammer is a price pattern in candlestick charting that occurs when a security trades significantly lower than its opening, but rallies within the period to close near opening price. This pattern forms a hammer-shaped candlestick, in which the lower shadow is at least twice the size of the real body. The body of the candlestick represents the difference between the open and closing prices, while the shadow shows the high and low prices for the period.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612765570/E-Learning/Hammer.png" class="img-padding" alt="hammer" >
                <h5>What Does the Hammer Tell You</h5>
                <p>A hammer occurs after a security has been declining, suggesting the market is attempting to determine a bottom.</p>
                <p>Hammers signal a potential capitulation by sellers to form a bottom, accompanied by a price rise to indicate a potential reversal in price direction. This happens all during the one period, where the price falls after the open but then regroups to close near the open.</p>
                <p>Hammers are most effective when they are preceded by at least three or more declining candles. A declining candle is one which closes lower than the close of the candle before it.</p>
                <p>A hammer should look similar to a "T". This indicates the potential for a hammer candle. A hammer candlestick does not indicate a price reversal to the upside until it is confirmed.</p>
                <p>Confirmation occurs if the candle following the hammer closes above the closing price of the hammer. Ideally, this confirmation candle shows strong buying. Candlestick traders will typically look to enter long positions or exit short positions during or after the confirmation candle. For those taking new long positions, a stop loss can be placed below the low of the hammer's shadow.</p>
                <p>Hammers aren't usually used in isolation, even with confirmation. Traders typically utilize price or trend analysis, or technical indicators to further confirm candlestick patterns. Hammers occur on all time frames, including one-minute charts, daily charts, and weekly charts.</p>
                <p class="citation blockquote-footer">Adapted from <cite>Mitchell, C. (2020). Hammer Candlestick. https://www.investopedia.com/terms/h/hammer.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop