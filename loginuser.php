<?php
session_start();
include("database.php");


if(isset($_POST['login_submit']))
{
	if(!empty($_POST['email']) && !empty($_POST['password'])) {  
	    $email=$_POST['email'];  
	    $password=$_POST['password'];
		$rs=mysqli_query($conn,"select * from login where email='$email' and password='$password'");
		if( mysqli_num_rows($rs) > 0 ) {
			while($row = mysqli_fetch_array( $rs, MYSQLI_ASSOC)){
				if( $row["email"]==$email && $row["password"]==$password){
					$_SESSION["email"]=$email;
					$user_id = $row['id'];
					$_SESSION["user_id"] = $row['id'];
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
					
					echo ("<SCRIPT LANGUAGE='JavaScript'>
				    alert('Your login with $email is Sucessfull')
				    window.location.href='homepage.php'
				    </SCRIPT>");
				}
				
			}
		}
		else{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
			   	alert('Please enter correct id or password')
			    window.location.href='login.php'
			    </SCRIPT>");
			}
	}
}

?>
