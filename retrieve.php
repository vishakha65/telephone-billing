<html>
<head>
</head>

<body>
	
	<?php
	$db = mysqli_connect('localhost','root','','tele_db');
	$query= "SELECT local,stdcall,isdcall FROM cust_meter_reading WHERE ph";
	$res= mysqli_query($db,$query);
	
	
	while($row=mysqli_fetch_array($res))
	{
	?>
	here is your address <br>
	<?php echo $row['address'] ;?>
	
	<?php	
	}
	?>
</body>



</html>