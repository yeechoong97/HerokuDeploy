<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Common;

class ElearningController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function search(Request $request)
    {
        $resultArray = [];
        $request->search = ($request->search==null) ? "" : $request->search;
        foreach(Common::$learningPage as $learningpage)
        {
            if (stripos($learningpage['description'],$request->search)!==false ||  stripos($learningpage['value'],$request->search)!==false || stripos($learningpage['parent'],$request->search)!==false )
                array_push($resultArray,$learningpage);
        }
        ksort($resultArray);
        return view('elearning.result',[
            'result' => $resultArray,
            'keyword' => $request->search,
        ]);
    }

    //Forex Introduction
    public function intro(){
        return view('elearning.introduction.intro');
    }

    public function trader(){
        return view('elearning.introduction.trader');
    }

    public function benefit(){
        return view('elearning.introduction.benefit');
    }

    public function stock(){
        return view('elearning.introduction.forex-stock');
    }

    //Knowlege part
    public function currency(){
        return view('elearning.knowledge.currency');
    }

    public function leverage(){
        return view('elearning.knowledge.leverage');
    }

    public function quote(){
        return view('elearning.knowledge.quote');
    }

    public function pips(){
        return view('elearning.knowledge.pips');
    }

    public function spread(){
        return view('elearning.knowledge.spread');
    }

    public function liquidity(){
        return view('elearning.knowledge.liquidity');
    }

    public function session(){
        return view('elearning.knowledge.session');
    }

    public function mistake(){
        return view('elearning.knowledge.mistake');
    }

    public function trade(){
        return view('elearning.knowledge.trade');
    }

    public function chart(){
        return view('elearning.knowledge.chart-types');
    }

    //Order
    public function long_short(){
        return view('elearning.order.long-short');
    }

    public function bullish_bearish(){
        return view('elearning.order.bullish-bearish');
    }

    public function types(){
        return view('elearning.order.types');
    }

    //Candlestick
    public function candlestick(){
        return view('elearning.candlestick.intro');
    }

    public function doji(){
        return view('elearning.candlestick.doji');
    }

    public function hammer(){
        return view('elearning.candlestick.hammer');
    }

    public function spinning_top(){
        return view('elearning.candlestick.spinning-top');
    }

    public function morning_star(){
        return view('elearning.candlestick.morning-star');
    }

    public function evening_star(){
        return view('elearning.candlestick.evening-star');
    }

    public function bullish_engulfing(){
        return view('elearning.candlestick.bullish-engulfing');
    }

    public function bearish_engulfing(){
        return view('elearning.candlestick.bearish-engulfing');
    }

    public function three_white_soldiers(){
        return view('elearning.candlestick.three-white-soldiers');
    }

    public function three_black_crows(){
        return view('elearning.candlestick.three-black-crows');
    }

    //Chart Patterns
    public function chart_intro(){
        return view('elearning.chart.intro');
    }

    public function head_and_shoulders(){
        return view('elearning.chart.head-and-shoulders');
    }

    public function cup_and_handle(){
        return view('elearning.chart.cup-and-handle');
    }

    public function double_top_bottom(){
        return view('elearning.chart.double-top-bottom');
    }

    public function triangle(){
        return view('elearning.chart.triangle');
    }

    public function flags_pennants(){
        return view('elearning.chart.flags-pennants');
    }

    public function wedge(){
        return view('elearning.chart.wedge');
    }

    public function triple_top_bottom(){
        return view('elearning.chart.triple-top-bottom');
    }

    public function round_bottom(){
        return view('elearning.chart.round-bottom');
    }

    //Fundamental Analysis
    public function fundamental(){
        return view('elearning.fundamental_analysis.intro');
    }

    public function watch(){
        return view('elearning.fundamental_analysis.watch');
    }

    //Technical Analysis
    public function technical_intro(){
        return view('elearning.technical_analysis.intro');
    }

    public function support_resistance(){
        return view('elearning.technical_analysis.support-resistance');
    }
    public function gaps(){
        return view('elearning.technical_analysis.gaps');
    }

    public function slippage(){
        return view('elearning.technical_analysis.slippage');
    }

    public function breakout(){
        return view('elearning.technical_analysis.breakout');
    }

    public function volume(){
        return view('elearning.technical_analysis.volume');
    }

    public function trend(){
        return view('elearning.technical_analysis.trend');
    }

    //Technical Indicator
    public function indicator_intro(){
        return view('elearning.technical_indicator.intro');
    }

    public function macd(){
        return view('elearning.technical_indicator.macd');
    }

    public function ma(){
        return view('elearning.technical_indicator.ma');
    }

    public function rsi(){
        return view('elearning.technical_indicator.rsi');
    }

    public function stochastic(){
        return view('elearning.technical_indicator.stochastic');
    }

    public function cci(){
        return view('elearning.technical_indicator.cci');
    }

    public function roc(){
        return view('elearning.technical_indicator.roc');
    }

    public function atr(){
        return view('elearning.technical_indicator.atr');
    }

    public function momentum(){
        return view('elearning.technical_indicator.momentum');
    }

    public function dmi(){
        return view('elearning.technical_indicator.dmi');
    }

    public function bollinger(){
        return view('elearning.technical_indicator.bollinger');
    }

    public function william(){
        return view('elearning.technical_indicator.william');
    }

    public function psar(){
        return view('elearning.technical_indicator.psar');
    }

    public function adl(){
        return view('elearning.technical_indicator.adl');
    }

    public function obv(){
        return view('elearning.technical_indicator.obv');
    }

    public function mfi(){
        return view('elearning.technical_indicator.mfi');
    }

    public function aroon(){
        return view('elearning.technical_indicator.aroon');
    }

}
