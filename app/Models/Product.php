<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cart;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image','price'];
    public $timestamps = false;
    public function cart()
    {
        return $this->hasOne(Cart::class,'id_product');
    }
}
