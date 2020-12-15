<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Order;
use App\Account;
use App\Trades;
use Carbon\Carbon;
use Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function show(Request $request)
    {
        $id = Auth::user()->user_id;

        $start = DB::table('orders')
		->where('orders.user_id',$id)
		->join('trades', 'orders.ticketID', '=', 'trades.ticketID')
        ->select('trades.created_at')
        ->orderby('trades.created_at','asc')
        ->first();

        $trades = DB::table('orders')
		->where('orders.user_id',$id)
		->join('trades', 'orders.ticketID', '=', 'trades.ticketID')
		->select('orders.user_id','orders.ticketID','orders.pair','orders.type','orders.entry_price','trades.units','trades.exit_price','trades.cost','trades.profit','trades.created_at')
		->orderby('created_at','desc')
        ->paginate(10);


        return view('order.index',[
            'trades'=> $trades,
            'start'=> $start,
        ]);
    }

    public function fetch(Request $request)
    {
        if ($request->ajax()) 
        {
            $id = Auth::user()->user_id;

            $trades = DB::table('orders')
            ->where('orders.user_id',$id)
            ->join('trades', 'orders.ticketID', '=', 'trades.ticketID')
            ->select('orders.user_id','orders.ticketID','orders.pair','orders.type','orders.entry_price','trades.units','trades.exit_price','trades.cost','trades.profit','trades.created_at')
            ->whereDate('trades.created_at','>=',$request->start)
            ->whereDate('trades.created_at','<=',$request->end)
            ->orderBy($request->sort,$request->order)
            ->paginate(10);

            return view('subpage.order-table',[
                    'trades' => $trades,
                    ])->render();
        }
    }

}
