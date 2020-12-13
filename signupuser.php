<?php
extract($_POST);
include("database.php");
$rs=mysqli_query($conn,"select * from login where email='$email'");
if (mysqli_num_rows($rs)>0)
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Account already exist')
    window.location.href='signup.php'
    </SCRIPT>");
	exit;
}
$query="insert into login(email,password,firstname,lastname,phone,street,city,pin,state) values('$email','$pass','$firstname','$lastname',
'$tel','$street','$city','$pin','$state')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Your Login Account with $email Created Sucessfully')
    window.location.href='login.php'
    </SCRIPT>");
?>
</body>
</html>