<?php
$local=$_POST['local'];
$phone = $_POST['phone'];
$std=$_POST['std'];
$isd=$_POST['isd'];
$monthlyrental=$_POST['monthlyrental'];



$db = mysqli_connect('localhost','root','','tele_db');

$query="SELECT phone FROM call_rates";
$res = mysqli_query($db,$query);
while($row = mysqli_fetch_array($res))
{
	$retreive = $row['phone'];
}
$query = "UPDATE call_rates
SET local= '$local',std='$std',isd='$isd',monthlyrental='$monthlyrental'
WHERE phone='$retreive'";
if(mysqli_query($db,$query)) 
	
{
	echo " RATE CHANGES APPLIED";
}
else{
	echo "Unsuccessful";
}


?>

