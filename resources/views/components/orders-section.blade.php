@props(['orders'])
<div class="bg-light py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-3">
            @foreach($orders as $order)
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        {{$order->product_ids}}
                    </div>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>
</div>