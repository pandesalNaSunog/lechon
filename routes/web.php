<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/products', [ProductController::class, 'index']);


//Admin Page
Route::get('/admin/users',[UserController::class, 'index'])->middleware('auth');

Route::get('/admin', function(){
    return view('admin.login');
})->middleware('guest');

Route::get('/pricelist', function(){
    return view('pricelist',[
        'active' => 'pricelist'
    ]);
});
Route::get('/admin/sales', [OrderController::class, 'showSales'])->middleware('auth');
Route::put('/admin/inventory/freebie/{freebie}', [FreebeeController::class, 'update'])->middleware('auth');
Route::get('/admin/inventory/freebie/{freebie}', [FreebeeController::class, 'show'])->middleware('auth');
Route::post('/cart/{cart}/add-freebie',[CartController::class, 'addFreebie'])->middleware('auth');
Route::get('/admin/update-has-freebie',[ProductController::class, 'updateHasFreebie'])->middleware('auth');
Route::delete('/admin/inventory/freebie/{freebie}/delete', [FreebeeController::class, 'destroy'])->middleware('auth');
Route::post('/admin/inventory/add-freebee/add',[FreebeeController::class, 'store'])->middleware('auth');
Route::get('/admin/inventory/add-freebee',[FreebeeController::class, 'create'])->middleware('auth');
Route::post('/orders/{order}/add-status', [OrderController::class, 'addOrderStatus'])->middleware('auth');
Route::get('/orders', [OrderController::class, 'myOrders'])->middleware('auth');
Route::post('/profile/address',[AddressController::class, 'store'])->middleware('auth');
Route::get('/profile/edit', [UserController::class, 'showEdit'])->middleware('auth');
Route::post('/cart/checkout/confirm', [OrderController::class, 'confirmCheckout'])->middleware('auth');
Route::get('/cart/{cart}/remove',[CartController::class, 'deleteCart'])->middleware('auth');
Route::put('/cart/{cart}/update-quantity',[CartController::class, 'updateCartQuantity'])->middleware('auth');
Route::post('/products/{product}/add-to-cart', [CartController::class, 'addToCart'])->middleware('auth');
Route::get('/products/{product}', [ProductController::class, 'viewProduct']);
Route::get('/admin/orders',[OrderController::class, 'adminOrders'])->middleware('auth');
Route::get('/admin/orders/{order}',[OrderController::class, 'showOrder'])->middleware('auth');
Route::post('/admin/login',[UserController::class, 'adminLogin']);
Route::get('/admin/logout', [UserController::class, 'logout']);
Route::get('/admin/inventory',[ProductController::class, 'adminProductsIndex'])->middleware('auth');
Route::get('/admin/add-product',[ProductController::class, 'create']);
Route::get('/admin/inventory/{product}',[ProductController::class, 'adminShow']);
Route::put('/admin/inventory/{product}', [ProductController::class, 'editProduct']);
Route::delete('/admin/inventory/{product}',[ProductController::class, 'destroy']);
Route::post('/admin/inventory/add-product/store', [ProductController::class, 'store'])->middleware('auth');
Route::get('/login', [UserController::class, 'showLogin'])->middleware('guest');
Route::post('/login/authenticate', [UserController::class, 'customerLogin'])->middleware('guest');
Route::get('/signup', [UserController::class, 'viewsignup'])->middleware('guest');
Route::post('/signup/register', [UserController::class, 'signup'])->middleware('guest');
Route::get('/logout',[UserController::class, 'customerLogout'])->middleware('auth');
Route::get('/profile',[UserController::class,'profile'])->middleware('auth');
Route::get('/cart',[CartController::class, 'index'])->middleware('auth');
Route::post('/cart/checkout', [OrderController::class, 'checkout'])->middleware('auth');
Route::get('/', function(){
    if(auth()->user() != null){
        if(auth()->user()->user_type == 'admin'){
            auth()->logout();
        }
    }
    
    return view('index', [
        'active' => 'home'
    ]);
})->name('home');

