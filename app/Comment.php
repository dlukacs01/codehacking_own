<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    protected $fillable = [

        'post_id',
        'author',
        'email',
        'photo',
        'body',
        'is_active'

    ];

    public function replies(){

        return $this->hasMany('App\CommentReply');

    }

    // which post the comment belongs to
    public function post(){

        return $this->belongsTo('App\Post');

    }

}
