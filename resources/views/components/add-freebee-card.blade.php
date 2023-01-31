<div class="mt-5">
    <div class="container">
        <div class="card shadow bg-light col-lg-6 mx-auto">
            <div class="card-body">
                <h5 class="fw-bold text-center">Add Freebee</h5>
                <form action="/lolabertarevamp/admin/inventory/add-freebee/add" method="POST">
                    @csrf
                    <label class="fw-bold">Name:</label>
                    <input type="text" class="form-control" name="name">
                    @error('name')
                    <x-error-text>{{$message}}</x-error-text>
                    @enderror
                    <label class="fw-bold mt-3">Quantity</label>
                    <input type="number" class="form-control" name="quantity">
                    @error('quantity')
                    <x-error-text>{{$message}}</x-error-text>
                    @enderror
                    <button class="btn btn-danger w-100 mt-3">Confirm</button>
                </form>
                
            </div>
        </div>
    </div>
    
</div>