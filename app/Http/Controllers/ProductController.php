<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Freebee;
use App\Models\Carts;
class ProductController extends Controller
{
    public function updateHasFreebie(Request $request){
        
    }
    public function index(){
        $products = Product::latest()->filter(request(['search']))->paginate(4);
        return view('products',[
            'active' => 'products',
            'products' => $products
        ]);
    }
    public function adminProductsIndex(){
        $products = Product::latest()->filter(request(['search']))->paginate(5);
        $freebies = Freebee::latest()->paginate(5);
        return view('admin.products',[
            'active' => 'inventory',
            'freebies' => $freebies,
            'products' => $products
        ]);
    }

    public function viewProduct(Product $product){
        return view('view-product',[
            'product' => $product,
            'active' => 'view-product'
        ]);
    }

    public function editProduct(Request $request, Product $product){
        $fields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'has_freebie' => 'required'
        ]);


        if($request->hasFile('image')){
            $fields['image'] = $request->file('image')->store('image','public');
        }

        $product->update($fields);
        return redirect('/admin/inventory')->with('message', 'Successfully edited the product');
    }

    public function destroy(Product $product){
        $product->delete();
        $carts = Carts::where('product_id', $product->id)->get();
        $carts->delete();
        return redirect('/admin/inventory')->with('message', 'Successfully deleted product');
    }

    public function adminShow(Product $product){
        return view('admin.edit-product',[
            'product' => $product,
            'active' => 'edit-product'
        ]);
    }
    public function store(Request $request){
        $fields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'has_freebie' => 'required'
        ]);

        if($request->hasFile('image')){
            $fields['image'] = $request->file('image')->store('images','public');
            Product::create($fields);
            return redirect('/admin/inventory')->with('message','Product Added Successfully!');
        }

        return back()->withErrors(['image' => 'Product image is required'])->onlyInput('image');
    }

    public function create(){
        return view('admin.create',[
            'active' => 'create'
        ]);
    }
}
