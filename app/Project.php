<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

use DB;

use Cviebrock\EloquentSluggable\Sluggable;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Project extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;
    //
    protected $table="projects";
    protected $fillable =['name', 'description', 'link_preview'];
    protected $guarded = ['id', 'type_id'];
    public $timestamp =true;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function type() {
        return $this->belongsTo('App\ProjectType');
    }

    public function skills() {
    	return $this->belongsToMany('App\Skill');
    }
    public function users() {
    	return $this->belongsToMany('App\User');
    }

    public function images() {
        return $this->hasMany('App\ProjectImage');
    }

    public function invitation() {
        return $this->hasOne('App\Invitation');
    }

    public function states() {
        return $this->hasMany('App\State');
    }

    public function todo_items() {
        return $this->hasMany('App\TodoItem');
    }
    public function displayStartDate() {
        return Carbon::createFromFormat('Y-m-d', $this->start_date)->toFormattedDateString();
    }
    public function displayPlanEndDate() {
        return Carbon::createFromFormat('Y-m-d', $this->plan_end_date)->toFormattedDateString();
    }
    public function displayActualEndDate() {
        if ($this->actual_end_date) {
             return Carbon::createFromFormat('Y-m-d', $this->actual_end_date)->toFormattedDateString();
        }
        else
            return "N/A";
    }
    public function displayCurPercentageCompleted() {
        $total = $this->todo_items()->count();
        $todo_items = $this->todo_items->pluck('id')->all();
        if($total!=0) {
            $completed = DB::table('todo_item_user')->whereIn('todo_item_id', $todo_items)->where('status','Done')->count();
            $CurPercentageCompleted = ($completed/$total)*100;
            return $CurPercentageCompleted.'%';
        } else {
            return "N/A";
        }       
    }
}
