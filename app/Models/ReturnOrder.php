<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnOrder extends Model
{
    protected $fillable = ['user_id', 'product_id', 'product_name', 'quantity', 'days', 'total_price'];
}

