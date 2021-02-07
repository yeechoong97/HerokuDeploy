@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1700px;">
            <div class="sidenav-content-details">
            <h3 id="learning-title">Trading Session</h3>
            <img src ="{{asset('pictures/Session.png')}}" class="img-padding" >
            <p>There are three major forex trading sessions which comprise the 24-hour market: the London session, the US session and the Asian session. Each major geographic market center can exhibit vastly unique traits and tendencies that can allow traders to effectively execute strategies at any time.</p>
            <p>Although the forex market is the most liquid of all asset classes, there are periods whereby volatility is constant, and others subdued. Understanding these different forex session times can improve the reliability of a forex trading strategy.</p>
            <h5>Main Trading Sessions</h5>
            <p>Customarily, the forex market is divided into three market sessions:</p>
            <ul>
                <li><b>Asian session (Tokyo)</b></li>
                <li><b>European session (London)</b></li>
                <li><b>US session (New York)</b></li>
            </ul>
            <p>The forex market is seen as highly functional/dynamic during these trading sessions as major banks, institutions and retail traders are operational. Noting the specific times of each trading session will assist forex traders in developing their trading strategies around this data.</p>
            <table class="table col-md-7 table-bordered table-striped">
                <thead>
                    <tr>
                    <th scope="col">Session</th>
                    <th scope="col">Major Market</th>
                    <th scope="col">Time(GMT)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>US</td>
                    <td>New York</td>
                    <td>13:00 - 22:00</td>
                    </tr>
                    <tr>
                    <td>Asian</td>
                    <td>Tokyo</td>
                    <td>00:00 - 09:00</td>
                    </tr>
                    <tr>
                    <td>European</td>
                    <td>London</td>
                    <td>08:00 - 17:00</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h5>Asian Trading Session</h5>
            <p>Tokyo is the first forex session to open, and many large participants use the trade momentum In Asia to develop their strategies and utilise as a gauge for future market dynamics. Approximately 6% of the world's FX transactions are enacted in the Asian trading session.</p>
            <h5>European Trading Session</h5>
            <p>London is the largest and most important forex trading session in the world, with roughly a 34% market share of the daily forex volume. Most of the world's largest banks keep their dealing desks in London because of the market share. The large number of participants in the London forex market and the high value of the transactions makes the London session more volatile than the other two forex sessions.</p>
            <h5>US Trading Session</h5>
            <p>The second largest trading market, New York handles approximately 16% of the world's forex transactions. Many of the transactions in New York occurs during the US/Europe overlap, with transactions slowing as liquidity dries up and European traders exit the forex market.</p>
            <p>*Adapted from <b>Venketas, W. (2019). Major Forex Trading Sessions from Around the World. https://www.dailyfx.com/education/why-trade-forex/major-forex-trading-sessions.html</b></p>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop