<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image', 'price', 'discount_price', 'category_id'];


    protected $table = 'products';

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function productSize() {
        return $this->hasMany(ProductSize::class);
    }

    public function productColor (){
        return $this->hasMany(ProductColor::class);
    }

    public function productColorSize() {
        return $this->hasMany(ProductColorSize::class);
    }
}
