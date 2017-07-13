<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'categories';
    protected $fillable = [
    	'name',
    	'slug',
    ];

    public function setNameAttribute($name)
    {
    	return $this->attributes['name'] = strtolower($name);
    }

		// RELATIONSHIP WITH POST
		public function posts()
		{
			return $this->hasMany('App\Model\User\Post');
		}
}
