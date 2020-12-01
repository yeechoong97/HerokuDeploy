<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Input;
use App\Order;
use Carbon\Carbon;
use App\Account;
use App\Trades;
use Auth;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = Auth::user()->user_id;
        $account = Account::where('user_id',$id)->first();
        if(!$account) throw new ModelNotFoundException;
        
        $records = Order::where('user_id',$id)->where('status',0)->orderBy('ticketID','asc')->get();
        if(!$records) throw new ModelNotFoundException;

        return view('trade.index',[
            'records' => $records,
            'account' => $account,
        ]); 
    }

    public function create(Request $request)
    {
        $last_record_id = Order::latest()->first();
        $id = Auth::user()->user_id;

        if(!$last_record_id){
            $ticketid = "AOD1" ;
        } 
        else{
            $ticketid = "AOD" . ($last_record_id->id + 1);
        }
        $order = new Order();
        $order->user_id = $id;
        $order->ticketID = $ticketid;
        $order->margin = $request->margin;
        $order->pair = $request->instrument;
        $order->total_units = $request->unit;
        $order->available_units = $request->unit;
        $order->type = $request->type;
        $order->entry_price = $request->entry;
        $order->save();

        $all_orders = Order::where('user_id',$id)->where('status',0)->get();
        $used_margin = 0;
        foreach($all_orders as $order)
        {
            $used_margin += $order->margin;
        }

        $account = Account::where('user_id',$id)->first();
        $account->balance = $account->balance - $request->margin;
        $account->margin = $account->margin - $request->margin;
        $account->margin_used = $used_margin/($account->margin+ $used_margin)*100;
        $account->save();
    
        return response()->json(['ticketID'=> $ticketid]);
    }

    public function close(Request $request)
    {
        $order = Order::where('ticketID',$request->ticketID)->first();
        $units_used = $order->remaining_units;
        $pair = $order->pair;
        $type= $order->type;
        if ($request->remaining_units ==0){ $order->status = 1;}
        $order->available_units = $request->remaining_units;
        $order->save();

        $trades = new Trades();
        $trades->user_id = Auth::user()->user_id;
        $trades->ticketID = $request->ticketID;
        $trades->pair =  $pair;
        $trades->type = $type;
        $trades->units = $units_used - $request->remaining_units;
        $trades->entry_price = $request->entry;
        $trades->exit_price =  $request->exit;
        $trades->cost =  $request->cost;
        $trades->profit =  $request->profit;
        $trades->save();

        $all_orders = Order::where('user_id',$id)->where('status',0)->get();
        $used_margin = 0;
        foreach($all_orders as $order)
        {
            $used_margin += $order->margin;
        }

        $account = Account::where('user_id',$id)->first();
        $account->balance = $account->balance + $request->profit + $request->margin;
        $account->margin = $account->margin + $request->profit + $request->margin;
        $account->margin_used = $used_margin/($account->margin+ $used_margin)*100;
        $account->save();

        return response()->json(['ticketID'=> $request->ticketID]);
    }




    // public function getOANDA()
    // {
    //  $url = "https://api-fxpractice.oanda.com/v3/accounts/101-011-15419455-001/instruments/EUR_USD/candles?count=5000&price=M&granularity=M1&smooth=true";
    //  $curl = curl_init();
    //     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  //Disable SSL
    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => $url,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_FOLLOWLOCATION => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "GET",
    //         CURLOPT_HTTPHEADER => array(
    //             'Authorization: Bearer 8821ff866c725c0f3fc2ba5bc9fe9a6e-ad7c4f2e55fecfbfd8bdd5fa72a68697',
    //             'Content-Type: application/json'
    //         ),
    //     ));
        
    //     $res = curl_exec($curl);
    //     $err = curl_error($curl);
    //     curl_close($curl);
    //     $response = json_encode($res);

    //     //Retrieve all the records
    //     $records = Order::where('status','pending')->get();
    //     if(!$records) throw new ModelNotFoundException;

    //     $id = Auth::user()->user_id;
    //     $account = Account::where('user_id',$id)->first();
        

    //     return view('trade.index',[
    //         'response' => $response,
    //         'records' => $records,
    //         'account' => $account,
    //     ]); 

    // }

    // public function getCandle(Request $request)
    // {
    //     $instrument = $request->ins;
    //     $granularity = $request->gra;
    //     $url = "https://api-fxpractice.oanda.com/v3/accounts/101-011-15419455-001/instruments/".$instrument."/candles?count=1&price=M&granularity=".$granularity."&smooth=true";
    //     $curl = curl_init();
    //     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  //Disable SSL
    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => $url,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_FOLLOWLOCATION => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "GET",
    //         CURLOPT_HTTPHEADER => array(
    //             'Authorization: Bearer 8821ff866c725c0f3fc2ba5bc9fe9a6e-ad7c4f2e55fecfbfd8bdd5fa72a68697',
    //             'Content-Type: application/json'
    //         ),
    //     ));
    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);
    //     curl_close($curl);
    //     return response()->json(array('response'=> $response),200);
    // }

    // public function getCandleStick(Request $request)
    // {
    //     $instrument = $request->ins;
    //     $granularity = $request->gra;
    //     $url = "https://api-fxpractice.oanda.com/v3/accounts/101-011-15419455-001/instruments/".$instrument."/candles?count=5000&price=M&granularity=".$granularity."&smooth=true";
    //     $curl = curl_init();
    //     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  //Disable SSL
    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => $url,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_FOLLOWLOCATION => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "GET",
    //         CURLOPT_HTTPHEADER => array(
    //             'Authorization: Bearer 8821ff866c725c0f3fc2ba5bc9fe9a6e-ad7c4f2e55fecfbfd8bdd5fa72a68697',
    //             'Content-Type: application/json'
    //         ),
    //     ));
    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);
    //     curl_close($curl);
    //     return response()->json(array('response'=> $response),200);
    // }


}
