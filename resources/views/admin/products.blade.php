<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-style/>
    <title>Admin | Products</title>
</head>
<body>
    <x-admin-nav :active="$active"/>
    <x-section-cards :active="$active">
        <x-admin-products-table :products="$products"/>
    </x-section-cards>
    <div class="container">
        <div class="py-3">
            {{$products->links()}}
        </div>
    </div>
    <div class="container">
        <a href="../admin/add-product"><button class="btn btn-danger px-5 fw-bold">Add Product</button></a>
    </div>
    
    
</body>
</html>