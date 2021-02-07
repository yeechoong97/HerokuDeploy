@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2200px;">
            <div class="sidenav-content-details">
            <h3 id="learning-title">Order Types</h3>
            <img src ="{{asset('pictures/EntryOrder.jpg')}}" class="img-padding" >
            <p>There are many different types of forex orders, which traders use to manage their trades. While these may vary between different brokers, there tends to be several basic FX order types all brokers accept. Knowing what these are and having a firm understanding can help traders to enter and exit the market appropriately. Order types allow for bespoke trading styles that can provide equanimity for the trader. This article will discuss the main forex orders and how they can be utilized on a live trade.</p>
            <h5>Market Orders</h5>
            <p>The market order is probably the most basic and often the first FX order type traders come across. Just as the name implies, market orders are traded at market. This means if you want to get into the forex market immediately, you can trade a market order and be entered at the prevailing price. Typically, scalpers and day traders rely on market orders to enter and exit the market quickly, in accordance to their strategy.</p>
            <h5>Entry Orders</h5>
            <p>The next most common FX order type is the entry order. These orders are unique in that they can be set away from present market prices. If price trades at the pre-selected price, the criteria for the entry order will be met and a new position will be created. There are many benefits to trading with entries, including not having to be in front of your computer to execute your trades! See more on how to be a part time trader. Normally entry orders can be used for breakouts or with other strategies that demand execution when price passes a certain point.</p>
            <h5>Limit Orders</h5>
            <p>There are two types of limit orders involved in forex trading</p>
            <ol>
                <li><b>Limit order to open a trade</b></li>
                The first is a limit entry order to get a better entry price. If the EUR/USD is trading at 1.1294 and you thought it would trade down to 1.1200 before rallying, you would place your limit order to buy at 1.1200.<br><br>
                If the EUR/USD is trading at the 1.12939 level and you thought it would rally up to 1.1300 before selling off, you would place your limit order to sell 1.1300. When using a limit order, you will only be filled at the price you designated or better.
                <li><b>Limit orders to close a trade</b></li>
                You can also use a limit order to close a trade when the market moves a specified amount in your favor. If you bought the EUR/USD at 1.1300 and wanted to exit when your trade showed a profit of 100 pips, you would place your sell limit order 100 pips above your entry or at the 1.1400 level.<br><br>
                If you sold the EUR/USD at 1.1300 and wanted to exit when your trade showed a profit of 100 pips, you would place your buy limit order 100 pips below your entry or at the 1.1200 level.
            </ol>
            <h5>Stop Orders</h5>
            <p>Stop orders are also frequently used in forex trading, and there are two variations:</p>
            <ol>
                <li><b>Stop orders to open a trade</b></li>
                The first is a stop order to enter into the market. These orders can be used for trading breakouts. If you thought the EUR/USD would rally further after a move above the 1.1500 level, you would place a buy stop for entry at 1.1501. As the market printed 1.1501, your buy stop would become a market order and be filled at the next best price available.<br><br>
                If you thought that the EUR/USD would continue moving down if it traded down through the 1.1200 level, you would place your sell stop for entry at the 1.1199 level. As the market printed 1.1199, your sell stop would become a market order and be filled at the next best price available.
                <li><b>Stop orders to close a trade</b></li>
                You can also use a protective stop order to close a trade when the market moves a specified amount against your position. If you bought the EUR/USD at 1.1500 and wanted to limit your risk to 50 pips, you would place your protective sell stop 50 pips below your entry or at the 1.1450 level.<br><br>
                If you sold the EUR/USD at 1.1400 and wanted to limit your risk to 50 pips, you would place your protective buy stop 50 pips above your entry or at the 1.1450 level.
            </ol>
            <p>*Adapted from <b>Venketas, W. (2019b). Types of Forex Orders. https://www.dailyfx.com/education/forex-trading-basics/forex-order-types.html</b></p>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop