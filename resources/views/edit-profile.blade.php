<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links/>
    <x-jquery/>
    <x-style/>
    <title>Edit Profile</title>
</head>
<body>
    <x-toast/>
    <x-nav :active="$active"/>
    <x-edit-profile-card :user="$user"/>
</body>
</html>