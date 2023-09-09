<?php
session_start();
if(!isset($_SESSION['islogged_in']) || $_SESSION['islogged_in']!=true){
    header('location:admin_login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div>Welcome
<?php
         if (isset($_SESSION["flash_message"])) {
        echo "<div class='alert alert-success'>" . $_SESSION["flash_message"] . "</div>";
        unset($_SESSION["flash_message"]);
                  }
                 ?>
                 <a class='btn btn-success' href='logout.php'>Logout</a>
                 </div>
<script>
    $(document).ready(function(){
            $.ajax({
                url:'logout.php',
                method:'post',
                type:'json',
                data:{},
                success:function(data){

                }
            })
        });
    </script>
</body>
</html>