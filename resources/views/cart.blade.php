<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-style/>
    <title>My Cart</title>
</head>
<body>
    <x-nav :active="$active"/>
    <div class="container">
        <div class="card shadow mt-5">
            <div class="card-header">
                <h2 class="fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg><span class="ms-3">Shopping Cart</span></h2>
            </div>
            <div class="card-body">
                <div class="row row-cols-1 row-cols-lg-2 g-3">
                    @foreach($carts as $cart)
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body d-flex">
                                <img style="height: 100px; width: 100px; object-fit: cover" src="public/storage/{{$cart['image']}}" alt="" class="img-fluid">
                                <div class="ms-2">
                                    <h3 class="fw-bold text-secondary">{{$cart['name']}}</h3>
                                    <i>Available: {{$cart['available']}}</i>
                                    <input type="text" value="{{$cart['quantity']}}" class="form-control">
                                </div>
                                <div class="ms-auto">
                                    <button class="btn btn-danger">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
  <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
</svg><span class="ms-2">Continue Shopping</span></button>
            </div>
        </div>
    </div>
</body>
</html>