<?php
    session_start();
	$db = mysqli_connect('localhost','root','','tele_db');
	
	$phone=$_POST['phone'];
	$query= "SELECT local,stdcall,isdcall  FROM cust_meter_reading  WHERE phone='$phone'";
	$res= mysqli_query($db,$query);
	
	
	
	while($row=mysqli_fetch_array($res))
	{ 
		$local=$row['local'];
		$stdcall=$row['stdcall'];
		$isdcall=$row['isdcall'];
		
		//$local1=$row['call_rates\.local'];
		//$STD=$row['STD'];
		//$ISD=$row['ISD'];
		
	}
	
	$query= "SELECT local,STD,ISD,MonthlyRental  FROM call_rates  WHERE phone=23450123";
	$res= mysqli_query($db,$query);
	
	
	
	while($row=mysqli_fetch_array($res))
	{ 
		$local1=$row['local'];
		$STD=$row['STD'];
		$ISD=$row['ISD'];
		$rental = $row['MonthlyRental'];
	}
	$total = $rental + ($local*$local1)+($stdcall*$STD)+($isdcall*$ISD);
	?>


<html>
<head>
 <link type="text/css"rel="stylesheet"href="bill.css"/></head>
<body>
<form method="POST" enctype="application/x-www-form-urlencoded" action="bill1.php">


<div class="red">
<fieldset>
<legend>CALCULATING BILL</legend>


<p>
<div style="float:left;">
  <label for="name">Local Meter Reading</label>
  <input id="user_last_name" name="user[last_name]" size="30" type="text" value="<?php echo $local; ?>" />
</div>
<label>X  Local Rate
<input type="tel" name="phone_number" value="<?php echo $local1; ?>" >
</label>
</p>


<p>
<div style="float:left;">
  <label for="name">STD Meter Reading</label>
  <input id="user_last_name" name="user[last_name]" size="30" type="text" value="<?php echo $stdcall; ?>" />
</div>
<label>X   STD Rate 
<input type="number" name="email_address"value="<?php echo $STD; ?>" >
</label>
</p>
<p>
<div style="float:left;">
  <label for="name">ISD Meter Reading</label>
  <input id="user_last_name" name="user[last_name]" size="30" type="text" value="<?php echo $isdcall; ?>" />
</div>
<label>X    ISD Rate
<input type="number" name="email_address" value="<?php echo $ISD; ?>" >
</label>
</p>

</fieldset></div>


<p>
<label>MONTHLY RENTAL
<input type="text" name="pickup_time" required value="<?php echo $rental; ?>" >
</label>
</p>
	
<p>
<label>TOTAL
<input type="text" name="pickup_time" required value="<?php echo $total; ?>" >

</label> 
</p>

<p>
<label>TAXES (@8%)
<input type="text" name="dropoff_place" required list="destinations" value="<?php echo $total*.08; ?>" > 
</label>


</p>

<p>
<label>GROSS TOTAL
      (ON OR BEFORE DUE DATE) 
<input type="text" name="pickup_time" required value="<?php echo $total*1.08; ?>" >
</label>
</p>

<p><button>BILL</button></p>

</form></body>