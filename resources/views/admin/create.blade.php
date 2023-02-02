<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-style/>
    <x-jquery/>
    <title>Administrator | Add Product</title>
</head>
<body>
    <x-admin-nav :active="$active"/>

    <div class="container">
        <div class="card shadow mx-auto mt-5 bg-light col-lg-6">
            <div class="card-body">
                <h3 class="fw-bold text-center">
                    Add New Product
                </h3>
                <form action="inventory/add-product/store" enctype="multipart/form-data" method="POST">
                    @csrf
                    <label class="fw-bold">Name:</label>
                    <input type="text" class="form-control" name="name">
                    @error('name')
                    <x-error-text>{{$message}}</x-error-text>
                    @enderror
                    <label class="fw-bold mt-3">Description:</label>
                    <input type="text" class="form-control" name="description">
                    @error('description')
                    <x-error-text>{{$message}}</x-error-text>
                    @enderror
                    <label class="fw-bold mt-3">Price:</label>
                    <input type="number" class="form-control" name="price">
                    @error('price')
                    <x-error-text>{{$message}}</x-error-text>
                    @enderror
                    <label class="fw-bold mt-3">Quantity:</label>
                    <input type="number" class="form-control" name="quantity">
                    @error('quantity')
                    <x-error-text>{{$message}}</x-error-text>
                    @enderror

                    <div class="form-check mt-3">
                        <input id="has-freebie" type="checkbox" name="has_freebie" class="form-check-input">
                        <label for="has_freebie" class="form-check-lable">Has Freebie</label>
                    </div>
                    <input value="no" type="hidden" name="has_freebie" id="has-freebie-input">
                    @error('has_freebie')
                    <x-error-text>{{$message}}</x-error-text>
                    @enderror
                    <label class="fw-bold mt-3">Product Image:</label>
                    <input type="file" class="form-control" name="image">
                    @error('image')
                    <x-error-text>{{$message}}</x-error-text>
                    @enderror
                    <button class="btn btn-danger mt-3 fw-bold w-100">Confirm</button>
                </form>
            </div>
        </div>
    </div>
    <x-has-freebie-script></x-has-freebie-script>
</body>
</html>