<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
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
		'status',
	];

	public function account(){
        return $this->belongsTo('App\Models\Account');
    }
}
