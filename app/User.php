<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','address','city','state','postal_code','phone','role','status','user_ip','activation'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function code() {
        return $this->hasOne('App\Code');
    }
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
    public function social() {
        return $this->hasMany('App\Social');
    }
    public function avatar() {
        
        if(isset($this->social()->first()->avatar)){
            $avatar = $this->social()->first()->avatar;
        }else{
            return 'https://placehold.it/32x32';
        }
        
        if(empty($avatar)){
            return 'https://placehold.it/32x32';
        }else{
            return $avatar;
        }
    }

    public function email() {
        if(empty($this->email)){
            if($this->social()->first()->email){
                return $this->social()->first()->email;
            }else{
                return false;
            }
        }else{
            return $this->email;
        }
    }


    
    
}
