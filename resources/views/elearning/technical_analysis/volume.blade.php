@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1900px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Volumes</h3>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767463/E-Learning/Volume.jpg" class="img-padding" >
                <div class="img-citation">Image retrieved from <cite>Whatbuyusa. (2020). FOREX - Opportunity or trap. https://www.whatbuyusa.com/post/forex-opportunity-or-trap</cite></div>
                <p>Volume is the amount of an asset or security that changes hands over some period of time, often over the course of a day. For instance, stock trading volume would refer to the number of shares of a security traded between its daily open and close. Trading volume, and changes to volume over the course of time, are important inputs for technical traders.</h5>
                <h5>Understanding Volume</h5>
                <p>Every transaction that takes place between a buyer and a seller of a security contributes to the total volume count of that security. One transaction occurs whenever a buyer agrees to purchase what a seller is offering for sale at a certain price. If only five transactions occur in a day, the volume for that day is set at five.</p>
                <p>Each market exchange tracks its trading volume and provides volume data either for free or for a subscription fee. The volume of trade numbers are reported as often as once an hour throughout the current trading day. These hourly reported trade volumes are estimates. A trade volume reported at the end of the day is also an estimate. Final actual figures are reported the following day. Investors may also follow a security’s tick volume, or the number of changes in a contract's price, as a surrogate for trade volume, since prices tend to change more frequently with a higher volume of trade.</h5>
                <p>Volume tells investors about the market's activity and liquidity. Higher trade volumes for a specified security mean higher liquidity, better order execution and a more active market for connecting a buyer and seller. When investors feel hesitant about the direction of the stock market, futures trading volume tends to increase, which often causes options and futures on specified securities to trade more actively. Volume overall tends to be higher near the market's opening and closing times, and on Mondays and Fridays. It tends to be lower at lunchtime and before a holiday.</p>
                <h5>Volume in Technical Analysis</h5>
                <p>Some investors use technical analysis, a strategy based on stock price, in order to make decisions about when to buy a stock. Technical analysts are primarily looking for entry and exit price points; volume levels are important because they provide clues about where the best entry and exit points are located.</p>
                <p>Volume is an important indicator in technical analysis because it is used to measure the relative significance of any market move. If the market makes moves a large amount during a given period, then the strength of that movement either gains credibility or is viewed with skepticism based on the volume for that period. The higher the volume during the price move, the more significant the move is considered in this form of analysis. Conversely, if the volume is low then the move is viewed with less significance.</p>
                <p>Volume is one of the most important measures of the strength of a security for traders and technical analysts. From an auction perspective, when buyers and sellers become particularly active at a certain price, it means there is a high volume.</p>
                <p>Analysts use bar charts to quickly determine the level of volume. Bar charts also make it easier to identify trends in volume. When the bars on a bar chart are higher than average, it's a sign of high volume or strength at a particular market price. By examining bar charts, analysts can use volume as a way to confirm a price movement. If volume increases when the price moves up or down, it is considered a price movement with strength.</p>
                <p>If traders want to confirm a reversal on a level of support–or floor–they look for high buying volume. Conversely, if traders are looking to confirm a break in the level of support, they look for low volume from buyers. If traders want to confirm a reversal on a level of resistance–or ceiling– they look for high selling volume. Conversely, if traders are looking to confirm a break in the level of resistance, they look for high volume from buyers.</p>
                <p class="citation">*Adapted from <cite>Hayes, A. (2020). Volume. https://www.investopedia.com/terms/v/volume.asp</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop