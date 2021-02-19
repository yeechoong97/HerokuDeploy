<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forum';

    protected $fillable = [
        'user_id',
        'title',
        'contents'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','user_id');
    }

}
