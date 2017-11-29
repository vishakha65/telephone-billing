<?php
$name=$_POST['name'];
$address = $_POST['address'];
$phone=$_POST['phone'];



$db = mysqli_connect('localhost','root','','tele_db');
$query="SELECT phone FROM customer";
$res = mysqli_query($db,$query);
while($row = mysqli_fetch_array($res))
{
	$retreive = $row['phone'];
}

$query = "UPDATE customer
set name='$name',address='$address'
WHERE phone='$retreive'";
if(mysqli_query($db,$query)) 
	
{
	echo " DETAILS UPDATED";
}
else{
	echo "Unsuccessful";
}


?>
