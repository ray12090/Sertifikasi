<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'product_id', 'name', 'product_name', 'quantity', 'days', 'total_price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public static function totalOrderPrice()
    {
        return self::sum('total_price');
    }
}
