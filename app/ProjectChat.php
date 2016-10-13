<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectChat extends Model
{
    protected $table="project_chats";
    protected $fillable =['name'];
    protected $guarded = ['id'];
    public $timestamp =true;

    public function users() {
    	return $this->belongsToMany('App\User')->withPivot('message')->withTimestamps();
    }
}
