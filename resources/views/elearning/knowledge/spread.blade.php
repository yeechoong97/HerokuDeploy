@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1800px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Spread</h3>
                <h5>What is a Spread</h5>
                <p>Every market has a spread and so does forex. A spread is simply defined as the price difference between where a trader may purchase or sell an underlying asset. Traders that are familiar with equities will synonymously call this the Bid: Ask spread.</p>
                <p>Below we can see an example of the forex spread being calculated for the EUR/USD. First, we will find the buy price at 1.20732 and then subtract the sell price of 1.20718. What we are left with after this process is a reading of 0.00014. Traders should remember that the pip value is then identified on the EUR/USD as the 4th digit after the decimal, making the final spread calculated as 1.4 pips.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612763113/E-Learning/Spread.png" class="img-padding" alt="spread">
                <h5>How To Calculate The Forex Spread And Costs</h5>
                <p>Before we calculate the cost of a spread, remember that the spread is just the ask price less (minus) the bid price of a currency pair. So, in our example above, 1.20732-1.20718 = 0.00014 or 1.4 pips.</p>
                <p>Using the quotes above, we know we can currently buy the EUR/USD at 1.20732 and close the transaction at a sell price of 1.20718. That means as soon as our trade is open, a trader would incur 1.4 pips of spread.</p>
                <p>To find the total spread cost, we will now need to multiply this value by pip cost while considering the total amount of lots traded. When trading a 10k EUR/USD lot, you would incur a total cost of 0.00014 (1.4pips) X 10,000 (10k lot) = $1.4. If you were trading a standard lot (100,000 units of currency) your spread cost would be 0.00014pips (1.4pips) X 100,000 (1 standard lot) = $14.</p>
                <h2 style="text-align:center">1.4 (Spread in Pips) x $1 (Pip Cost per 10k Lot) <br/>= $1.4 (Spread Cost)</h2><br><br>
                <h5>Understanding A High Spread And A Low Spread</h5>
                <p>It’s important to note that the FX spread can vary over the course of the day, ranging between a ‘high spread’ and a ‘low spread’.</p>
                <p>This is because the spread can be influenced by multiple factors like volatility or liquidity. You will notice that some currency pairs, like emerging market currency pairs, have a greater spread than major currency pairs. Your major currency pairs trade in higher volumes compared to emerging market currencies, and higher trade volumes tend to lead to lower spreads under normal conditions.</p>
                <h5>High Spread</h5>
                <p>A high spread means there is a large difference between the bid and the ask price. Emerging market currency pairs generally have a high spread compared to major currency pairs.</p>
                <p>A higher than normal spread generally indicates one of two things, high volatility in the market or low liquidity due to out-of-hours trading. Before news events, or during big shock (Brexit, US Elections), spreads can widen greatly.</p>
                <h5>Low spread</h5>
                <p>A low spread means there is a small difference between the bid and the ask price. It is preferable to trade when spreads are low like during the major forex sessions. A low spread generally indicates that volatility is low and liquidity is high.</p>
                <p class="citation blockquote-footer">Adapted from <cite>Bradfield, D. (2019b). What Does a Forex Spread Tell Traders? https://www.dailyfx.com/education/forex-trading-basics/what-does-a-spread-tell-forex-traders.html</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop