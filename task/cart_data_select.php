

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
        $query = "SELECT * FROM cart";
        $result = mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);


    ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                <th scope="col">quantity</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
            <?php global $i; while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                <?php $id=$row['id'];?>
                    <th scope="row"><?php echo $i++;?></th>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><span class="product-name"><?php echo $row['title']; ?></span></td>
                    <td><input type="number" value="<?php echo $row['price'];?>"/></td>
                    <td><img src="admin/uploads/<?php echo $row['image']; ?>" alt='' width='90' height='90'/></td>
                    <td><?php echo $row['qty']; ?></td>
                    <td><button class="btn btn-danger btn-sm" data-id="<?php echo $row['id']; ?>" id="remove">Remove</button></td>
                    <td><button onclick="add(<?php echo $row['id'];?>,<?php echo $row['qty'];?>)">+</button>
                    <input type="number" name="qty" class="quantity-input" value="<?php echo $row['qty'];?>">
                    <button onclick="subtraction(<?php echo $row['id'];?>)">-</button></td>  
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
session_start();
$_SESSION['i']=$i;
?>

<script type="text/javascript">
function minusqty() {//update when press button -
var quantityVal = $("input[name='quantity']").val();
var qtyVal = quantityVal-1; 
var idVal = $("input[name='id']").val();
var itemidVal = $("input[name='item_id']").val();
var cartidVal = $("input[name='cart_id']").val();
$.ajax({
    url: 'cart-update.php',
    method: 'GET',
    data: {qty: qtyVal, item_id: itemidVal, id: idVal, cart_id: cartidVal },
    cache: false,
    dataType: 'html',
    success: function(data) {

    },
});
}
</script>
<script type="text/javascript">
function plusqty() {////update when press button +
var quantityVal2 = $("input[name='quantity']").val();
var qtyVal2 = quantityVal2-(-1); 
var idVal2 = $("input[name='id']").val();
var itemidVal2 = $("input[name='item_id']").val();
var cartidVal2 = $("input[name='cart_id']").val();
$.ajax({
    url: 'cart-update.php',
    method: 'GET',
    data: {qty: qtyVal2, item_id: itemidVal2, id: idVal2, cart_id: cartidVal2 },
    cache: false,
    dataType: 'html',
    success: function(data) {
        console.log(data);

    },
});
}
</script>

<script>
    // $('.add').click(function(){
    //     var id=$("input[name='qty']").val();
    //     alert(id);
    //     $.ajax({
    //         url:'plus_quantity.php',
    //         method:'POST',
    //         data : {cart_id:id},
    //         success:function(data){
    //             console.log(data);
    //         }
    //     })
    // });
    </script>

</body>
</html>