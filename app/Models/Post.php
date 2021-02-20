<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['created_at'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }

    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function thumbnail()
    {
        if ($this->thumbnail) {
            return asset('thumbnail/'.$this->thumbnail);
        }else {
            return asset('/images/no-thumbnail.png');
        }
    }
    
}
