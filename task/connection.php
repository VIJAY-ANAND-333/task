<?php

$server="localhost";
$username='vijay';
$password='Vijay@3553';

try {
  $conn = new PDO("mysql:host=$server;dbname=bike_models", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$sql='SELECT * from `brand`';
$whole= $conn -> query($sql);
while($getdata=mysqli_fetch_assoc($whole)){
        $countries=$getdata['brand'];
}

?>
