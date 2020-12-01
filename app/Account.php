<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Order;

class Account extends Model
{
    protected $table = 'accounts';

    protected $fillable =[
        'username',
        'balance',
        'margin',
        'margin_used',
        'leverage'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function order(){
        return $this->hasMany(Order::class);
    }
}
