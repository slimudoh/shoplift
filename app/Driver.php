<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'email',
    ];

    public function group() {
        return $this->belongsToMany('App\Group');
    }
    
    public function location() {
        return $this->hasOne('App\Location');
    }
}
