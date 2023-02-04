@props(['active'])
<nav class="navbar navbar-expand-xxl bg-orange navbar-dark sticky-top">
    <div class="container">
        <div class="navbar-brand d-flex align-items-center" id="search-input">
            <a href="/"><img src="/logo.png" style="height: 30px; width: auto; object-fit: cover" alt=""></a>
            <x-search/>
        </div>
        
        <button class="navbar-toggler" data-bs-target="#navmenu" data-bs-toggle="collapse"><span class="navbar-toggler-icon"></span></button>
        <div id="navmenu" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                

                <li class="nav-item">
                    <a href="/" class="nav-link <?php if($active == "home"){ echo 'active'; } ?> fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                    </svg><span class="ms-1">Home</span></a>
                </li>

                <li class="nav-item">
                    <a href="/pricelist" class="nav-link fw-bold <?php if($active == "pricelist"){ echo 'active'; } ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag-fill" viewBox="0 0 16 16">
  <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg><span class="ms-1">Pricelist</span></a>
                </li>
                <li class="nav-item">
                    <a href="/products" class="nav-link <?php if($active == "products"){ echo 'active'; } ?> fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
</svg><span class="ms-1">Products</span></a>
                </li>
                @auth
                <li class="nav-item">
                    <a href="/cart" class="<?php if($active == "cart"){ echo 'active'; } ?> nav-link fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg><span class="ms-1">My Cart</span></a>
                </li>
                <li class="nav-item">
                    <a href="/orders" class="nav-link fw-bold <?php if($active == "my-orders"){ echo 'active'; } ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
</svg><span class="ms-1">My Orders</span></a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a href="" class="fw-bold nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/profile" class="dropdown-item">Profile</a>
                            </li>
                            <hr class="dropdown-divider">
                            <li>
                                <a href="/logout" class="dropdown-item">Log Out</a>
                            </li>
                        </ul>
                    </div>
                    
                </li>
                @else
                <li class="nav-item">
                    <a class="fw-bold nav-link" href="/login">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="fw-bold nav-link" href="/signup">Sign Up</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>