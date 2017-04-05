<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'longitude', 'latitude','other','driver_id'
    ];

    
    public function driver() {
        return $this->belongsTo('App\Driver');
    }
    
    public function group() {
        return $this->belongsTo('App\Group');
    }
    
    public function user() {
        return $this->belongsTo('App\User');
    }
}
