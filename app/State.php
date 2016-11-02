<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table="states";
    protected $fillable =['content', 'due_date', 'status', 'project_id'];
    public $timestamp =true;

    public function project() {
    	return $this->belongsTo('App\Project');
    }

    public function displayDueDate()
	{
    	return Carbon::createFromFormat('Y-m-d', $this->due_date)->toFormattedDateString();
	}
}
