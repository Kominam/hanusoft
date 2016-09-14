<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    protected $table="groups";
    protected $fillable =['id', 'name', 'lang_code_id'];
    public $timestamp =true;

    public function projects() {
    	return $this->hasMany('App\Project');
    }
    public function language() {
    	return $this->belongsTo('App\Language');
    }
    public function members() {
    	return $this->hasMany('App\Members');
    }
}
