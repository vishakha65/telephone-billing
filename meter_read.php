<?php
$phone=$_POST['phone'];
$customername = $_POST['customername'];
$customeraddress=$_POST['customeraddress'];
$local=$_POST['local'];

$stdcall=$_POST['stdcall'];
$isdcall=$_POST['isdcall'];

$db = mysqli_connect('localhost','root','','tele_db');

$query = "INSERT INTO cust_meter_reading(phone,customername, customeraddress,local,stdcall,isdcall) VALUES
		($phone,'$customername', '$customeraddress', $local, $stdcall, $isdcall)";
if(mysqli_query($db,$query)) 
	
{
	echo "READING REGISTERED";
}
else{
	echo "Unsuccessful";
}


?>