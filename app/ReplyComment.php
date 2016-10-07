<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReplyComment extends Model
{
    protected $table="reply_comments";
    protected $fillable =['name', 'email', 'content'];
    protected $guarded =['id', 'comment_id'];
    public $timestamp =true;

    public function comment() {
    	 return $this->belongsTo('App\Comment');
    }
}
