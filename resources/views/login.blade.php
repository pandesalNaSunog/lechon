<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-style/>
    <x-jquery/>
    <title>Login</title>
</head>
<body class="bg-dark">
    <x-toast/>
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
                            <form action="/lolabertarevamp/login/authenticate" method="POST">
                                @csrf
                                <input name="email" type="text" class="form-control" placeholder="Email">
                                @error('email')
                                    <x-error-text>{{$message}}</x-error-text>
                                @enderror
                                <input name="password" type="password" class="form-control mt-3" placeholder="Password">
                               
                                <button class="my-btn py-3 w-100 mt-3">Log In</button>
                                
                            </form>
                            <a href="/lolabertarevamp/signup">
                                <button class="my-btn-outline py-3 w-100 mt-3">Sign Up</button>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</body>
</html>