<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Input;
use App\Order;
use App\Account;
use App\Trades;
use App\User;
use Carbon\Carbon;
use Auth;

class FundController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = Auth::user()->user_id;
        $account = Account::where('user_id',$id)->first();
        $name = User::where('user_id',$id)->first()->name;
        return view('funds.index',[
            'account'=> $account,
            'name' => $name
        ]);
    }

    public function update(Request $request)
    {
        $id = Auth::user()->user_id;
        $account = Account::where('user_id',$id)->first();
        $account->leverage = $request->leverage;
        $account->save();
        return redirect()->route('fund-index')->with('alert', 'Leverage is Updated Successfully!'); 
    }

    public function withdraw_index()
    {
        $id = Auth::user()->user_id;
        $account = Account::where('user_id',$id)->first();
        $name = User::where('user_id',$id)->first()->name;
        return view('funds.withdraw',[
            'account'=> $account,
            'name' => $name
        ]);
    }

    public function withdraw_update(Request $request)
    {
        $id = Auth::user()->user_id;
        $account = Account::where('user_id',$id)->first();
        $account->balance = floatval($account->balance) - floatval($request->amount);
        $account->save();
        return redirect()->route('fund-index')->with('alert', 'Balance is Updated Successfully!'); 
    }

    public function deposit_index()
    {
        $id = Auth::user()->user_id;
        $account = Account::where('user_id',$id)->first();
        $name = User::where('user_id',$id)->first()->name;
        return view('funds.deposit',[
            'account'=> $account,
            'name' => $name
        ]);
    }

    public function deposit_update(Request $request)
    {
        $id = Auth::user()->user_id;
        $account = Account::where('user_id',$id)->first();
        $account->balance = floatval($account->balance) + floatval($request->amount);
        $account->save();
        return redirect()->route('fund-index')->with('alert', 'Balance is Updated Successfully!'); 
    }

}
