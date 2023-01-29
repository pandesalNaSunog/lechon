<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
class CartController extends Controller
{
    public function index(){
        $userId = auth()->user()->id;
        $carts = Cart::where('user_id', $userId)->get();

        $data = array();
        foreach($carts as $cart){
            $productId = $cart->product_id;

            $product = Product::where('id', $productId)->first();
            $data[] = [
                'image' => $product->image,
                'name' => $product->name,
                'price' => $product->price,
                'available' => $product->quantity,
                'quantity' => $cart->quantity
            ];
        }
        return view('cart', [
            'carts' => $data,
            'active' => 'cart'
        ]);
    }

    public function addToCart(Product $product){
        $fields = [
            'product_id' => $product->id,
            'user_id' => auth()->user()->id,
            'quantity' => 1
        ];
        if($product->quantity == 0){
            return back()->with('message', 'This product is out of stock');
        }

        Cart::create($fields);

        return redirect('/cart')->with('message', 'Product has been added to your cart.');
    }
}
