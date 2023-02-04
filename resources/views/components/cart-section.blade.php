<div class="bg-light py-5">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="card shadow" >
                        <div class="card-header">
                            <h2 class="fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                            </svg><span class="ms-3">Shopping Cart</span></h2>
                        </div>
                        <div class="card-body">
                            @if(count($carts) == 0)
                            <div class="py-5 text-center text-secondary">
                                <h3>Empty</h3>
                            </div>
                            @endif
                            @error('quantity')
                                <x-error-text>{{$message}}</x-error-text>
                            @enderror
                            <div class="row row-cols-1 row-cols-lg-2 g-3">
                                
                                @foreach($carts as $cart)
                                <div class="col">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <img style="height: 100px; width: 100px; object-fit: cover" src="public/storage/{{$cart['image']}}" alt="" class="img-fluid">
                                                <div class="ms-2">
                                                    <h3 class="fw-bold text-secondary">{{$cart['name']}}</h3>
                                                    <i>Available: {{$cart['available']}}</i><br>
                                                </div>
                                            </div>
                                            
                                            <div class="ms-auto">
                                                <form action="/cart/{{$cart['id']}}/update-quantity" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="input-group mt-3">
                                                        <span class="input-group-text">Quantity:</span>
                                                        <input name="quantity" type="number" value="{{$cart['quantity']}}" class="form-control">
                                                        
                                                        <button class="btn btn-outline-danger">Confirm</button>
                                                    </div>
                                                    
                                                </form>
                                                @if($cart['has_freebie'] == 'yes')
                                                <form action="/cart/{{$cart['id']}}/add-freebie" method="POST">
                                                    @csrf
                                                    <label for="freebie" class="fw-bold mt-3">Select a Freebie: </label>
                                                    <div class="input-group">
                                                        <select name="freebie" class="form-select">
                                                            <option value=0 <?php if($cart['freebie_id'] == 0){ echo 'selected'; }?>>None</option>
                                                            @foreach($freebies as $freebie)
                                                                <option value="{{$freebie->id}}" <?php if($cart['freebie_id'] == $freebie->id){ echo 'selected'; } ?>>{{$freebie->name}}</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                        @error('freebie')
                                                        <x-error-text>{{$message}}</x-error-text>
                                                        @enderror
                                                        <button class="btn btn-outline-danger">Confirm</button>
                                                    </div>
                                                </form>
                                                    
                                                    
                                                @endif
                                                
                                                <a href="/cart/{{$cart['id']}}/remove">
                                                    <button class="btn btn-danger w-100 mt-3" onclick="return confirm('Remove this cart item?')">Remove</button>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/products">
                                <button class="btn btn-link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                                </svg><span class="ms-2">Continue Shopping</span></button>
                            </a>
                        </div>
                        
                    </div>
                    <form action="/cart/checkout" method="POST">
                        @csrf
                        <button class="btn btn-danger px-5 fw-bold mt-3">Checkout</button>
                    </a>
                </div>
                
            </div>
            
            
        </div>
    </div>