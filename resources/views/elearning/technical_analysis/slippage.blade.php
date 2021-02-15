@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2200px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Slippage</h3>
                <h5>What is Slippage</h5>
                <p>Slippage can be a common occurrence in forex trading but is often misunderstood. Understanding how forex slippage occurs can enable a trader to minimize negative slippage, while potentially maximizing positive slippage. These concepts will be explored in this article to shed some light on the mechanics of slippage in forex, as well as how traders can mitigate its adverse effects.</p>
                <p>Slippage occurs when a trade order is filled at a price that is different to the requested price. This normally transpires during high periods of volatility as well as periods whereby orders cannot be matched at desired prices.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767329/E-Learning/Slippage.png" class="img-padding" >
                <div class="img-citation">Image retrieved from <cite>Forex.com. (2021e). What is Slippage? Slippage in Forex Explained. https://www.dailyfx.com/education/forex-trading-basics/what-is-slippage.html</cite></div>
                <p>Slippage in forex tends to be seen in a negative light, however this normal market occurrence can be a good thing for traders. When forex trading orders are sent out to be filled by a liquidity provider or bank, they are filled at the best available price whether the fill price is above or below the price requested.</p>
                <p>To put this concept into a numerical example, let’s say we attempt to buy the EUR/USD at the current market rate of 1.3650. When the order is filled, there are three potential outcomes: no slippage, positive slippage or negative slippage. These are explored in more depth below.</p>
                <h5>Examples of Forex Slippage</h5>
                <ul>
                    <li><b>No Slippage</b></li>
                    The order is submitted, and the best available buy price being offered is 1.3650 (exactly what we requested), the order is then filled at 1.3650.
                    <li><b>Positive Slippage</b></li>
                    The order is submitted, and the best available buy price being offered suddenly changes to 1.3640 (10 pips below our requested price), the order is then filled at this better price of 1.3640.
                    <li><b>Negative Slippage</b></li>
                    The order is submitted, and the best available buy price being offered suddenly changes to 1.3660 (10 pips above our requested price), the order is then filled at this price of 1.3660.
                </ul>
                <p>Anytime we are filled at a price different to the price requested on the deal ticket, it is called slippage.</p>
                <h5>Slippage Cause and How to Avoid</h5>
                <p>So how does forex slippage occur, and why can’t our orders be filled at our requested price? It all goes back to the basics of what a true market consists of: buyers and sellers. For every buyer with a specific price and trade size, there must be an equal number of sellers at the same price and trade size. If there is ever an imbalance of buyers or sellers, this is what causes prices to move up or down.</p>
                <p>So as forex traders, if we go in and attempt to buy 100k EUR/USD at 1.3650, but there are not enough people (or no one at all) willing to sell their Euros for 1.3650 USD, our order will need to look at the next best available price(s) and buy those Euros at a higher price, giving us negative slippage.</p>
                <p>If there were a flood of people wanting to sell their Euros at the time our order was submitted, we might be able to find a seller willing to sell them at a price lower than what we had initially requested, giving us positive slippage.</p>
                <p>Forex slippage can also occur on normal stop losses whereby the stop loss level cannot be honored. There are however “guaranteed stop losses” which differ from normal stop losses. Guaranteed stop losses will be honored at the specified level and filled by the broker no matter what the circumstances in the underlying market. Essentially, the broker will take on any loss that may have resulted from slippage. This being said, guaranteed stops generally come with a premium charge if they are triggered.</p>
                <p class="citation">*Adapted from <cite>Forex.com. (2021e). What is Slippage? Slippage in Forex Explained. https://www.dailyfx.com/education/forex-trading-basics/what-is-slippage.html</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop