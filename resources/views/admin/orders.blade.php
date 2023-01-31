<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-style/>
    <title>Orders</title>
</head>
<body>
    <x-admin-nav :active="$active"/>
    <x-section-cards :active="$active">
        <x-admin-orders-section :order_data="$order_data"/>
    </x-section-cards>
    <div class="container mt-3">
        {{$orders->links()}}
    </div>
    
</body>
</html>