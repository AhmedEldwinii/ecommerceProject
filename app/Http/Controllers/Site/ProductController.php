<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductColor;

class ProductController extends Controller
{
    public function show($id)
    {


        $product = Product::with('images' , 'category')->find($id);
        $colors = ProductColor::where('product_id' , $product->id)->get();
        return view('site.product.show' , compact('product' , 'colors'));


    }
}
