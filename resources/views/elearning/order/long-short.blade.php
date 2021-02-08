@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 3000px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Long Position vs Short Position</h3>
                <p>Understanding the basics of going long or short in forex is fundamental for all beginner traders. Taking a long or short position comes down to whether a trader thinks a currency will appreciate (go up) or depreciate (go down), relative to another currency. Simply put, when a trader thinks a currency will appreciate they will “Go Long” the underlying currency, and when the trader expects the currency to depreciate they will “Go Short” the underlying currency.</p>
                <h5>What is a Position in Forex Trading</h5>
                <p>A forex position is the amount of a currency which is owned by an individual or entity who then has exposure to the movements of the currency against other currencies. The position can be either short or long. A forex position has three characteristics:</p>
                <ol>
                    <li><b>The underlying currency pair</b></li>
                    <li><b>The direction (long or short)</b></li>
                    <li><b>The size</b></li>
                </ol>
                <p>Traders can take positions in different currency pairs. If they expect the price of the currency to appreciate, they could go long. The size of the position they take would depend on their account equity and margin requirements. It is important that traders use the appropriate amount of leverage.</p>
                <h5>What Does It Mean to Have A Long or Short Position in Forex?</h5>
                <p>Having a long or short position in forex means betting on a currency pair to either go up or go down in value. Going long or short is the most elemental aspect of engaging with the markets. When a trader goes long, he or she will have a positive investment balance in an asset, with the hope the asset will appreciate. When short, he or she will have a negative investment balance, with the hope the asset will depreciate so it can be bought back at a lower price in the future.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612764983/E-Learning/LongVsShort.jpg" class="img-padding" >
                <h5>What is a Long Position and When to Trade It?</h5>
                <p>A long position is an executed trade where the trader expects the underlying instrument to appreciate. For example, when a trader executes a buy order, they hold a long position in the underlying instrument they bought i.e. USD/JPY. Here they are expecting the US Dollar to appreciate against the Japanese Yen.</p>
                <p>For example, a trader who has bought two lots of USD/JPY has a long position of two lots in USD/JPY. The underlying is the USD/JPY, the direction is long, and the size is two lots. Traders look for buy-signals to enter long positions. Indicators are used by traders to look for buy and sell signals to enter the market.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612764983/E-Learning/Long.png" class="img-padding" >
                <p>An example of a buy signal is when a currency falls to a level of support. In the chart below USD/JPY depreciates to 110.274 but is supported at that level multiple times. This level of 110.274 becomes a support level and offers traders a buy-signal for when the price dips to that level.</p>
                <h5>What is Short Position and When to Trade It?</h5>
                <p>A short position is essentially the opposite of a long position. When traders enter a short position, they expect the price of the underlying currency to depreciate (go down). To short a currency means to sell the underlying currency in the hope that its price will go down in the future, allowing the trader to buy the same currency back at a later date but at a lower price. The difference between the higher selling price and the lower buying price is profit. To provide a practical example, if a trader shorts USD/JPY, they are selling USD to buy JPY.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612764983/E-Learning/Short.png" class="img-padding" >
                <p>Traders look for sell-signals to enter short positions. A common sell-signal is when the price of the underlying currency reaches for level of resistance. A level of resistance is a price level that the underlying has struggled to break above. In the chart below USD/JPY appreciates to 114.486 and struggles to appreciate further. This level becomes a resistance level and offers traders a sell-signal when the price reaches for 114.486.</p>
                <p class="citation">*Adapted from <cite>Bradfield, D. (2019). Long vs Short Positions in Forex Trading. https://www.dailyfx.com/education/beginner/long-vs-short-positions-in-forex-trading.html</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop