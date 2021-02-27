@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 2100px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Technical Analysis Introduction</h3>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767022/E-Learning/Technical.jpg" class="img-padding" >
                <div class="img-citation">Image retrieved from <cite>Bestbrokerindia. (2019). Fundamentals of Technical Analysis. https://bestbrokerindia.com/blog/fundamentals-of-technical-analysis/</cite></div>
                <p>Technical analysis is the study of historical price action in order to identify patterns and determine probabilities of future movements in the market through the use of technical studies, indicators, and other analysis tools.</p>
                <p>Technical analysis boils down to two things:</p>
                <ol>
                    <li><b>Identifying trend</b></li>
                    <li><b>Identifying support/resistance through the use of price charts and/or timeframes</b></li>
                </ol>
                <p>Markets can only do three things: move up, down, or sideways.</p>
                <p>Prices typically move in a zigzag fashion, and as a result, price action has only two states:</p>
                <ul>
                    <li><b>Range</b> - when prices zigzag sideways</li>
                    <li><b>Trend</b> - prices either zigzag higher (up trend, or bull trend), or prices zigzag lower (down trend, or bear trend)</li>
                </ul>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612767032/E-Learning/TechnicalAnalysisChart.png" class="img-padding" >
                <h5>Why is Technical Analysis Important</h5>
                <p>Technical analysis of a market can help you determine not only when and where to enter a market, but much more importantly, when and where to get out.</p>
                <h5>How can you use technical analysis</h5>
                <p>Technical analysis is based on the theory that the markets are chaotic (no one knows for sure what will happen next), but at the same time, price action is not completely random. In other words, mathematical Chaos Theory proves that within a state of chaos there are identifiable patterns that tend to repeat.</p>
                <p>This type of chaotic behavior is observed in nature in the form of weather forecasts. For example, most traders will admit that there are no certainties when it comes to predicting exact price movements. As a result, successful trading is not about being right or wrong: it’s all about determining probabilities and taking trades when the odds are in your favor. Part of determining probabilities involves forecasting market direction and when/where to enter into a position, but equally important is determining your risk-to-reward ratio.</p>
                <p>Remember, there is no magical combination of technical indicators that will unlock some sort of secret trading strategy. The secret of successful trading is good risk management, discipline, and the ability to control your emotions. Anyone can guess right and win every once in a while, but without risk management it is virtually impossible to remain profitable over time.</p>
                <p class="citation blockquote-footer">Adapted from <cite>Forex.com. (2021e). Understanding Technical Analysis. https://www.forex.com/en/education/resources-by-level/beginner/understanding-technical-analysis/</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop