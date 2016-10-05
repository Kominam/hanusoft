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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
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
