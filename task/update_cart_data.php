<?php

include('connection.php'); 
        $conn = mysqli_connect("localhost","root","","bike_models");
        $query = "SELECT * FROM cart";
        $result = mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
        

?>