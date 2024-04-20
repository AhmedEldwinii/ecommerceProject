<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index ()
    {
        $cartItems = Cart::instance('cart')->content();
        return view('site.product.cart' , ['cartItems' =>$cartItems]);
    }


    public function addToCart( Request $request )
    {
        $product = Product::find($request->id);
        $price = $product->discount_price ? $product->discount_price : $product->price;
        Cart::instance('cart')->add($product->id ,$product->name ,$request->quantity ,$price)->associate('App\Models\Product');
        return redirect()->back()->with('message' , 'success ! the item has been added successfully');
    }


    public function updateCart(Request $request)
    {
        Cart::instance('cart')->update($request->rowId , $request->quantity);
        return redirect()->route('cart.index');
    }


    public function removeItem(Request $request)
    {
        $rowId = $request->rowId;
        Cart::instance('cart')->remove($rowId);
        return redirect()->route('cart.index');
    }


    public function clearCart()
    {
        Cart::instance('cart')->destroy();
        return redirect()->route('cart.index');
    }
}
