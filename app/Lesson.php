<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $timestamp = true;

    protected $fillable = [
        'course_id','lesson_sku','lesson_name', 'long_description', 'short_description','level','price','active','duration','discount_available','picture','ranking'
    ];

    public function course()
    {
        return $this->belongsTo('App\Course');

    }



}
