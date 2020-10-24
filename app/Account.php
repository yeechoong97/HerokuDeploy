<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable =[
        'username',
        'balance',
        'margin',
        'margin_used',
        'leverage'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function order(){
        return $this->hasMany('App\Models\Order');
    }
}
