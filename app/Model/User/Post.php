<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'title',
        'subtitle',
        'description',
        'slug',
        'post_image',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function getDescriptionAttribute($description)
    {
    	return strtolower(htmlspecialchars($description));
    }

    public function setDescriptionAttribute($description)
    {
    	return $this->attributes['description'] = strtolower($description);
    }

    // RELATIONSHIP WITH Tag
    public function tags()
    {
      return $this->belongsToMany('App\Model\User\Tag');
    }

    // RELATIONSHIP WITH CATEGORY
    public function categories()
    {
      return $this->belongsTo('App\Model\User\Category');
    }
}
