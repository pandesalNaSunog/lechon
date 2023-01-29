@props(['products'])
<div class="bg-light py-5">
    <div class="container">
        <div class="row row-cols-md-2 row-cols-lg-4 g-3" style="margin-top: -80px;">
            @foreach($products as $product)
                <div class="col">
                    <div class="card shadow">
                        <img src="/lolabertarevamp/public/storage/{{$product->image}}" style="height: 200px; width: 100%; object-fit: cover" alt="" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h3 class="fw-bold text-truncate">{{$product->name}}</h3>
                            <p class="text-truncate">{{$product->description}}</p>
                            <a href="/lolabertarevamp/products/{{$product->id}}"><button class="btn btn-outline-danger w-100 mt-3">View</button></a>
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div>
        <div class="py-2">
            {{$products->links()}}
        </div>
    </div>
</div>