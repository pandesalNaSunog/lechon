<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links></x-bootstrap-links>
    <x-style></x-style>
    <x-jquery></x-jquery>
    <title>Change Password</title>
</head>
<body>
    <x-nav :active="$active"></x-nav>
    <div class="py-5">
        <div class="container">
            <div class="card shadow bg-light">
                <div class="card-body">
                    <form action="/profile/change-password/current" method="POST">
                        @csrf
                        <label class="fw-bold">Current Password:</label>
                        <input type="password" name="password" class="form-control">
                        @error('password')
                        <x-error-text>{{$message}}</x-error-text>
                        @enderror
                        <button class="btn btn-danger mt-3 w-100">Confirm</button>
                    </form>
                </div>
                
                
            </div>
        </div>
    </div>
</body>
</html>