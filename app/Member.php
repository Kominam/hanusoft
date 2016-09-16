<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table="users";
    protected $fillable =['id', 'name','email','address','bio','url_fb','url_gmail', 'url_github', 'url_avt', 'group_id', 'lang_code_id'];
    public $timestamp =true;
    
    public function projects() {
        return $this->belongsToMany('App\Project',  'project_user', 'user_id', 'project_id');
    }
    public function group() {
    	return $this->belongsTo('App\Group');
    }
    public function languages() {
    	return $this->belongsToMany('App\Language',  'lang_code_member', 'user_id', 'lang_code_id');
    }
}
