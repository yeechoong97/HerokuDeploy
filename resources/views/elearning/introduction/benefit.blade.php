@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1700px;">
          <div class="sidenav-content-details">
            <h3 id="learning-title">Forex Benefits</h3>
            <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612761634/E-Learning/Benefits.jpg" class="img-padding" alt="forex-benefits">
            <div class="img-citation">Image retrieved from <cite>Iboi, G. (2021). What is Forex Trading – Quick Guide to Become a Pro. https://businessfinger.com/what-is-forex-trading-quick-guide-to-become-a-pro/</cite></div>
            <h5>Benefits of Trading Forex</h5>
            <p>There are many benefits and advantages to trading Forex. Here are just a few reasons why so many people are choosing this market as a business opportunity:</p>
              <ol>
                <li><strong>Leverage</strong></li>
                  In Forex trading, a small margin deposit can control a much larger total contract value. Leverage gives the trader the ability to make extraordinary profits and at the same time keep risk capital to a minimum. Some Forex firms offer 200 to 1 leverage, which means that a $50 dollar margin deposit would enable a trader to buy or sell $10,000 worth of currencies. Similarly, with $500 dollars, one could trade with $100,000 dollars and so on.
                <li><strong>Liquidity</strong></li>
                  Because the Forex Market is so large, it is also extremely liquid. This means that with a click of a mouse you can instantaneously buy and sell at will. You are never 'stuck' in a trade. You can even set the online trading platform to automatically close your position at your desired profit level (limit order), and/or close a trade if a trade is going against you (stop order).
                <li><strong>Profit in Both "Rising" and "Falling" Markets</strong></li>
                  On the stock markets, you can only make money if shares are rising, but in economic recession and falling 'bear' markets, there is little chance of making big money. Forex is different. One of the most exciting advantages of FX trading is the ability to generate profits whether a currency pair is 'up' or 'down'. A trader can profit by taking a 'long' position, (buying the currency pair at one price and selling it later at a higher price), or a 'short' position, (selling the currency pair and buying it back at a lower price).
                <br><br>
                  For example, if you think the US dollar will increase in value vs. the Japanese Yen then you will buy Dollars and sell Yen (go long). If you think the Yen will increase in value against the Dollar then you will sell Dollars and buy yen (go short). As long as the trader picks the right direction, a potential for profit always exists.
                <li><strong>24 Hours</strong></li>
                  From Sunday evening to Friday Afternoon EST the Forex market never sleeps. This is very desirable for those who want to trade on a part-time basis, because you can choose when you want to trade--morning, noon or night.
                <li><strong>Free "Demo" Accounts, News, Charts and Analysis</strong></li>
                  Most Online Forex firms offer free 'Demo' accounts to practice trading, along with breaking Forex news and charting services. These are very valuable resources for traders who would like to hone their trading skills with 'virtual' money before opening a live trading account.
                <li><strong>"Mini" Trading</strong></li>
                  One might think that getting started as a currency trader would cost a lot of money. The fact is, it doesn't. Online Forex Firms now offer 'mini' trading accounts with a minimum account deposit of only $200-$500 with no commission trading. This makes Forex much more accessible to the average individual, without large, start-up capital.
              </ol>
            <p class="citatio blockquote-footer">Adapted from <cite>Bortucene, E., & Macy, C. (2003). The Day Trade Forex System : The ULTIMATE Step-By-Step Guide to Online The Day Trade Forex System : The ULTIMATE Step-By-Step Guide to Online Currency Trading. In New York.</cite></p>
          </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop