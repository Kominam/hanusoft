<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Post extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $table="posts";
    protected $fillable =['tittle', 'content','slug'];
    protected $guarded =['id', 'user_id'];
    public $timestamp =true;

    public function user() {
    	return $this->belongsTo('App\User');
    }
    public function comments() {
    	return $this->hasMany('App\Comment');
    }
    public function resources() {
        return $this->hasMany('App\Resource');
    }

    public function type() {
        return $this->belongsTo('App\PostType');
    }

     public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'tittle'
            ]
        ];
    }
}
