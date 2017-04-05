<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $timestamp = true;

    protected $fillable = [
        'course_name','description','picture', 'lecturer_image', 'content_provider','active'
    ];

    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }
}
