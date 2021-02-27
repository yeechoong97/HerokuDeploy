@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 3600px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Moving Average</h3>
                <p>In technical analysis, the moving average is an indicator used to represent the average closing price of the market over a specified period of time. Traders often make use of moving averages as it can be a good indication of current market momentum.</p>
                <p>The two most commonly used moving averages are the simple moving average (SMA) and the exponential moving average (EMA). The difference between these moving averages is that the simple moving average does not give any weighting to the averages in the data set whereas the exponential moving average will give more weighting to current prices.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767792/E-Learning/SMA.png" class="img-padding" >
                <h5>How Do You Calculate Moving Average?</h5>
                <p>As explained above, the most common moving averages are the simple moving average (SMA) and the exponential moving average (EMA). Almost all charting packages will have a moving average as a technical indicator.</p>
                <p>The simple moving average is simply the average of all the data points in the series divided by the number of points.</p>
                <p>The challenge of the SMA is that all the data points will have equal weighting which may distort the true reflection of the current market’s trend.</p>
                <p>The EMA was developed to correct this problem as it will give more weighting to the most recent prices. This makes the EMA more sensitive to the current trends in the market and is useful when determining trend direction.</p>
                <p>The mathematic formula for each can be found below:</p>
                <h5>Simple Moving Average</h5>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767792/E-Learning/SMAFormula.png" class="img-padding" >
                <p>For example, looking at a 5-day SMA on a daily chart of EUR/USD and the closing prices over the 5 days are as follows:</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767792/E-Learning/SMACalculation.png" class="img-padding" > 
                <h5>Exponential Moving Average</h5>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767791/E-Learning/EMAFormula.png" class="img-padding" > 
                <p>Steps for calculating EMA: </p>
                <ol>
                    <li>Calculate the SMA for the particular time period</li>
                    <li>Calculate the multiplier for weighting the EMA using the formula:</li>
                    [2 / (selected time period + 1)]. So, for a 10-day moving average, the multiplier would be [2/(10+1)] = 0.01818.
                    <li>Use the smoothing factor combined with the rpevious EMA to arrive at the current value</li>
                </ol>
                <h5>What Is The Purpose of Moving Averages</h5>
                <p>The main purpose of the moving average is to eliminate short-term fluctuations in the market. Because moving averages represent an average closing price over a selected period of time, the moving average allows traders to identify the overall trend of the market in a simple way.</p>
                <p>Another benefit of the moving average is that it is a customizable indicator which means that the trader can select the time-frame that suits their trading objectives. Moving Averages are often used for market entries as well as determining possible support and resistancelevels. The moving average often acts as a resistance level when the price is trading below the MA and it acts as a support level when the price is trading above the MA.</p>
                <h5>How Do You Interpret Moving Averages</h5>
                <p>There are 3 ways in which trader's use the moving average</p>
                <ol>
                    <li><b>To determine the direction of the trend</b></li>
                    When prices are trending higher, the moving average will adjust by also moving higher to reflect the increasing prices. This could be interpreted as a bullish signal, where traders may prefer buying opportunities.
                    <br><br>
                    The opposite would be true if the price was consistently trading below the moving average indicator, where traders would then prefer selling opportunities due to the market signaling a downward trend.
                    <li><b>To determine support and resitance levels</b></li>
                    The moving average can be used to determine support and resistance levels once a trader has placed a trade.
                    <br><br>
                    If the trader sees the moving average trending higher, they may enter the market on a retest of the moving average. Likewise, if the trader is already long in an uptrend market, then the moving average can be used as a stop loss level. The opposite is true for down trends. The charts below are examples of how the moving average can be used as a both a support and a resistance level.
                    <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767791/E-Learning/SupportResistance.png" class="img-padding" > 
                    <li><b>Using multiple oving averages for long-term and short-term market trends</b></li>
                    It is common for traders to make use of multiple moving average indicators on a single chart, as depicted in the chart below. This allows traders to simultaneously assess the short and long-term trends in the market. As price crosses above or below these plotted levels on the graph it can be interpreted as either strength or weakness for a specific currency pair.This method of using more than one indicator can be extremely useful in trending markets and is similar to using the MACD oscillator.
                    <br><br>
                    When making use of multiple moving averages, many traders will look to see when the lines will cross. This phenomenon is referred to as ‘The Golden Cross’ when a bullish pattern is formed and ‘The Death Cross’ when the pattern is bearish.
                    <br><br>
                    A Golden cross is identified when the short-term moving average (such as the 50-day moving average) crosses above the long-term moving average (such as the 200-day moving average), while the Death cross represents the short-term moving average crossing below the long-term moving average. Traders that are long, should view a Death Cross as a time to consider closing the trade while those in short trades should view the Golden Cross as a signal to close out the trade.
                </ol>
                <p class="citation blockquote-footer">Adapted from <cite>Costa, T. Da. (2019). Moving Average (MA) Explained for Traders. https://www.dailyfx.com/education/technical-analysis-tools/moving-average.html</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop