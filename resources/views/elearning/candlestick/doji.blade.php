@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1680px;">
            <div class="sidenav-content-details">
            <h3 id="learning-title">Doji</h3>
            <p>A doji—or more accurately, "dо̄ji"—is a name for a session in which the candlestick for a security has an open and close that are virtually equal and are often components in patterns. Doji candlesticks look like a cross, inverted cross or plus sign. Alone, doji are neutral patterns that are also featured in a number of important patterns.</p>
            <p>A doji candlestick forms when a security's open and close are virtually equal for the given time period and generally signals a reversal pattern for technical analysts. In Japanese, "doji" means blunder or mistake, referring to the rarity of having the open and close price be exactly the same.</p>
            <p>Depending on where the open/close line falls, a doji can be described as a gravestone, long-legged, or dragonfly.</p>
            <ul>
                <li><b>Gravestone doji</b> indicate that buyers initially pushed prices higher, but by the end of the session sellers take control driving prices back down to the session low</li>
                <li><b>Long-legged doji</b> represent a more significant amount of indecision as neither buyers nor sellers take control.</li>
                <li><b>Dragonfly doji</b> indicate that sellers initially drove prices higher, but by the end of the session buyers take control driving prices back up to the session high.</li>
            </ul>
            <img src ="{{asset('pictures/Doji.png')}}" class="img-padding" >
            <h5>What Does a Doji Tell You?</h5>
            <p>Technical analysts believe that all known information about the stock is reflected in the price, which is to say the price is efficient. Still, past price performance has nothing to do with future price performance, and the actual price of a stock may have nothing to with its real or intrinsic value. Therefore, technical analysts use tools to help sift through the noise to find the highest probability trades.</p>
            <p>One tool that was developed by a Japanese rice trader named Honma from the town of Sakata in the 18th century, and it was introduced to the West in the 1990s by Steve Nison: the candlestick chart.</p>
            <p>Every candlestick pattern has four sets of data that help to define its shape. Based on this shape, analysts are able to make assumptions about price behavior. Each candlestick is based on an open, high, low, and close. The time period or tick interval used does not matter. The filled or hollow bar created by the candlestick pattern is called the body. The lines that extend out of the body are called shadows. A stock that closes higher than its opening will have a hollow candlestick. If the stock closes lower, the body will have a filled candlestick. One of the most important candlestick formations is called the doji.</p>
            <p>A doji, referring to both singular and plural form, is created when the open and close for a stock are virtually the same. Doji tend to look like a cross or plus sign and have small or nonexistent bodies. From an auction theory perspective, doji represent indecision on the side of both buyers and sellers. Everyone is equally matched, so the price goes nowhere; buyers and sellers are in a standoff.</p>
            <p>Some analysts interpret this as a sign of reversal. However, it may also be a time when buyers or sellers are gaining momentum for a continuation trend. Doji are commonly seen in periods of consolidation and can help analysts identify potential price breakouts.</p>
            <p>*Adapted from <b>Chen, J. (2020). Doji Definition. https://www.investopedia.com/terms/d/doji.asp</b></p>
            <p>*Adapted from <b>Forex.com. (2021d). The Doji Candlestick Formation. https://www.forex.com/en/education/education-themes/technical-analysis/doji-candlestick-formation/</b></p>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop