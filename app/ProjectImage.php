<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $table="projectimages";
    protected $fillable =['img_name', 'description'];
    protected $guarded = ['project_id'];
    public $timestamp =true;

    public function project() {
    	return $this->belongsTo('App\Project');
    }
}
