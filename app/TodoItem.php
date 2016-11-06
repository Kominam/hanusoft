<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class TodoItem extends Model
{
    protected $table="todo_items";
    protected $fillable =['content', 'due_date', 'project_id'];
    public $timestamp =true;

    public function users() {
    	return $this->belongsToMany('App\User')->withPivot('status')->withTimestamps();
    }
    public function project() {
    	return $this->belongsTo('App\Project');
    }
    public function displayDueDate()
	{
		$due_date = Carbon::createFromFormat('Y-m-d', $this->due_date);
    	return $due_date->diffForHumans(Carbon::now());
	}
}
