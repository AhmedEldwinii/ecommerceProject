<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;

    protected $fillable = ['size', 'product_id'];

    protected $table = 'product_size';

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function productColorSize(){
        return $this->hasMany(ProductColorSize::class);
    }
}
