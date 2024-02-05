<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','product_id'];
    protected $table='categories';

    public function child(){
        return $this->hasMany(Product::class,'parent_id');
    }

    public function product(){
        return $this->belongsTo(Product::class,'category_id');
    }
}
