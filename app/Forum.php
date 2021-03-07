<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forums';

    protected $fillable = [
        'forum_id',
        'user_id',
        'tag',
        'title',
        'contents'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','user_id');
    }

    public function comment(){
        return $this->hasMany(Comment::class,'forum_id','forum_id')->orderBy('created_at','asc');
    }

}
