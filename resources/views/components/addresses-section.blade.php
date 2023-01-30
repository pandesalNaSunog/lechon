@props(['addresses'])
<div class="container mt-3">
    <div class="col-lg-6 mx-auto card shadow bg-light">
        <div class="card-header">
            <h4 class="fw-bold">My Addresses</h4>
        </div>
        <div class="card-body">
            
            @foreach($addresses as $address)
                <div class="card shadow mt-3">
                    <div class="card-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg><strong class="ms-2">{{$address->address}}</strong>
                    </div>
                </div>
            @endforeach
            
        </div>
        <div class="card-footer">
            <h4 class="fw-bold">Add Address</h4>
            <hr>
            <form action="/lolabertarevamp/profile/address" method="POST">
                @csrf
                <label class="fw-bold">Address:</label>
                <input name="address" type="text" class="form-control">
                @error('address')
                <x-error-text>{{$message}}</x-error-text>
                @enderror
                <button class="btn btn-danger w-100 mt-3">Confirm</button>
            </form>
            
        </div>
    </div>
</div>