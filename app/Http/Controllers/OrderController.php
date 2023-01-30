<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Address;
class OrderController extends Controller
{
    public function myOrders(){
        $id = auth()->user()->id;
        $orders = Order::where('user_id', $id)->get();

        $orderList = array();
        foreach($orders as $order){
            $productIds = explode('*', $order->product_ids);
            $quantities = explode('*', $order->quantities);

            foreach($productIds as $key => $productId){
                $product = Product::where('id', $productId)->first();
                $quantity = $quantities[$key];
                $total = $product->price * $quantity;
                $orderList[] = [
                    'image' => $product->image,
                    'name' => $product->name,
                    'quantity' => $quantity,
                    'price' => number_format($product->price, 2),
                    'total' => number_format($total, 2)
                ];
            }
            

        }
        return view('my-orders',[
            'order_list' => $orderList,
            'active' => 'my-orders',
            'orders' => $orders
        ]);
    }
    public function confirmCheckout(Request $request){
        $fields = $request->validate([
            'delivery_address' => 'required'
        ]);

        if($fields['delivery_address'] == "Pickup"){
            $orderType = "Pickup";
        }else{
            $orderType = "Delivery";
        }

        $deliveryAddress = $fields['delivery_address'];
        $userId = auth()->user()->id;
        $carts = Cart::where('user_id', $userId)->get();
        $productIds = "";
        $quantities = "";

        

        foreach($carts as $key => $cart){
            $product = Product::where('id', $cart->product_id)->first();
            if(count($carts) != $key + 1){
                $productIds .= $cart->product_id . "*";
                $quantities .= $cart->quantity . "*";
            }else{
                $productIds .= $cart->product_id;
                $quantities .= $cart->quantity;
            }
            $newQuantity = $product->quantity - $cart->quantity;
            $product->update([
                'quantity' => $newQuantity
            ]);
        }
        $fields = [
            'product_ids' => $productIds,
            'quantities' => $quantities,
            'user_id' => $userId,
            'delivery_address' => $deliveryAddress,
            'order_type' => $orderType
        ];

        Order::create($fields);
        Cart::where('user_id', $userId)->delete();
        return redirect('/')->with('message', 'Order has been successfully placed.');
    }
    public function checkout(){
        $userId = auth()->user()->id;
        $carts = Cart::where('user_id', $userId)->get();
        $addresses = Address::where('user_id', $userId)->get();
        $grandTotal = 0;
        $data = array();
        if(count($carts) == 0){
            return back()->with('message','Your cart is empty.');
        }
        foreach($carts as $cart){
            $productId = $cart->product_id;

            $product = Product::where('id', $productId)->first();
            $total = $cart->quantity * $product->price;
            $data[] = [
                'id' => $cart->id,
                'image' => $product->image,
                'name' => $product->name,
                'price' => $product->price,
                'available' => $product->quantity,
                'quantity' => $cart->quantity,
                'total' => number_format($total,2)
            ];
            $grandTotal += $total;
        }

        return view('order-summary',[
            'order' => $data,
            'total' => number_format($grandTotal, 2),
            'addresses' => $addresses,
            'active' => 'order-summary'
        ]);
    }
}
