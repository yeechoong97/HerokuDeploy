@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2600px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Directional Movement Index</h3>
                <p>The Directional Movement Index, or DMI, is an indicator developed by J. Welles Wilder in 1978 that identifies in which direction the price of an asset is moving. The indicator does this by comparing prior highs and lows and drawing two lines: a positive directional movement line (+DI) and a negative directional movement line (-DI). An optional third line, called directional movement line (DX) shows relative the difference between the lines.</p>
                <p>When +DI is above -DI, there is more upward pressure than downward pressure in the price. If -DI is above +DI, then there is more downward pressure in the price. This indicator may help traders assess the trend direction. Crossovers between the lines are also sometimes used as trade signals to buy or sell.</p>
                <h5>The Formulas For the Directional Movement Index (DMI) Are:</h5>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768525/E-Learning/DMIFormula.png" class="img-padding" >
                <h5>Calculating the Directional Movement Index (DMI)</h5>
                <ol>
                    <li>Calculate +DM, -DM, and True Range (TR) for each period. Typically 14 periods are used.</li>
                    <li>+DM is the Current High - Previous High.</li>
                    <li>-DM is the Previous Low - Current Low.</li>
                    <li>Use +DM when Current High - Previous High is greater than Previous Low - Current Low. Use -DM when Previous Low - Current Low is greater than Current High - Previous High.</li>
                    <li>TR is the greater of the Current High - Current Low, Current High - Previous Close, or Current Low - Previous Close.</li>
                    <li>Smooth the 14-period averages of +DM, -DM, and TR. Below is the formula for TR. Insert the -DM and +DM values to calculate the smoothed averages of those as well.</li>
                    <li>First 14TR = Sum of first 14 TR readings.</li>
                    <li>Next 14TR value = First 14TR - (Prior 14TR/14) + Current TR</li>
                    <li>Next, divide the smoothed +DM value by the smoothed ATR value to get +DI. Multiply by 100.</li>
                    <li>Divide the smoothed -DM value by the smoothed TR value to get-DI. Multiply by 100.</li>
                    <li>The optional Directional Movement Index (DX) is +DI minus -DI, divided by the sum of +DI and -DI (all absolute values). Multiply by 100.</li>
                </ol>
                <h5>What Does the Directional Movement Index (DMI) Tell You</h5>
                <p>The DMI is primarily used to help assess trend direction and provide trade signals.</p>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612768525/E-Learning/DMI.png" class="img-padding" >
                <p>Crossovers are the main trade signals. A long trade is taken when the +DI crosses above -DI and an uptrend could be underway. A sell signal occurs when the -DI drops below -DI. A short trade is initiated when -DI drops below +DI because a downtrend could be underway.</p>
                <p>While this method may produce some good signals, it will also produce some bad ones since a trend may not necessarily develop after entry.</p>
                <p>The indicator can also be used as a trend or trade confirmation tool. If the +DI is well above -DI, the trend has strength to the upside and this would help confirm current long trades or new long trade signals based on other entry methods. If -DI is well above +DI this confirms the strong downtrend or short positions.</p>
                <p>The Average Directional Movement Index, or ADX, is a smoothed average of DX, and is another indicator that can be added to the DMI.</p>
                <h5>Limitations of the Directional Movement Index</h5>
                <p>The directional movement index (DMI) is part of a larger system called the Average Directional Movement Index (ADX). The trend direction of DMI can be incorporated with the strength readings of the ADX. Readings above 20 on the ADX means the price is trending strongly. Whether using ADX or not, the indicator is still prone to producing lots of false signals.</p>
                <p>+DI and -DI readings and crossovers are based on historical prices and don't necessarily reflect what will happen in the future. A crossover can occur, but the price may not respond, resulting in a losing trade. The lines may also crisscross, resulting in multiple signals but no trend in the price. This can be somewhat avoided by only taking trades in the larger trend direction based on long-term price charts, or incorporating ADX readings to help isolate strong trends.</p>
                <p class="citation">*Adapted from <cite>Mitchell, C. (2021b). Directional Movement Index (DMI). https://www.investopedia.com/terms/d/dmi.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop