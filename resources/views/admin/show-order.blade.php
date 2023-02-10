<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-style/>
    <x-jquery></x-jquery>
    <title>View Order Details</title>
</head>
<body>
    <x-toast/>
    <x-admin-nav :active="$active"/>
    <x-show-order-card :proof="$proof" :orderlist="$orderlist" :total="$total"/>
</body>
</html>