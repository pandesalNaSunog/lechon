<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-style/>
    <title>Administrator| Log In</title>
</head>
<body class="bg-orange">
    <div class="container">
        <div class="mt-5 text-center">
            <img src="/lolabertarevamp/public/storage/images/logo.png" style="height: 200px; width: auto" alt="" class="img-fluid">
            <div class="card shadow mx-auto mt-4 col-lg-5">
                <div class="card-body">
                    <h5 class="fw-bold">ADMINISTRATOR</h5>
                    <form action="admin/login" method="POST">
                        @csrf
                        <input name="email" type="text" class="form-control" placeholder="Email">
                        @error('email')
                            <p class="text-danger fs-6">{{$message}}</p>
                        @enderror
                        <input name="password" type="password" class="form-control mt-3" placeholder="Password">
                        <button class="my-btn fw-bold w-100 py-3 mt-3">Log In</button>
                    </form>
                    
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>