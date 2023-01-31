<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-style></x-style>
    <x-fonts></x-fonts>
    <title>Pricelist</title>
</head>
<body class="bg-dark">
    <x-nav :active="$active"></x-nav>
    <x-sub-header :active="$active"></x-sub-header>
    <x-pricelist-section></x-pricelist-section>
    <x-footer-section></x-footer-section>
</body>
</html>