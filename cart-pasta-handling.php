<?php
//This code will insert pizza order into cart db
session_start();
extract($_POST);

include("database.php");
$user_id = $_SESSION['user_id'];
if (!isset($_SESSION['order_id']))
{
    $query="insert into track_order_id(id) values('$user_id')";
    $rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
    $order_id = mysqli_query($conn,"select max(order_id) as last_order_id from track_order_id where id = $user_id");
    $last_order_id = mysqli_fetch_array($order_id);
    foreach ($last_order_id as $col) {
       $_SESSION['order_id'] = $col;

    }
    
}
if( isset($pasta_veggies) ){
$veggies = implode(",", $pasta_veggies);
}
$size_price = 15;
$cart_pasta_price = $size_price * $pasta_quantity;
$query="insert into cart(id,type,veggies,quantity,price,name) values('$user_id','$pasta_category','$veggies','$pasta_quantity','$cart_pasta_price','Pasta')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Added Pasta into cart')
     window.location.href='pasta-order.php'
    </SCRIPT>");
?>
</body>
</html>