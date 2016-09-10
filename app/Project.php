<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    //
    protected $table="projects";
    protected $fillable =['id', 'name'];
    public $timestamp =true;

   /* public function product() {
    	return $this->hasMany('App\Product');
    }*/
}
