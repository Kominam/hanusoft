<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    protected $table="lang_codes";
    protected $fillable =['id', 'name'];
    public $timestamp =true;


    public function groups() {
    	return $this->hasMany('App\Group');
    }
    public function projects() {
    	return $this->hasMany('App\Project');
    }
    public function users() {
        return $this->belongsToMany('App\User');
    }
}
