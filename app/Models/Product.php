<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_name', 'product_description', 'photo', 'price', 'category1', 'category2', 'stock'];

    public static function jumlahProduct()
    {
    return self::count();
    }
}
