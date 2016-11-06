<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

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
    	return $this->belongsToMany('App\Skill');
    }
    public function users() {
    	return $this->belongsToMany('App\User');
    }

    public function images() {
        return $this->hasMany('App\ProjectImage');
    }

    public function invitation() {
        return $this->hasOne('App\Invitation');
    }

    public function states() {
        return $this->hasMany('App\State');
    }

    public function todo_items() {
        return $this->hasMany('App\TodoItem');
    }
    public function displayStartDate() {
        return Carbon::createFromFormat('Y-m-d', $this->start_date)->toFormattedDateString();
    }
    public function displayPlanEndDate() {
        return Carbon::createFromFormat('Y-m-d', $this->plan_end_date)->toFormattedDateString();
    }
    public function displayActualEndDate() {
        return Carbon::createFromFormat('Y-m-d', $this->actual_end_date)->toFormattedDateString();
    }

}
