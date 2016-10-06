<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    //
    protected $table="posts";
    protected $fillable =['id', 'title', 'content', 'img_cover', 'user_id'];
    public $timestamp =true;

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
