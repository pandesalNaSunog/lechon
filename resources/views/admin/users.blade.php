<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-style/>
    <title>Admin | Users</title>
</head>
<body>
    <x-admin-nav :active="$active"/>

    <x-section-cards :active="$active">
        <x-admin-users-table :users="$users"/>
    </x-section-cards>
    
    
</body>
</html>