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
if( isset($sandwich_veggies) ){
$veggies = implode(",", $sandwich_veggies);
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

switch( $sandwich_size ){

    case 'Small':
        $size_price = 7;
        break;
    case 'Medium':
        $size_price = 14;
        break;
    case 'Large':
        $size_price = 18;
        break;
    default : 
        $size_price = 0;
        break;
}
$cart_sandwich_price = $size_price * $sandwich_quantity;
$query="insert into cart(id,sandwich_bread_category,veggies,size,cheese,quantity,price,name) values('$user_id','$sandwich_bread_category','$veggies','$sandwich_size','$sandwich_cheese','$sandwich_quantity','$cart_sandwich_price','Sandwich')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Added Sandwich into cart')
    window.location.href='sandwich-order.php'
    </SCRIPT>");
?>
</body>
</html>