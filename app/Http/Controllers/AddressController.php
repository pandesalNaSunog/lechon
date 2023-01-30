<?php

namespace App\Http\Controllers;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
class AddressController extends Controller
{   
    public function store(Request $request){
        $id = auth()->user()->id;
        $fields = $request->validate([
            'address' => 'required'
        ]);
        $fields['user_id'] = $id;

        Address::create($fields);
        return redirect('/profile')->with('message', 'Address added successfully.');
    }
}
