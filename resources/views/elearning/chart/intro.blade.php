@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1780px;">
            <div class="sidenav-content-details">
            <h3 id="learning-title">Chart Patterns Introduction</h3>
            <img src ="{{asset('pictures/ChartPattern.jpg')}}" class="img-padding" >
            <p>For many analysts, the chart of a security is the starting point for all future analysis. Even staunch critics of technical analysis use charts to some extent. And for good reason: charts can provide a lot of information in a small amount of time.</p>
            <p>Taking a look at the five-year chart of a company, you can quickly determine how well shareholders have done over the period. Based on the movements represented on the chart, one can tell if a company's share value has grown over the period or lagged.</p>
            <p>The chart reader also can determine the volatility of the company’s shares by looking at the movements on the chart. A company whose stock exhibits very jagged up-and-down movements is clearly more volatile than a company whose stock moves relatively smoothly across time.</p>
            <h5>Why Charts?</h5>
            <p>Before the advent of computers and data feeds, the use of charts to formulate trading strategies was outside the mainstream of trading techniques. The reason, creating charts was difficult. Each chart had to be created by hand, with chartists adding another data point at the close of trading for each security they were following. Also, chart users were often misrepresented as a bizarre group of individuals huddled in the recesses of the brokerage house as they added the latest data point to their closely coveted charts.</p>
            <p>But with the advancement of technology and the increased popularity of technical analysis, the use of charts has greatly increased, making them one of, if not the most important tools used by technical traders.</p>
            <p>A single chart has the ability to display a significant amount of information. More conceptually, charts are an illustration of the struggle between buyers and sellers. While this point is debatable between the schools of investment like technical, fundamental and efficient market analysis, technical analysis assumes that: a) prices discount everything, b) prices moves in trends and c) history repeats itself.</p>
            <h5>Patterns on a Chart</h5>
            <p>Chart patterns signal to traders that the price of a security is likely to move in one direction or another when the pattern is complete.</p>
            <p>There are two types of patterns in this area of technical analysis: reversal and continuation. A reversal pattern signals that a prior trend will reverse on completion of the pattern. Conversely, a continuation pattern indicates that the prior trend will continue onward upon the pattern's completion.</p>
            <p>The difficulty in identifying chart patterns and their subsequent signals is that chart use is not an exact science. In fact, it's often viewed as more of an art than a science. While there is a general idea and components to every chart pattern, the price movement does not necessarily correspond to the pattern suggested by the chart. This should not discourage potential users of charts - once the basics of charting are understood, the quality of chart patterns can be enhanced by looking at volume and secondary indicators.</p>
            <p>There are several concepts that need to be understood before reading about specific chart patterns. The first is a trendline, which is a line drawn on a chart to signal a level of support or resistance for the price of the security. Support trendlines are the levels at which prices have difficulty falling below. Conversely, a resistance trendline illustrates the level at which prices have a hard time going above. These trendlines can be constant price levels, such as $50, or rise or fall in the direction of the trend as time goes on.</p>
            <p>*Adapted from <b>Bottom, D., Langager, B. C., & Murphy, C. (2007). Analyzing Chart Patterns. 1–31.</b></p>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop