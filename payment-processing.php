<?php 
 session_start();
  if (!isset($_SESSION['user_id']))
   {
      header("location: login.php");
   }
  extract($_POST);
  include("database.php");
  $user_id = $_SESSION['user_id'];
  $order_id = $_SESSION['order_id'];
  $credit_card_number = substr($card_number, -4);
  $timestamp=time();
  $cart_data = mysqli_query($conn,"select * from cart where id = $user_id");
   if ( !empty( $cart_data) ){
      	while( $all_details = mysqli_fetch_array( $cart_data, MYSQLI_ASSOC)){
 
	      	/*print_r($pizza_all_details);*/
	      	$data_copy = $all_details;
	      	$keys = array('item_id','id','quantity','price');
	      	foreach ($keys as $key ) {
	      		unset( $data_copy[$key]);
	      	}
	     
		    $order_details = implode(",", array_diff($data_copy, [NULL])); 
		    $quantity = $all_details['quantity'];
		    $price = $all_details['price'];
		    $name  = $all_details['name'];
		  
		    $insert_in_recent_order="insert into recent_orders(user_id,timestamp,order_id,order_details,quantity,price,name,card) values('$user_id','$timestamp','$order_id','$order_details','$quantity','$price','$name','$credit_card_number')";
			$rs=mysqli_query($conn,$insert_in_recent_order)or die("Could Not Perform the Query");
			

		    $remove_from_cart = "DELETE FROM cart WHERE id = '$user_id'";
		    $rfc=mysqli_query($conn,$remove_from_cart)or die("Could Not Perform the Query");

		    if(isset($_SESSION['order_id']))
			{
			   unset($_SESSION['order_id']);
			}

			echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Order placed succesfully')
		    window.location.href='recent-orders.php'
		    </SCRIPT>");
	    }
	    $insert_in_payment_table ="insert into payment(id,timestamp,order_id,card_number,expiry_number,cvv,name) values('$user_id','$timestamp','$order_id','$card_number','$expiry_card_number','$cvv','$full_name')";
			$iirc=mysqli_query($conn,$insert_in_payment_table)or die("Could Not Perform the Query");
	}
 