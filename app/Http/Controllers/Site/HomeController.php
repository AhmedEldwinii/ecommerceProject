<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{


    public function index()
    {
        $mainCategory = Category::where('parent_id' , null)->orWhere('parent_id', 0)->get();
        return view('site.index', compact('mainCategory'));
    }



    public function index2($name)
    {
        if(Category::where('name' , $name)->exists()){
            $category = Category::where('name',$name)->first();
            $products = Product::where('category_id' , $category->id)->orderBy('id', 'asc')->get();

            return view('site.product.index', compact( 'category' , 'products'));
        }
        else{
            return redirect('/')->with('name' , "this category doesn't exits");
        }




    }
}
