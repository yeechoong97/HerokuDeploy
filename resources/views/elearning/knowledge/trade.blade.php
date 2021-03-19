@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2400px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">How To Trade</h3>
                <p>Now that you know a little more about forex, we’ll take a closer look at how to make your first trade. Before you trade you need to follow a few steps.</p>
                <ol>
                    <li><strong>Select a currency pair</strong></li>
                    When trading forex you are exchanging the value of one currency for another. In other words, you will always buy one currency while selling another at the same time. Because of this, you will always trade currencies in a pair.<br><br>
                    Most new traders will start out by trading the most commonly offered pairs of major currencies, but you can trade any currency pair that we have available as long as you have enough money in your account. For this walkthrough, we’ll look at EUR/USD (Euro/ U.S. Dollar).
                    <li><strong>Analyze the market</strong></li>
                    Research and analysis should be the foundation of your trading endeavors. Without these, you’re operating on emotion. This doesn’t typically end well.<br><br>
                    When you first start researching, you’ll find a whole wealth of forex resources – which may seem overwhelming at first. But as you research a particular currency pair, you’ll find valuable resources that stand out from the rest. You should regularly look at current and historical charts, monitor the news for economic announcements, check indicators and perform other technical and fundamental analysis. We’ll talk more about specific types of research later on.
                    <li><strong>Read the quote</strong></li>
                    <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612763601/E-Learning/QuoteSample.png" class="img-padding" alt="quote"><br>
                    For example, a quote for EUR/USD may look like the example above. The first rate (1.20718) is the price at which you can sell the currency pair. The second rate (1.20732) is the price at which you can buy the currency pair. The difference between the first and the second rate is called the spread. This is the amount that a dealer charges for making the trade.
                    <li><strong>Pick your position</strong></li>
                    If you’ve traded stocks, bonds or other financial products, you know that you can usually only speculate on the one direction of the market: up. Forex trading is a little different. Because you are buying one currency, while selling another at the same time you can speculate on up and down movements in the market.
                    <ul>
                        <li><strong>Buy Position</strong></li>
                        You believe that the value of the base currency will rise compared to the quote currency. If you’re buying EUR/USD, you believe the price of the euro will strengthen against the dollar. In other words, you believe the euro is bullish (and the US dollar is bearish).
                        <li><strong>Sell Position</strong></li>
                        You believe that the value of the base currency will fall compared to the quote currency. If you’re selling EUR/USD, you believe the price of the euro will weaken against the dollar. In other words, you believe the euro is bearish (and the US dollar is bullish).
                    </ul>
                </ol>
                <h5>Entering a Buy Position</h5>
                <p>The current price for EUR/USD is 1.33820 / 1.33840. You believe that the Euro is bullish, so you decide to enter a buy position for one lot of the EUR/USD. Because you are buying, your trade is entered at the price of 1.33840.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612763630/E-Learning/BuyPositionSample.png" class="img-padding" alt="buy-position">
                <p>Now, let’s say that later in the day, you look at your position. The EUR/USD is now at 1.34160 / 1.34180. Your trade has gained 32 pips. You decide to close your position at the current sell price of 1.34160 and take a profit.</p>
                <h5>Entering a Sell Position</h5>
                <p>Let’s imagine that you believe that the Euro is bearish. You decide to enter a sell position for one lot of EUR/USD. Because you are selling, your trade is entered at the price of 1.33820.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612763630/E-Learning/SellPositionSample.png" class="img-padding" alt="sell-position">
                <p>You look at your position later in the day and discover that the EUR/USD is now at 1.34160/1.34180. Your trade has lost 36 pips. You decide to close your position at the current buy price of 1.34180 and accept your losses.</p>
                <p class="citation blockquote-footer">Adapted from <cite>Forex.com. (2021c). How to Trade Forex. https://www.forex.com/en/education/resources-by-level/beginner/how-to-trade-forex/</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop