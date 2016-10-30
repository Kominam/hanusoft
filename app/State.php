<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table="states";
    protected $fillable =['content', 'due_date', 'status', 'project_id'];
    public $timestamp =true;

    public function project() {
    	return $this->belongsTo('App\Project');
    }
}
