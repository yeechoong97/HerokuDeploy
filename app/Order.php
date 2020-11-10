<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
		'user_id',
		'ticketID',
		'pair',
		'total_units',
		'remaining_units',
		'type',
		'entry_price',
		// 'exit_price',
		// 'cost',
		// 'profit',
		'status',
	];

	public function account(){
        return $this->belongsTo('App\Models\Account');
	}
	
	public function trades(){
		return $this->hasMany('App\Models\Trades');
	}
}
