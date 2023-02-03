@props(['active'])
<nav class="navbar navbar-expand-lg bg-orange navbar-dark sticky-top">
    <div class="container">
        <div class="navbar-brand">
            <a href="/lolabertarevamp/admin"><img src="/lolabertarevamp/public/storage/images/logo.png" style="height: 70px; width: auto; object-fit: cover" alt=""></a>
        </div>
        <button class="navbar-toggler" data-bs-target="#navmenu" data-bs-toggle="collapse"><span class="navbar-toggler-icon"></span></button>
        <div id="navmenu" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a href="/lolabertarevamp/admin/users" class="fw-bold nav-link <?php if($active == "users"){ echo 'active'; } ?>">Users</a>
                </li>
                <li class="nav-item">
                    <a href="/lolabertarevamp/admin/inventory" class="fw-bold nav-link <?php if($active == "inventory"){ echo 'active'; } ?>">Inventory</a>
                </li>
                <li class="nav-item">
                    <a href="/lolabertarevamp/admin/orders" class="fw-bold nav-link <?php if($active == "orders"){ echo 'active'; } ?>">Orders</a>
                </li>
                <li class="nav-item">
                    <a href="/lolabertarevamp/admin/sales" class="fw-bold nav-link <?php if($active == "sales"){ echo 'active'; } ?>">Sales Report</a>
                </li>
                <li class="nav-item">
                    <a href="/lolabertarevamp/admin/logout" class="fw-bold nav-link">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
    
</nav>