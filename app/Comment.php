<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table="comments";
    protected $fillable =['name', 'email', 'content'];
    protected $guarded =['id', 'post_id'];
    public $timestamp =true;

    public function post() {
    	 return $this->belongsTo('App\Post');
    }

    public function reply_comments() {
    	return $this->hasMany('App\ReplyComment');
    }
}
