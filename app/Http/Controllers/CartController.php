<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Freebee;
class CartController extends Controller
{

    public function addFreebie(Cart $cart, Request $request){
        $fields = $request->validate([
            'freebie' => 'required'
        ]);
        $cart->update([
            'freebie_id' => $fields['freebie']
        ]);

        return back()->with('message','Success');
    }
    public function deleteCart(Cart $cart){
        $userId = auth()->user()->id;
        if($cart->user_id == $userId){
            $cart->delete();
        }

        return back();
    }
    public function updateCartQuantity(Cart $cart, Request $request){
        $fields = $request->validate([
            'quantity' => 'required'
        ]);
        $productId = $cart->product_id;
        $product = Product::where('id', $productId)->first();
        if($fields['quantity'] > $product->quantity){
            return back()->withErrors(['quantity' => 'Quantity must not exceed current stock.'])->onlyInput('quantity');
        }

        $cart->update($fields);
        return back()->with('message', 'Success');
    }
    public function index(){
        $userId = auth()->user()->id;
        $carts = Cart::where('user_id', $userId)->get();
        $freebies = Freebee::all();
        $data = array();
        foreach($carts as $cart){
            $productId = $cart->product_id;

            $product = Product::where('id', $productId)->first();
            $data[] = [
                'id' => $cart->id,
                'image' => $product->image,
                'name' => $product->name,
                'price' => $product->price,
                'available' => $product->quantity,
                'quantity' => $cart->quantity,
                'has_freebie' => $product->has_freebie,
                'freebie_id' => $cart->freebie_id
            ];
        }
        return view('cart', [
            'carts' => $data,
            'active' => 'cart',
            'freebies' => $freebies
        ]);
    }

    public function addToCart(Product $product){
        $fields = [
            'product_id' => $product->id,
            'user_id' => auth()->user()->id,
            'quantity' => 1
        ];
        $fields['freebie_id'] = 0;
        if($product->quantity == 0){
            return back()->with('message', 'This product is out of stock');
        }
        $cart = Cart::where('product_id', $fields['product_id'])->first();
        if($cart){
            return back()->with('message', 'This product is already in your cart.');
        }

        Cart::create($fields);

        return redirect('/cart')->with('message', 'Product has been added to your cart.');
    }
}
