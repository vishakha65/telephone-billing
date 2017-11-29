<?php
$name=$_POST['name'];
$address = $_POST['address'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$emailid=$_POST['emailid'];

$db = mysqli_connect('localhost','root','','tele_db');

$query = "INSERT INTO customer(name,address,city,state,pincode,emailid,phone) VALUES
		('$name', '$address', '$city', '$state', '$pincode', '$emailid','$phone')";
if(mysqli_query($db,$query)) 
	
{
	echo " You are registered";
}
else{
	echo "Unsuccessful";
}


?>