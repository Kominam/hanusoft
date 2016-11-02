<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    protected $table="todo_items";
    protected $fillable =['content', 'due_date', 'project_id'];
    public $timestamp =true;

    public function users() {
    	return $this->belongsToMany('App\User');
    }
    public function project() {
    	return $this->belongsTo('App\Project');
    }
}
