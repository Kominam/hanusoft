<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $table="resources";
    protected $fillable =['type', 'url'];
    protected $guarded =['id', 'post_id'];
    public $timestamp =true;

    public function post() {
    	return $this->belongsTo('App\Post');
}
