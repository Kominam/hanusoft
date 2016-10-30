<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $table="invitations";
    protected $fillable =['leadership_id', 'project_id'];
    public $timestamp =true;

    public function users() {
      return $this->belongsToMany('App\User')->withPivot('response');
    }
}
