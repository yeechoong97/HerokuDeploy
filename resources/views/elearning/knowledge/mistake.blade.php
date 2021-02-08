@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="elearning-container">
    <div class="row elearning-container">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1800px;">
            <div class="sidenav-content-details">
                <h3 id="learning-title">Common Trading Mistakes</h3>
                <img src ="https://res.cloudinary.com/fyp202105/image/upload/v1612763759/E-Learning/Mistake.jpg" class="img-padding" >
                <p>Trading forex can be a rewarding and exciting challenge, but it can also be discouraging if you are not careful. Whether you’re new to forex trading or an experienced veteran, avoiding these trading mistakes can help keep your trades on the right track.</p>
                <ol>
                    <li><b>Not Doing Your Homework</b></li>
                    Currency pairs are closely linked to national economies and are affected by many factors. They are also traded 24/5, meaning there is usually something going on that will move the markets.<br><br>
                    Before entering a trade, make sure you do your homework. Not only should you be aware of upcoming events that could affect your trade, but you also need to forecast which way these events could swing the markets. Pay attention to what your technical indicators are telling you and how they compare to your fundamental event analysis.
                    <li><b>Risking More than You Can Afford</b></li>
                    One common mistake new traders make is misunderstanding how leverage works. Familiarize yourself with margin and leverage to help avoid accidentally putting more capital at risk than you had planned.<br><br>
                    Many traders find it helpful to set a maximum percentage of their capital that they are willing to risk at one time, usually 1% to 3%. For example, if you have $50,000 of equity and are willing to risk 2% maximum, you would not tie up more than $1,000 at one time. It is important that you stick to that maximum once you set it.
                    <li><b>Trading without a Net</b></li>
                    You cannot watch the forex markets 24 hours a day. Stop and limit orders help you get in and out of the market at predetermined prices. This not only allows the trading platform to execute trades when you are not available, but it also makes you think through to the end of your trade and set exit strategies before you’re actually in the trade and your emotions get the best of you. Placing contingent orders may not necessarily limit your risk for losses.
                    <li><b>Overreacting</b></li>
                    A loss never feels good. It can make you emotional and irrational, tempting you to make kneejerk follow-up trades that are outside your trading plan.<br><br>
                    No trader makes a great trade every time. Accept that losses are part of the reality of trading and stick to your plan. In the long run, your trading plan should compensate for that loss; if not, review your plan and adjust.
                    <li><b>Trading from Scratch</b></li>
                    Using your hard-earned capital to test a new trading plan is almost as risky as trading without a plan at all. Before you start trading real money, open a forex practice account and use virtual funds to try out trading plans and get a feel for the trading platform you are using. Although you will not be affected by your emotions the same way you will be when trading your own money, this is also a chance to see how you react to trades not going your way and learn from your mistakes without the risk.
                </ol>
                <p class="citation">*Adapted from <cite>Forex.com. (2021a). 5 Common Forex Trading Mistakes. https://www.forex.com/en/education/education-themes/trading-concepts/common-forex-trading-mistakes/</cite></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop