@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-container">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1380px;">
            <div class="sidenav-content-details">
            <h3 id="learning-title">Support & Resistance</h3>
            <img src ="{{asset('pictures/ResistanceSupport.png')}}" class="img-padding" >
            <p>Support and resistance is a powerful pillar in trading and most strategies have some type of support/resistance (S/R) analysis built into them. Support and resistance tends to develop around key areas that price has regularly approached and rebounded thereafter. </p>
            <h5>What is Support and Resistance</h5>
            <p>Support and resistance is one of the most widely followed technical analysis techniques in the financial markets. It is a simple method to analyze a chart quickly to determine three points of interest to a trader:</p>
            <ul>
                <li>The direction of the market</li>
                <li>Timing an entry in the market</li>
                <li>Establishing points to exit the market at either a profit of loss</li>
            </ul>
            <h5>Support</h5>
            <p>Support is an area on a chart that price has dropped to but struggled to break below. The diagram above shows how price drops down to the area of support and subsequently ‘bounces’ sharply from this level.</p>
            <p>In theory, support is the price level at which demand (buying power) is strong enough to prevent the price from declining further. The rationale is that, as the price gets closer and closer to support, and becomes cheaper in the process, buyers see a better deal, and are more likely to buy. Sellers become less likely to sell, since they are getting a worse deal. In that scenario, demand (buyers) will overcome supply (sellers) and that will prohibit price from falling below support.</p>
            <h5>Resistance</h5>
            <p>Resistance is an area on a chart that price has risen to but struggled to break above. The diagram above shows how price rises up to the area of resistance and subsequently “bounces” sharply from this level.</p>
            <p>Resistance is the price level at which supply (selling power) is strong enough to prevent the price from rising further. The rationale behind this is that as the price gets closer and closer to resistance, and becomes more expensive in the process, sellers are more likely to sell and buyers become less likely to buy. In that scenario, supply (sellers) will overcome demand (buyers) and that will prohibit price from going above resistance.</p>
            <p>*Adapted from <b>Snow, R. (2019a). A Guide to Support and Resistance Trading. https://www.dailyfx.com/education/learn-technical-analysis/support-and-resistance-trading.html</b></p>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop