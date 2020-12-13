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
if( isset($pizza_toppings) ){
$toppings = implode(",", $pizza_toppings);
}
/*else{
    $toppings = '-';
}*/
/*if( isset($pizza_crust) && 'none' !== $pizza_crust ){*/
  /*  $crust = $pizza_crust;*/
/*}*/
/*else{
    $crust = '-';
}*/
$size_price = 0;
switch( $pizza_size ){

    case 'Small':
        $size_price = 8;
        break;
    case 'Medium':
        $size_price = 12;
        break;
    case 'Large':
        $size_price = 16;
        break;
    default : 
        $size_price = 0;
        break;
}
$cart_pizza_price = $size_price * $pizza_quantity;
$query="insert into cart(id,type,size,crust,toppings,quantity,price,name) values('$user_id','$pizza_category','$pizza_size','$pizza_crust',
'$toppings','$pizza_quantity','$cart_pizza_price','Pizza')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Added Pizza into cart')
    window.location.href='pizza-order.php'
    </SCRIPT>");
?>
</body>
</html>