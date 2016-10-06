<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    //
    protected $table="projecttypes";
    protected $fillable =['id', 'name', 'description'];
    public $timestamp =true;

    public function projects() {
    	return $this->hasMany('App\project');
    }

}
