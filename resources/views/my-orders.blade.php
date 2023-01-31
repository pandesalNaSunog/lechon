<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-jquery/>
    <x-style/>
    <title>My Orders</title>
</head>
<body class="bg-dark">
    <x-toast/>
    <x-nav :active="$active"/>
    <x-sub-header :active="$active"/>
    <x-orders-section :order_list="$order_list"/>
    <div class="bg-light py-5">
        <div class="container">
            {{$orders->links()}}
        </div>
        
    </div>
    <x-footer-section/>
</body>
</html>