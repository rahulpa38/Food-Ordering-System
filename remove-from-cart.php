<?php 
 session_start();
  include("database.php");
  if (!isset($_SESSION['user_id']))
   {
      header("location: login.php");
   }
   $item_id = $_GET['id'];

   /*$item_name = "DELETE FROM cart WHERE item_id = '$item_id;"*/

   $remove_item_from_cart = "DELETE FROM cart WHERE item_id = '$item_id'";
   $rs=mysqli_query($conn,$remove_item_from_cart)or die("Could Not Perform the Query");

   echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.location.href='cart.php'
		    </SCRIPT>");
?>