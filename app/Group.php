<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'other'
    ];
    
    public function driver() {
        return $this->belongsToMany('App\Driver');
    }
    
    public function location() {
        return $this->hasMany('App\Location');
    }
}
