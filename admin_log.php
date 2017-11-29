<?php
$username=$_POST['username'];
$password=$_POST['password'];

$db = mysqli_connect('localhost','root','','tele_db');

$query = "SELECT * FROM admin WHERE username='cse' and password='cse'";
if(mysqli_query($db,$query)) 
	
{
	include 'admin_page.html';
}
else{
	echo "Unsuccessful";
}


?>