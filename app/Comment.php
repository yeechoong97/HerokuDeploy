<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    protected $fillable = [
        'forum_id',
        'comment_id',
        'user_id',
        'contents'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','user_id');
    }

    public function forum(){
        return $this->belongsTo(Forum::class,'forum_id','forum_id');
    }
}
