<html>
<head>
</head>

<body>
<table width=100% border='2'>
   <tr>
      <th>Name</th>
      <th>Address  1</th>
      <th>city 2 </th>
      <th>state </th>
	    <th>pincode </th>
		  <th>emailid </th>
		    <th>phone </th>
    </tr>
	
	<?php
	$db = mysqli_connect('localhost','root','','tele_db');
	$query= "SELECT * FROM customer";
	$res= mysqli_query($db,$query);
	
    
	
	
	while($array=mysqli_fetch_array($res))
	{
	?>
	  <?php 
        print "<tr> <td>";
        echo $array[0]; 
        print "</td> <td>";
        echo $array[1]; 
        print "</td> <td>";
        echo $array[2]; 
        print "</td> <td>";
        echo $array[3]; 
        print "</td> <td>";
		  echo $array[4]; 
        print "</td> <td>";
		  echo $array[5]; 
        print "</td> <td>";
		  echo $array[6]; 
        print "</td> </tr>";

    ?> <?php } ?>

</table>
</body>



</html>