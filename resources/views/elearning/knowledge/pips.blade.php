@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1500px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Pips</h3>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612762909/E-Learning/Pips.png" class="img-padding" >
                <h5>What is a Pip</h5>
                <p>Pip is an acronym for "percentage in point" or" price interest point." A pip is the smallest price move that an exchange rate can make based on forex market convention. Most currency pairs are priced out to four decimal places and the pip change is the last (fourth) decimal point. A pip is thus equivalent to 1/100 of 1% or one basis point. For example, the smallest move the USD/CAD currency pair can make is $0.0001 or one basis point.</p>
                <h5>How Pips Work</h5>
                <p>A pip is a basic concept of foreign exchange (forex). Forex pairs are used to disseminate exchange quotes through bid and ask quotes that are accurate to four decimal places. In simpler terms, forex traders buy or sell a currency whose value is expressed in relationship to another currency.</p>
                <p>Movement in the exchange rate is measured by pips. Since most currency pairs are quoted to a maximum of four decimal places, the smallest change for these pairs is 1 pip. The value of a pip can be calculated by dividing 1/10,000 or 0.0001 by the exchange rate.</p>
                <p>For example, a trader who wants to buy the USD/CAD pair would be purchasing US Dollars and simultaneously selling Canadian Dollars. Conversely, a trader who wants to sell US Dollars would sell the USD/CAD pair, buying Canadian dollars at the same time. Traders often use the term "pips" to refer to the spread between the bid and ask prices of the currency pair and to indicate how much gain or loss can be realized from a trade.</p>
                <p>Japanese Yen (JPY) pairs are quoted with 2 decimal places, marking a notable exception. For currency pairs such as the EUR/JPY and USD/JPY, the value of a pip is 1/100 divided by the exchange rate. For example, if the EUR/JPY is quoted as 132.62, one pip is 1/100 ÷ 132.62 = 0.0000754.</p>
                <h5>Pips and Profitability</h5>
                <p>The movement of a currency pair determines whether a trader made a profit or loss from his or her positions at the end of the day. A trader who buys the EUR/USD will profit if the Euro increases in value relative to the US Dollar. If the trader bought the Euro for 1.1835 and exited the trade at 1.1901, he or she would make 1.1901 - 1.1835 = 66 pips on the trade.</p>
                <p>Now, let's consider a trader who buys the Japanese Yen by selling USD/JPY at 112.06. The trader loses 3 pips on the trade if closed at 112.09 but profits by 5 pips if the position is closed at 112.01.</p>
                <p>While the difference looks small in the multi-trillion dollar foreign exchange market, gains and losses can add up quickly. For example, if a $10 million position in this set-up is closed at 112.01, the trader will book a $10 million x (112.06 - 112.01) = ¥500,000 profit. This profit in US dollars is calculated as ¥500,000/112.01 = $4,463.89.</p>
                <p class="citation">*Adapted from <cite>Chen, J. (2021). Pip Definition. https://www.investopedia.com/terms/p/pip.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop