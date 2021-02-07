@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2580px;">
            <div class="sidenav-content-details">
            <h3 id="learning-title">Average True Range</h3>
            <p>The average true range (ATR) is a technical analysis indicator, introduced by market technician J. Welles Wilder Jr. in his book New Concepts in Technical Trading Systems, that measures market volatility by decomposing the entire range of an asset price for that period.</p>
            <p>The true range indicator is taken as the greatest of the following: current high less the current low; the absolute value of the current high less the previous close; and the absolute value of the current low less the previous close. The ATR is then a moving average, generally using 14 days, of the true ranges.</p>
            <h5>The Average True Range (ATR) Formula</h5>
            <p>The first step in calculating ATR is to find a series of true range values for a security. The price range of an asset for a given trading day is simply its high minus its low. Meanwhile, the true range is more encompassing and is defined as:</p>
            <img src ="{{asset('pictures/ATRFormula.png')}}" class="img-padding" >
            <h5>How to Calculate the Average True Range (ATR)</h5>
            <p>Traders can use shorter periods than 14 days to generate more trading signals, while longer periods have a higher probability to generate fewer trading signals.</p>
            <p>For example, assume a short-term trader only wishes to analyze the volatility of a stock over a period of five trading days. Therefore, the trader could calculate the five-day ATR. Assuming the historical price data is arranged in reverse chronological order, the trader finds the maximum of the absolute value of the current high minus the current low, the absolute value of the current high minus the previous close, and the absolute value of the current low minus the previous close. These calculations of the true range are done for the five most recent trading days and are then averaged to calculate the first value of the five-day ATR.</p>
            <h5>What Does the Average True Range (ATR) Tell You?</h5>
            <p>Wilder originally developed the ATR for commodities, although the indicator can also be used for stocks and indices. Simply put, a stock experiencing a high level of volatility has a higher ATR, and a low volatility stock has a lower ATR.</p>
            <p>The ATR may be used by market technicians to enter and exit trades, and is a useful tool to add to a trading system. It was created to allow traders to more accurately measure the daily volatility of an asset by using simple calculations. The indicator does not indicate the price direction; rather it is used primarily to measure volatility caused by gaps and limit up or down moves. The ATR is fairly simple to calculate and only needs historical price data.</p>
            <p>The ATR is commonly used as an exit method that can be applied no matter how the entry decision is made. One popular technique is known as the "chandelier exit" and was developed by Chuck LeBeau. The chandelier exit places a trailing stop under the highest high the stock reached since you entered the trade. The distance between the highest high and the stop level is defined as some multiple times the ATR. For example, we can subtract three times the value of the ATR from the highest high since we entered the trade.</p>
            <img src ="{{asset('pictures/ATR.png')}}" class="img-padding" >
            <p>The ATR can also give a trader an indication of what size trade to put on in derivatives markets. It is possible to use the ATR approach to position sizing that accounts for an individual trader's own willingness to accept risk as well as the volatility of the underlying market.</p>
            <h5>Example of How to Use the Average True Range (ATR)</h5>
            <p>As a hypothetical example, assume the first value of the five-day ATR is calculated at 1.41 and the sixth day has a true range of 1.09. The sequential ATR value could be estimated by multiplying the previous value of the ATR by the number of days less one, and then adding the true range for the current period to the product.</p>
            <p>Next, divide the sum by the selected timeframe. For example, the second value of the ATR is estimated to be 1.35, or (1.41 * (5 - 1) + (1.09)) / 5. The formula could then be repeated over the entire time period.</p>
            <p>While the ATR doesn't tell us in which direction the breakout will occur, it can be added to the closing price, and the trader can buy whenever the next day's price trades above that value. This idea is shown below. Trading signals occur relatively infrequently, but usually spot significant breakout points. The logic behind these signals is that whenever a price closes more than an ATR above the most recent close a change in volatility has occurred. Taking a long position is betting that the stock will follow through in the upward direction.</p>
            <h5>Limitations of the Average True Range (ATR)</h5>
            <p>There are two main limitations to using the ATR indicator. The first is that ATR is a subjective measure, meaning that it is open to interpretation. There is no single ATR value that will tell you with any certainty that a trend is about to reverse or not. Instead, ATR readings should always be compared against earlier readings to get a feel of a trend's strength or weakness.</p>
            <p>Second, ATR only measures volatility and not the direction of an asset's price. This can sometimes result in mixed signals, particularly when markets are experiencing pivots or when trends are at turning points. For instance, a sudden increase in the ATR following a large move counter to the prevailing trend may lead some traders to think the ATR is confirming the old trend; however, this may not actually be the case.</p>
            <p>*Adapted from <b>Hayes, A. (2021). Average True Range (ATR). https://www.investopedia.com/terms/a/atr.asp</b></p>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop