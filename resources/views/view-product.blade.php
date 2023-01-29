<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-style/>
    <title>View Product | D' Original Lola Berta's Lechon Haus</title>
</head>
<body>
    <x-nav :active="$active"/>

    <div class="mt-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col">
                    <img class="img-fluid" src="/lolabertarevamp/public/storage/{{$product->image}}" alt="">
                </div>
                <div class="col">
                    <h1 class="fw-bold">{{$product->name}}</h1>
                    <i>Quanity: {{$product->quantity}}</i>
                    <h3 class="fw-bold text-secondary">&#8369; {{$product->price}}</h3>
                    <hr>
                    <p class="lead">{{$product->description}}</p>
                    <div class="d-flex">
                        <form method="POST" action="/lolabertarevamp/products/{{$product->id}}/add-to-cart">
                            @csrf
                            <button class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                            </svg><span class="ms-3">Add to Cart</span></button>
                        </form>
                        
                        <button class="ms-3 btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg><span class="ms-3">View Cart</span></button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>