<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    //
    protected $table="post_types";
    protected $fillable =['name', 'description'];
    protected $guarded = ['id'];
    public $timestamp =true;

    public function posts() {
        return $this->hasMany('App\Post');
    }
}
