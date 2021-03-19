@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2100px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Bearish & Bullish</h3>
                <p>Simply put, a bear market is one in which prices are heading down and a bull market is used to describe conditions in which prices are rising.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612765102/E-Learning/BullishBearish.jpg" class="img-padding" alt="bullish-bearish">
                <div class="img-citation">Image retrieved from <cite>Sather, A. (2019). Real Data Shows What the Best Times to Be Bullish and Bearish Have Been. https://einvestingforbeginners.com/bullish-vs-bearish-stock-market-data/</cite></div>
                <h5>What Happens in a Bull Market?</h5>
                <p>When the bulls reign in the market, people are looking to invest money; confidence is high and the acceptance of risk generally goes up.</p>
                <p>This leads to rises in various markets – particularly in stock markets, but also in FX currencies such as the Australian dollar (AUD), Canadian dollar (CAD), New Zealand dollar (NZD), and emerging market currencies. Conversely, bull markets typically lead to a decline in safe-haven currencies such as the Japanese yen, the Swiss franc (CHF) and, in some cases, the U.S. dollar.</p>
                <p>The U.S. dollar (USD) and Japanese yen (JPY) are safe-haven currencies and tend to strengthen in a bear market as riskier instruments are sold off and safe-haven currencies are in demand.</p>
                <h5>Why Does It Matter to You?</h5>
                <p>One of the key benefits of forex trading is the opportunity it offers traders in both bull and bear markets. This is because forex trading is always done in pairs, when one currency is weakening the other is strengthening thereby allowing you to take advantage of rising and falling markets.</p>
                <p>Bull and bear markets are important to pay attention to as they can determine currency market trends. By being aware of market trends, can help you to make the best decisions of how to manage risk and gain a better understanding of when it is best to enter and exit your trades.</p>
                <h2 class="blockquote text-center">In a bull market, traders are looking to enter the market when prices are rising so that they can sell once they believe the market has reached its peak.</h2><br><br>
                <h5>What Happens in a Bear Market?</h5>
                <p>Bearish markets follow a downward trend as investors sell riskier assets such as stocks and less-liquid currencies such as those from emerging markets.</p>
                <p>The U.S. dollar (USD) and Japanese yen (JPY) are safe-haven currencies and tend to strengthen in a bear market as riskier instruments are sold off and safe-haven currencies are in demand.</p>
                <h5>Why Does It Matter to You?</h5>
                <p>One of the key benefits of forex trading is the opportunity it offers traders in both bull and bear markets. This is because forex trading is always done in pairs, when one currency is weakening the other is strengthening thereby allowing you to take advantage of rising and falling markets.</p>
                <h2 class="blockquote text-center">In a bear market, traders are looking to enter the market when prices are falling so that they can buy once they believe that market has reached its peak.</h2><br><br>
                <p>Bull and bear markets are important to pay attention to as they can determine currency market trends. By being aware of market trends, can help you to make the best decisions of how to manage risk and gain a better understanding of when it is best to enter and exit your trades.</p>
                <p class="citation blockquote-footer">Adapted from <cite>Forex.com. (2021a). What Are Bearish and Bullish Markets? https://www.forex.com/en/education/resources-by-level/beginner/what-are-bearish-and-bullish--markets/</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop