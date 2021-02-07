@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2480px;">
          <div class="sidenav-content-details">
          <h3 id="learning-title">Forex Trader Types</h3>
          <img src ="{{asset('pictures/TraderTypes.png')}}" class="img-padding" >
          <h5>Types of Traders</h5>
          <p>Forex traders tend to fit into one of the following six trading types: scalper, day trader, swing trader, position trader, algorithmic trader, and event-driven trader. Read about the separate types below and discover the character traits that are optimal for each.</p>
          <h5>1. Scalper</h5>
          <p>Scalpers are short-term traders focusing on holding positions for timeframes as small as a few seconds to a few minutes. Forex scalping strategies involve trading frequently throughout the day, with the intention of achieving small gains at the busiest (most liquid) times.</p>
          <p>Scalpers live life in the fast lane. Continuously faced with processing new information and reacting to rapid market changes, you’ll ideally be observant, instinctive and quick-witted – but stoical under pressure.</p>
          <h5>2. Day Trader</h5>
          <p>Day traders also execute frequent trades on an intraday timeframe. While their routine will not be as fast-paced as a scalper’s, day traders will similarly close all positions before the end of the trading day, so as not to hold any overnight. This means trades are not affected by negative news that can hit prices before the market opens or after it closes.</p>
          <p>To be successful as a day trader, you’ll need to be ready to adapt to quick changes in price, as well as be cognizant of techniques important to this style of trading, such as fading the gap.</p>
          <h5>3. Swing Trader</h5>
          <p>Swing traders hold onto trades for longer than a single day, and up to perhaps a couple of weeks. Over this short timeframe, swing traders will typically favor technical analysis over fundamentals, although they should still be attuned to the news events that can trigger volatility.</p>
          <p>This trader type is less frantic than scalpers and day traders, so extreme alertness is less of a requirement, but you’ll still requires a strong eye for detail when it comes to chart analysis. </p>
          <h5>4. Position Trader</h5>
          <p>Position traders hold trades for longer periods of time, from several weeks to years. As the longest holding period among trading styles, position traders are less interested in an asset’s short-term price fluctuations and more concerned, naturally, with the performance over more sustained timeframes.</p>
          <p>As a forex position trader, you will require patience as your money will often be locked up for long time periods. Particularly with longer-term trades, a thorough knowledge of fundamental factors is beneficial, so advanced analytical skills will serve you well.</p>
          <h5>5. Algorithmic Trader</h5>
          <p>Algorithmic traders rely on computer programs to place trades for them at the best possible prices. Traders can use defined instructions, or high-frequency trading algorithms, to either code the programs themselves, or purchase existing products.</p>
          <p>This type of trading suits people who are comfortable with using technology and want to apply it in their forex career. Given the nature of the programs, algorithmic traders will also have a keen eye for the technical charts.</p>
          <h5>6. Event-driven Trader</h5>
          <p>Event-driven traders look to fundamental analysis over technical charts to inform their decisions. They’ll seek to benefit from spikes caused by political or economic events, such as Non-Farm Payroll data, GDP, employment figures, and elections.</p>
          <p>This type of trading will suit a person who likes to keep up with world news, and who will understand how events can impact markets. Inquisitive, curious and forward-thinking, you will be skilled at processing new information and predicting how global and localized events may play out.</p>
          <h5>Summary of Different Types of Forex Trader</h5>
          <table class="table col-md-7 table-bordered table-striped">
                <thead>
                    <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Time in Trade</th>
                    <th scope="col">Personality Traits</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>Scalper & Day Trader</td>
                    <td>1 min - 1 day</td>
                    <td>Observant, Instinctive, Quick Witted</td>
                    </tr>
                    <tr>
                    <td>Swing Trader</td>
                    <td>2-6 days</td>
                    <td>Calm, Selective, Focused</td>
                    </tr>
                    <tr>
                    <td>Position Trader</td>
                    <td>Weeks - Months</td>
                    <td>Patient, Systematic, Strategic</td>
                    </tr>
                    <tr>
                    <td>Algorithmic Trader</td>
                    <td>All Timeframes</td>
                    <td>Tech-savvy, Technical, Mathematical</td>
                    </tr>
                    <tr>
                    <td>Event-driven Trader</td>
                    <td>All Timeframes</td>
                    <td>Inquisitive, Analytical, Forward-Thinking</td>
                    </tr>
                </tbody>
            </table>
            <br>
          <p>*Adapted from <b>Lobel, B. (2019b). What Type of Forex Trader Are You? https://www.dailyfx.com/education/find-your-trading-style/types-of-forex-traders.html</b></p>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   

@stop