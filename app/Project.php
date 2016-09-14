<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    //
    protected $table="projects";
    protected $fillable =['id', 'name', 'description', 'status', 'group_id','lang_code_id'];
    public $timestamp =true;

    public function group() {
    	return $this->belongsTo('App\Group');
    }
    public function language() {
    	return $this->belongsTo('App\Language')
    }
    public function members() {
    	return $this->belongsToMany('App\Member');
    }
}
