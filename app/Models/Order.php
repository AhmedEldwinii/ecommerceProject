<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'status', 'payment_method', 'payment_status', 'payment_id',
                           'payment_amount', 'total_price', 'address', 'name', 'email',
                            'phone', 'country', 'city', 'postal_code', 'shipping_price'];

    protected $table = 'orders';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orderDetail(){
        return $this->belongsTo(OrderDetail::class);
    }
}
