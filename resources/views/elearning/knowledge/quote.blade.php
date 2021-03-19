@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2700px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Quotes</h3>
                <h5>What are Forex Quotes</h5>
                <p>Forex quotes reflect the price of different currencies at any point in time. Since a trader’s profit or loss is determined by movements in price (the quote), it is essential to develop a sound understanding of how to read currency pairs.</p>
                <p>A forex quote is the price of one currency in terms of another currency. These quotes always involve currency pairs because you are buying one currency by selling another. For example, the price of one Euro may cost $1.20732 when viewing the EUR/USD currency pair. Brokers will typically quote two prices for any currency pair and receive the difference (spread) between the two prices, under normal market conditions.</p>
                <p>The following sections will expand on the different aspects of a forex quote. The same quote will be used throughout this piece to keep the numbers consistent. This example is presented below:</p>
                <h6><strong>Example of EUR/USD Forex Quote</strong></h6>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612762811/E-Learning/Quote.png" class="img-padding" alt="quotes">
                <h5>Understanding Forex Quote Basics</h5>
                <p>In order to read currency pairs correctly, traders should be aware of the following fundamentals of a forex quote:</p>
                <ul>
                    <li><strong>ISO code</strong></li>
                    The International Organization for Standardization (ISO) develop and publish international standards and have applied this to global currencies. This means each country’s currency is abbreviated to three letters. For example, the Euro is shortened to EUR and the US dollar to USD.
                    <li><strong>Base currency and variable currency</strong></li>
                    Forex quotes show two currencies, the base currency, which appears first and the quote or variable currency, which appears last. The price of the first currency is always reflected in units of the second currency. Sticking with the earlier EUR/USD example, it is clear to see that one Euro will cost one dollar, 20 cents and 71 pips. This is unusual as you cannot physically hold fractions of one cent but this is a common feature of the foreign exchange market.
                </ul>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612762838/E-Learning/QuoteCurrency.png" class="img-padding" alt="quote-currency">
                <h5>Bid And Ask Price</h5>
                <p>When trading forex, a currency pair will always quote two different prices as shown below:</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612762875/E-Learning/Bid_Ask.png" class="img-padding" alt="bid-ask">
                <p>The bid (SELL) price is the price that traders can sell currency at, and the ask (BUY) price is the price that traders can buy currency at. This may seem confusing as it is only natural to think of “bid” in terms of buying so just remember the bid/ask terminology is from the broker’s perspective.</p>
                <p>Traders will always be looking to buy forex when the price is low and sell when the price rises; or sell forex in anticipation that the currency will depreciate and buy it back at a lower price in the future.</p>
                <h5>Spreads</h5>
                <p>The price to buy a currency will typically be more than the price to sell the currency. This difference is called the spread and is where the broker earns money for executing the trade. Spreads tend to be tighter (less) for major currency pairs due to their high trading volume and liquidity. The EUR/USD is the most widely traded currency pair, so it is no surprise that the spread in this example is 1.4 pips.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612762909/E-Learning/Pips.png" class="img-padding" alt="pips">
                <h5>Direct Vs Indirect Quotes</h5>
                <p>Quotes are often displayed in accordance with the “home currency” in mind i.e. the country you reside in. A direct quote for traders in the US, looking to buy Euros, will read EUR/USD and will be relevant to US citizens as the quote is in USD. This direct quote will provide US citizens with the price of one Euro, in terms of their home currency which is 1.20732.</p>
                <p>The indirect quote is essentially the inverse of the direct currency (1/direct quote = 0.8282). It shows the value of one unit of domestic currency in terms of foreign currency. Indirect quotes can be useful to convert foreign currency purchases abroad into domestic currency.</p>
                <p class="citation blockquote-footer">Adapted from <cite>Snow, R. (2019). How to Read Currency Pairs: Forex Quotes Explained. https://www.dailyfx.com/education/beginner/how-to-read-currency-pairs.html</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop