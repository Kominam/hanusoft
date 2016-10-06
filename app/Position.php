<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //
    protected $table="positions";
    protected $fillable =['id', 'name', 'description'];
    public $timestamp =true;

    public function users() {
    	 return $this->hasMany('App\User');
    }
}
