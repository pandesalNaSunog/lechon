<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-style/>
    <x-fonts/>
    <title>Products | D' Original Lola Berta's Lechon Haus</title>
</head>
<body class="bg-dark">
    <x-nav :active="$active"/>
    <x-sub-header/>
    <x-products-section :products="$products"/>
    <x-footer-section/>
</body>
</html>