@props(['order_list'])
<div class="bg-light py-5">
    <div class="container">
        @if(count($order_list) == 0)
        <h3 class="text-muted py-5 text-center">Empty</h3>
        @endif
        <div class="row row-cols-1 row-cols-md-2 g-3">
            
            @foreach($order_list as $order)
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <strong style="font-size: 15px">{{$order['date']}}</strong>
                        <p><strong>Delivery Address: </strong>{{$order['delivery_address']}}</p>
                        @php
                        $products = $order['products'];
                        @endphp
                        @foreach($products as $product)
                        <div class="card shadow mt-3">
                            <div class="card-body">
                                <div class="d-flex">
                                    <img src="/public/storage/{{$product['image']}}" style="height: 100px; width: 100px; object-fit: cover"alt="" class="img-fluid">
                                    <div class="ms-3">
                                        <h5 class="fw-bold text-muted">{{$product['name']}}</h5>
                                        <i>Quantity: {{$product['quantity']}}</i>
                                        <p class="text-danger">&#8369; {{$product['price']}}</p>
                                    </div>
                                    <div class="align-self-center ms-auto">
                                        <p class="fw-bold text-danger">Total: &#8369; {{$product['total']}}</p>
                                    </div>
                                </div>
                                @if($product['freebie'] != 0)
                                <p><strong>Added Freebie: </strong>{{$product['freebie']}}</p>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="card-footer">
                        <x-order-status :statuses="$order['statuses']"></x-order-status>
                        <hr>
                        <x-proof-of-payment :proof="$order['proof_of_purchase']">

                        </x-proof-of-payment>
                    </div>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>
</div>