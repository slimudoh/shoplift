<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $timestamp = true;

    protected $fillable = [
        'user_id','order_id','order_date','required_date', 'ship_date', 'transaction_status',
        'err_loc','err_msg','paid','payment_date','fulfilled'
    ];
    public function order()
    {
        return $this->belongsTo('App\Order');

    }
    public function user()
    {
        return $this->belongsTo('App\User');

    }

}
