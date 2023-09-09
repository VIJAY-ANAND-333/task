<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<?php 
    $conn = mysqli_connect("localhost","root","","bike_models");
    $query = "SELECT * FROM brand";
    $result = mysqli_query($conn,$query);
?>

<div class="row">
    <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <div class="col-md-4">
            <div class="content">
                <img src="assets/bikes/<?php echo $row['image']; ?>">
                <center><span style="font-size: 20px; color: orange;" class="mb-1">Item : <?php echo $row['brand']; ?></span></center>
                <center><p style="font-size: 20px;" class="mb-1">Price : <?php echo $row['price']; ?> Rs</p></center>
                <center><button class="btn btn-info btn-sm mb-2" id="add" data-id="<?php echo $row['id']; ?>">Add To Cart</button></center>
            </div>
        </div>
    <?php } ?>
</div>

</body>
</html>