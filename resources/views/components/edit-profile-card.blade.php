@props(['user'])
<div class="container mt-5">
    <div class="card shadow col-lg-6 mx-auto bg-light">
        <div class="card-body">
            <h4 class="fw-bold text-center">Edit Profile</h4>
            <form action="/profile/edit" method="POST">
                @csrf
                @method('PUT')
                
                <label class="fw-bold">Name:</label>
                <input value="{{$user->name}}" type="text" name="name" class="form-control">
                @error('name')
                <x-error-text>{{$message}}</x-error-text>
                @enderror
                <label class="fw-bold">Email:</label>
                <input value="{{$user->email}}" type="text" name="email" class="form-control">
                @error('email')
                <x-error-text>{{$message}}</x-error-text>
                @enderror
                <label class="fw-bold">Contact:</label>
                <input value="{{$user->contact}}" type="text" name="contact" class="form-control">
                @error('contact')
                <x-error-text>{{$message}}</x-error-text>
                @enderror
                <button class="btn btn-danger mt-3 w-100">Confirm</button>
            </form>
            
        </div>
    </div>
</div>