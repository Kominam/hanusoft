<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','bio'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function position() {
        return $this->belongsTo('App\Position');
    }
    
    public function projects() {
        return $this->belongsToMany('App\Project',  'project_user', 'user_id', 'project_id');
    }
    public function skills() {
        return $this->belongsToMany('App\Skill',  'skill_user', 'user_id', 'skill_id')->withPivot('level');
    }

    public function posts() {
        return $this->hasMany('App\Post');
    }

    public function grade() {
        return $this->belongsTo('App\Grade');
    }

    public function invitations() {
        return $this->belongsToMany('App\Invitation', 'invitation_user');
    }

    public function project_chats() {
        return $this->belongsToMany('App\ProjectChat','project_chat_user', 'user_id', 'project_chat_id')->withPivot('message')->withTimestamps();
    }
    

}
