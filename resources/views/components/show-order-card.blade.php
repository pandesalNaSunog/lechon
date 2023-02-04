@props(['orderlist','total'])
<div class="bg-light py-5">
    <div class="container">
        <div class="card shadow col-lg-6 mx-auto">
            <div class="card-header">
                <h4 class="fw-bold text-center">Order Details</h4>
                <p class="text-center">{{count($orderlist['products'])}} item/s</p>
            </div>
            <div class="card-body">
                @php
                $products = $orderlist['products'];
                $statuses = $orderlist['statuses'];
                @endphp
                @foreach($products as $orderItem)

                <div class="card shadow mt-3">
                    <div class="card-body">
                        <div class="d-flex">
                            <img style="height: 100px; width: 100px; object-fit: cover" src="/public/storage/{{$orderItem['image']}}" alt="" class="img-fluid">
                            <div class="ms-2">
                                <h3 class="fw-bold text-secondary">{{$orderItem['name']}}</h3>
                                <i>Quantity: {{$orderItem['quantity']}}</i><br>
                                <p class="text-danger">&#8369; {{$orderItem['price']}}</p>
                            </div>
                            <h6 class="align-self-center ms-auto text-danger fw-bold">&#8369; {{$orderItem['total']}}</h6>
                        </div>
                        @if($orderItem['freebie'] != 0)
                        <p><strong>Added Freebie: </strong>{{$orderItem['freebie']}}</p>
                        @endif
                    </div>
                </div>
                                    
                @endforeach

                
                <hr>
                <div class="d-flex justify-content-between">
                    <h4 class="fw-bold">Total</h4>
                    <h4 class="fw-bold">&#8369; {{$total}}</h4>
                </div>
                
            </div>
            <div class="card-footer">
                <x-order-status :statuses="$statuses"></x-order-status>
                
                <form action="/orders/{{$orderlist['id']}}/add-status" method="POST">
                    @csrf
                    <label class="fw-bold">Add Order Status:</label>
                    <input type="text" class="form-control" name="status">
                    @error('status')
                    <x-error-text>{{$message}}</x-error-text>
                    @enderror
                    <button class="btn btn-danger w-100 mt-3">Confirm</button>
                </form>
                
            </div>
        </div>
    </div>
    
</div>