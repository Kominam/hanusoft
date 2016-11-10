<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class PostType extends Model
{
	use Sluggable;
    use SluggableScopeHelpers;

     public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    protected $table="post_types";
    protected $fillable =['name', 'description'];
    protected $guarded = ['id'];
    public $timestamp =true;

    public function posts() {
        return $this->hasMany('App\Post');
    }
}
