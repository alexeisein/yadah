<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'slug',];

    public function setNameAttribute($name)
    {
    	return $this->attributes['name'] = strtolower($name);
    }

    // RELATIONSHIP WITH POST
    public function posts()
    {
      return $this->belongsToMany('App\Model\User\Post');
    }
}
