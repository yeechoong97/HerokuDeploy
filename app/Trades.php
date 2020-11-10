<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trades extends Model
{
    protected $fillable = [
		'user_id',
		'ticketID',
		'pair',
		'units',
		'type',
		'entry_price',
		'exit_price',
		'cost',
		'profit',
    ];
    
    public function order(){
        return $this->belongsTo('App\Models\Order');
    }
}
