<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    protected $table="groups";
    protected $fillable =['id', 'name'];
    public $timestamp =true;

   /* public function product() {
    	return $this->hasMany('App\Product');
    }*/
}
