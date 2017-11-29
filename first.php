<?php
    session_start();
	$db = mysqli_connect('localhost','root','','tele_db');
	
	
	?>


<html>
<head>
 <link type="text/css"rel="stylesheet"href="bill.css"/></head>
<body>
<form method="POST" enctype="application/x-www-form-urlencoded" action="bill1.php">
<div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
      <div class="box text-responsive" id="#box">
        <center>
          <h2>TELEPHONE BILLING(VIEWING): </h2><span class="change" id="change"></span></center>
      </div>
    </div>
<p>
<label>TELEPHONE NO.
<input type="text" name="phone" required>
</label> 
</p>

<p>
<label>NAME 
<input type="tel" name="phone_number">
</label>

</p>

<p>
<label>ADDRESS
<input type="text" name="email_address">
<p><button>RETRIEVE DETAILS</button></p>



</form></body> </html>