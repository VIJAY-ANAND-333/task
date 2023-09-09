<?php
include 'connection.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $alert=false;
    $showerror=false;
    print_r($_FILES['file']);
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" enctype="multipart/form-data">
            <label for="username">Email</label>
            <input type="text" name="email" placeholder="Enter"/>
            <label for="username">Password</label>
            <input type="text"name="password" placeholder="Enter"/>
            <input type="file" name="file"/>
            <button type="submit">Save</button>
    
</body>
</html>
