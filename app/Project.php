<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    
    public function images()
    {
        return $this->belongsToMany('App\Image');
    }
    
    public function videos()
    {
        return $this->belongsToMany('App\Video');
    }
}