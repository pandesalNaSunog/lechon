<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-style/>
    <x-jquery/>
    <title>Profile</title>
</head>
<body class="bg-dark">
    <x-toast/>
    <x-nav :active="$active" />
    <x-sub-header :active="$active"/>
    <div class="bg-light py-5">
        <div class="container">
            <div class="card shadow col-lg-6 mx-auto bg-light">
                <div class="card-body text-center">
                    <h3 class="fw-bold">{{$user->name}}</h3>
                    {{$user->contact}}<br>
                    <i>{{$user->email}}</i><br>
                    <a href="/lolabertarevamp/profile/edit">
                        <button class="mt-3 btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg><span class="ms-3">Edit</span></button>
                    </a>
                    
                </div>
            </div>
        </div>

        <x-addresses-section :addresses="$addresses"/>
    </div>
    <x-footer-section/>

    
    
</body>
</html>