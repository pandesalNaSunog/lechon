<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-style/>
    <title>Login</title>
</head>
<body class="bg-dark">
    <div id="background">
        <div class="container" style="height: 100%">
            <div class="row row-cols-1 row-cols-lg-2 d-flex align-items-center" style="height: 100%">
                <div class="col col-lg-8">
                    <img src="/lolabertarevamp/public/storage/images/logo.png" alt="" class="img-fluid">
                    <p class="text-light lead fs-2">Sign Up to shop with us!</p>
                </div>
                <div class="col col-lg-4">
                    <div class="card shadow bg-light">
                        <div class="card-body">
                            <form action="/lolabertarevamp/signup/register" method="POST">
                                @csrf
                                <label class="fw-bold">Name</label>
                                <input value="{{old('name')}}" name="name" type="text" class="form-control">
                                @error('name')
                                    <x-error-text>{{$message}}</x-error-text>
                                @enderror
                                <label class="fw-bold mt-3">Email</label>
                                <input value="{{old('email')}}" name="email" type="text" class="form-control">
                                @error('email')
                                    <x-error-text>{{$message}}</x-error-text>
                                @enderror
                                <label class="fw-bold mt-3">Contact Number</label>
                                <input value="{{old('contact')}}" name="contact" type="number" class="form-control">
                                @error('contact')
                                    <x-error-text>{{$message}}</x-error-text>
                                @enderror
                                <label class="fw-bold mt-3">Password</label>
                                <input value="{{old('password')}}" name="password" type="password" class="form-control">
                                @error('password')
                                    <x-error-text>{{$message}}</x-error-text>
                                @enderror
                                <label class="fw-bold mt-3">Confirm Password</label>
                                <input value="{{old('password_confirmation')}}" name="password_confirmation" type="password" class="form-control">
                                @error('password_confirmation')
                                    <x-error-text>{{$message}}</x-error-text>
                                @enderror
                               
                               
                                <button class="my-btn py-3 w-100 mt-3">Sign Up</button>
                                
                            </form>
                            <a href="/lolabertarevamp/login">
                                <button class="my-btn-outline py-3 w-100 mt-3">Log In</button>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>