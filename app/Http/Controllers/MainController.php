<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getOANDA()
    {
     $url = "https://api-fxpractice.oanda.com/v3/accounts/101-011-15419455-001/instruments/EUR_USD/candles?count=5000&price=M&granularity=M1&smooth=true";
     $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  //Disable SSL
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer 8821ff866c725c0f3fc2ba5bc9fe9a6e-ad7c4f2e55fecfbfd8bdd5fa72a68697',
                'Content-Type: application/json'
            ),
        ));
        
        $res = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $response = json_encode($res);
        return view('trade.chart',[
            'response' => $response,
        ]); 

    }

    public function getCandle(Request $request)
    {
        $instrument = $request->ins;
        $granularity = $request->gra;
        $url = "https://api-fxpractice.oanda.com/v3/accounts/101-011-15419455-001/instruments/".$instrument."/candles?count=1&price=M&granularity=".$granularity."&smooth=true";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  //Disable SSL
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer 8821ff866c725c0f3fc2ba5bc9fe9a6e-ad7c4f2e55fecfbfd8bdd5fa72a68697',
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        return response()->json(array('response'=> $response),200);
    }

    public function getCandleStick(Request $request)
    {
        $instrument = $request->ins;
        $granularity = $request->gra;
        $url = "https://api-fxpractice.oanda.com/v3/accounts/101-011-15419455-001/instruments/".$instrument."/candles?count=5000&price=M&granularity=".$granularity."&smooth=true";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  //Disable SSL
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer 8821ff866c725c0f3fc2ba5bc9fe9a6e-ad7c4f2e55fecfbfd8bdd5fa72a68697',
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        return response()->json(array('response'=> $response),200);
    }


}
