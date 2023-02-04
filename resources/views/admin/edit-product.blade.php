<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-style/>
    <x-jquery/>
    <title>Administrator | Edit Product</title>
</head>
<body>
    <x-admin-nav :active="$active"/>

    <div class="container">
        <div class="card shadow mx-auto mt-5 bg-light col-lg-6">
            <div class="card-body">
                <h3 class="fw-bold text-center">
                    Edit Product
                </h3>
                <form action="/admin/inventory/{{$product->id}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <label class="fw-bold">Name:</label>
                    <input type="text" class="form-control" name="name" value="{{$product->name}}">
                    @error('name')
                    <x-error-text>{{$message}}</x-error-text>
                    @enderror
                    <label class="fw-bold mt-3">Description:</label>
                    <input type="text" class="form-control" name="description" value="{{$product->description}}">
                    @error('description')
                    <x-error-text>{{$message}}</x-error-text>
                    @enderror
                    <label class="fw-bold mt-3">Price:</label>
                    <input type="number" class="form-control" name="price" value="{{$product->price}}">
                    @error('price')
                    <x-error-text>{{$message}}</x-error-text>
                    @enderror
                    <label class="fw-bold mt-3">Quantity:</label>
                    <input type="number" class="form-control" name="quantity" value="{{$product->quantity}}">
                    <div class="form-check mt-3">
                        <input <?php if($product->has_freebie == 'yes'){ echo 'checked'; } ?> id="has-freebie" type="checkbox" class="form-check-input">
                        <label for="has_freebie" class="form-check-lable">Has Freebie</label>
                    </div>

                    <input <?php if($product->has_freebie == 'yes') { echo 'value="yes"'; }else{ echo 'value="no"'; } ?> type="hidden" name="has_freebie" id="has-freebie-input">
                    @error('has_freebie')
                    <x-error-text>{{$message}}</x-error-text>
                    @enderror
                    @error('quantity')
                    <x-error-text>{{$message}}</x-error-text>
                    @enderror
                    <label class="fw-bold mt-3">Product Image:</label>
                    <input type="file" class="form-control" name="image">
                    @error('image')
                    <x-error-text>{{$message}}</x-error-text>
                    @enderror

                    <img class="img-fluid mt-3" style="height: 400px; width: 100%; object-fit: cover" src="/public/storage/{{$product->image}}" alt="">
                    <button class="btn btn-danger mt-3 fw-bold w-100">Confirm</button>
                </form>
                
            </div>
        </div>
        <x-has-freebie-script></x-has-freebie-script>
    </div>
</body>
</html>