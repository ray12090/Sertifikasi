<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnOrder extends Model
{
    protected $fillable = ['user_id', 'product_id', 'product_name', 'quantity', 'borrow_date', 'return_date', 'total_price', 'stock'];
}

