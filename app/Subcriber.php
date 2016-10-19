<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcriber extends Model
{
    protected $table="subcribers";
    protected $fillable =['email'];
    public $timestamp =true;
}
