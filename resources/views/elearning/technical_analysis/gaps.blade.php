@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 3800px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Gaps</h3>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612769146/E-Learning/MarketGaps.svg" class="img-padding" >
                <div class="img-citation">Image retrieved from <cite>Forex.com. (2021b). Understanding Market Gaps and Slippage. https://www.forex.com/en/education/education-themes/trading-concepts/understanding-market-gaps-and-slippage/</cite></div>
                <p>Gaps are sharp breaks in price with no trading occurring in between. Gaps can happen moving up or moving down. In the forex market, gaps primarily occur over the weekend because it is the only time the forex market closes. Gaps may also occur on very short timeframes such as a one-minute chart or immediately following a major news announcement.</p>
                <h5>Example of when gappage can occure include:</h5>
                <ul>
                    <li>When economic data is released – particularly if it contains data that the market isn’t expecting</li>
                    <li>As major news events are announced, particularly global and/or unexpected news When trading resumes after a weekend or holiday – especially if major news is announced in that period</li>
                </ul>
                <h5>Why are they important?</h5>
                <p>Gaps can give an idea of market sentiment. When a market gaps up, that means there were zero traders willing to sell at the levels of the gap. When a market gaps down, that means there were zero traders willing to buy at the levels of the gap. There are also important to be aware of because it is possible to gap past a stop order and get filled at worse price than your stop order. Gaps sometimes result in corrective price action. In other words, after the gap occurs prices have a tendency to reverse and “fill” the gap.</p>
                <h5>How to Use</h5>
                <p>If there is a gap, generally that is a signal to stay out of the market. Gaps can show strength in the direction of the gap or they can “close” by having prices move in the opposite direction of the gap to at least where the gap began. If there is a gap immediately before the entry of a trade, it may be wise to cancel the trade.</p>
                <h5>Types of Gaps</h5>
                <ol>
                    <li><b>Gap down/up</b></li>
                    Gap down stocks and gap up stocks refer to the direction of the price movement either side of the gap. A full gap down is when the opening price is lower than the prior low price, while a full gap up (as shown above) occurs when the opening price is greater than the prior high price.
                    <li><b>Common gaps</b></li>
                    Common gaps simply show a gap in price action independent of price patterns and usually don’t provide exciting trading opportunities
                    <li><b>Breakway gaps</b></li>
                    Breakway gaps signal a new trend where the asset ‘gaps away’ from the price pattern, as can be seen below where the gap triggers a breakout. If a breakaway gap is accompanied by higher trading volume, it may be worth taking a position long for a breakaway gap up, and short for a breakaway gap down, on the candle following the gap.
                    <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767233/E-Learning/Breakway.png" class="img-padding" >
                    <div class="img-citation">Image retrieved from <cite>Lobel, B. (2019). Trading the Gap: What are Gaps & How to Trade Them? https://www.dailyfx.com/forex/education/trading_tips/daily_trading_lesson/2019/10/29/gap-trading-strategies.html</cite></div>
                    <li><b>Continuation or runaway gaps</b></li>
                    Continuation or runaway gaps show an acceleration of an already bullish or bearish pattern in the same direction. This can be caused by a news event that confirms the sentiment and furthers the trend. Traders might look to follow the trend and place a stop just below the gap for a bullish runaway gap and just above for a bearish runaway gap.
                    <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767233/E-Learning/Continuation.png" class="img-padding" >
                    <div class="img-citation">Image retrieved from <cite>Lobel, B. (2019). Trading the Gap: What are Gaps & How to Trade Them? https://www.dailyfx.com/forex/education/trading_tips/daily_trading_lesson/2019/10/29/gap-trading-strategies.html</cite></div>
                    <li><b>Exhaustion gaps</b></li>
                    Exhaustion gaps are, conversely to continuation gaps, where price makes a final gap in the trend direction, but then reverses. This is often caused by a herd mentality of traders rushing to the trend and moving the stock into overbought territory. Therefore, experienced traders will be watching for the reversal and take the contrary position to the prior trend.
                    <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767232/E-Learning/Exhaustion.png" class="img-padding" >
                    <div class="img-citation">Image retrieved from <cite>Lobel, B. (2019). Trading the Gap: What are Gaps & How to Trade Them? https://www.dailyfx.com/forex/education/trading_tips/daily_trading_lesson/2019/10/29/gap-trading-strategies.html</cite></div>
                </ol>
                <h5>What Does It Mean When A Gap Has Been "Filled"</h5>
                <p>A gap being ‘filled’ refers to the price returning to the original level before the gap happened. This usually means the price action, in the following days or weeks, retraces to the last day before a gap.</p>
                <p>There are a range of factors that come into play with gap fill stocks:</p>
                <ul>
                    <li><b>Price corrections</b>: An overly optimistic or pessimistic initial spike may invite a correction.</li>
                    <li><b>Support and resistance</b> isn’t left behind when a price moves up or down sharply.</li>
                    <li><b>Patterns</b>: Price patterns dictate the likelihood of a gap being filled. For example, price reversals seen with exhaustion gaps are likely to be filled as this type of gap signals the end of a price trend.</li>
                </ul>
                <p class="citation">*Adapted from <cite>Lobel, B. (2019). Trading the Gap: What are Gaps & How to Trade Them? https://www.dailyfx.com/forex/education/trading_tips/daily_trading_lesson/2019/10/29/gap-trading-strategies.html</cite></p>
                <p class="citation">*Adapted from <cite>Forex.com. (2021b). Understanding Market Gaps and Slippage. https://www.forex.com/en/education/education-themes/trading-concepts/understanding-market-gaps-and-slippage/</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop