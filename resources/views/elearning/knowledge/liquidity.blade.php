@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1300px;">
            <div class="sidenav-content-details">
            <h3 id="learning-title">Liquidity</h3>
            <img src ="{{asset('pictures/Liquidity.jpg')}}" class="img-padding" >
            <h5>What is Liquidity</h5>
            <p>Liquidity refers to how active a market is. It is determined by how many traders are actively trading and the total volume they’re trading. One reason the foreign exchange market is so liquid is because it is tradable 24 hours a day during weekdays. It is also a very deep market, with nearly $6 trillion turnover each day. Although liquidity fluctuates as financial centres around the world open and close throughout the day, there are usually relatively high volumes of forex trading going on all the time.</p>
            <h5>What Is Volatility</h5>
            <p>Volatility is the measure of how drastically a market’s prices change. A market’s liquidity has a big impact on how volatile the market’s prices are. Lower liquidity usually results in a more volatile market and cause prices to change drastically; higher liquidity usually creates a less volatile market in which prices don’t fluctuate as drastically.</p>
            <p>Liquid markets such as forex tend to move in smaller increments because their high liquidity results in lower volatility. More traders trading at the same time usually results in the price making small movements up and down. However, drastic and sudden movements are also possible in the forex market. Since currencies are affected by so many political, economical, and social events, there are many occurrences that cause prices to become volatile. Traders should be mindful of current events and keep up on financial news in order to find potential profit and to better avoid potential loss.</p>
            <p>*Adapted from <b>Forex.com. (2021a). Forex Liquidity And Volatility. https://www.forex.com/en/education/education-themes/trading-concepts/forex-liquidity-and-volatility/</b></p>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop