<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectResource extends Model
{
    protected $table="project_resources";
    protected $fillable =['name', 'description','url'];
    public $timestamp =true;

    public function project() {
    	return $this->belongsTo('App\Project');
    }
}
