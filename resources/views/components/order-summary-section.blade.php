@props(['order','total','addresses'])
<div class="bg-light py-5">
    <div class="container">
        <div class="card shadow col-lg-6 mx-auto">
            <div class="card-header">
                <h4 class="fw-bold text-center">Order Summary</h4>
                <p class="text-center">{{count($order)}} item/s</p>
            </div>
            <div class="card-body">
                
                @foreach($order as $orderItem)

                <div class="card shadow mt-3">
                    <div class="card-body">
                        <div class="d-flex">
                            <img style="height: 100px; width: 100px; object-fit: cover" src="/public/storage/{{$orderItem['image']}}" alt="" class="img-fluid">
                            <div class="ms-2">
                                <h3 class="fw-bold text-secondary">{{$orderItem['name']}}</h3>
                                <i>Quantity: {{$orderItem['quantity']}}</i><br>
                                <p class="text-danger">&#8369; {{$orderItem['price']}}</p>
                                
                                @if($orderItem['freebie'] != "0")
                                <p>Added Freebie: <strong>{{$orderItem['freebie']}}</strong></p>
                                @endif
                            </div>
                            <h6 class="align-self-center ms-auto text-danger fw-bold">&#8369; {{$orderItem['total']}}</h6>
                        </div>
                    </div>
                </div>
                                    
                @endforeach

                
                <hr>
                <div class="d-flex justify-content-between">
                    <h4 class="fw-bold">Total</h4>
                    <h4 class="fw-bold">&#8369; {{$total}}</h4>
                </div>
                <form method="POST" action="/cart/checkout/confirm">
                    @csrf
                    <label class="fw-bold mt-4">Select Delivery Address</label>
                    <select name="delivery_address" id="" class="form-select">
                        <option value="Pickup">For Pickup</option>
                        @foreach($addresses as $address)
                        <option value="{{$address->id}}">{{$address->address}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-danger w-100 mt-3">Confirm Checkout</button>
                </form>
                
            </div>
        </div>
    </div>
    
</div>