<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    //
    protected $table="projects";
    protected $fillable =['name', 'description', 'link_preview'];
    protected $guarded = ['id', 'type_id'];
    public $timestamp =true;

    public function type() {
        return $this->belongsTo('App\ProjectType');
    }

    public function skills() {
    	return $this->belongsToMany('App\Project',  'project_skill', 'skill_id', 'project_id');
    }
    public function users() {
    	return $this->belongsToMany('App\User');
    }

}
