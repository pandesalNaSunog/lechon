<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-style/>
    <x-jquery/>
    <title>Order Summary</title>
</head>
<body>
    <x-toast/>
    <x-nav :active="$active"/>
    <x-order-summary-section :addresses="$addresses" :order="$order" :total="$total"/>
    
</body>
</html>