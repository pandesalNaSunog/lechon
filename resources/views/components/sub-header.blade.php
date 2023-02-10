@props(['active'])
<div id="sub-header" style="height: 40vh; width: 100%">
    <div class="d-flex align-items-center" style="height: 100%; width: 100%">
        <div class="container">
            <h1 class="fw-bold text-center text-light sub-header-text">
                @if($active == 'products')
                OUR PRODUCTS
                @elseif($active == 'cart')
                MY CART
                @elseif($active == 'profile')
                MY PROFILE
                @elseif($active == 'my-orders')
                MY ORDERS
                @elseif($active == 'pricelist')
                PRICELIST
                @endif
            </h1>
        </div>
        
        
    </div>
</div>