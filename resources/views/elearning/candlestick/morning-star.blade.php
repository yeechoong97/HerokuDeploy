@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1280px;">
            <div class="sidenav-content-details">
            <h3 id="learning-title">Morning Star</h3>
            <p>A morning star is a visual pattern consisting of three candlesticks that is interpreted as a bullish sign by technical analysts. A morning star forms following a downward trend and it indicates the start of an upward climb. It is a sign of a reversal in the previous price trend. Traders watch for the formation of a morning star and then seek confirmation that a reversal is indeed occurring using additional indicators.</p>
            <h5>What Does a Morning Star Tell You?</h5>
            <p>A morning star is a visual pattern, so there are no particular calculations to perform. A morning star forms after three sessions or it doesn't. However, there are other technical indicators that can help predict if a morning star is forming, such as whether the price action is nearing a support zone or whether or not the relative strength indicator (RSI) is showing that the stock or commodity is oversold.</p>
            <img src ="{{asset('pictures/MorningStar.png')}}" class="img-padding" >
            <p>The important thing to note about the morning star is that the middle candle can be red or green as the buyers and sellers start to balance out over the session.</p>
            <h5>An Example of How to Trade a Morning Star</h5>
            <p>Morning star patterns can be used as a visual sign for the start of a trend reversal from bearish to bullish, but they become more important when other technical indicators back them up as previously mentioned. Another important factor is the volume that is contributing to the pattern formation. Generally a trader wants to see volume increasing throughout the three sessions making up the pattern, with the third day seeing the most volume. High volume on the third day is often seen as a confirmation of the pattern (and a subsequent uptrend) regardless of other indicators. A trader will take up a bullish position in the stock/commodity/pair/etc. as the morning star forms in the third session and ride the uptrend until there are indications of another reversal.</p>
            <p>*Adapted from <b>Chen, J. (2020b). Morning Star Definition. https://www.investopedia.com/terms/m/morningstar.asp</b></p>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop