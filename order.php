<html>
 <head>
 	<title>Orders</title>
 </head>

 <body>
 	
 	<?php include 'connection.php';
 
 		$sql = "INSERT INTO orders (productName,quantityOrdered,address,phoneNo,paymentInfo) VALUES('$_POST[pname]','$_POST[quantity]','$_POST[address]','$_POST[number]','$_POST[payment]')";


 	if(!mysqli_query($conn,$sql))
 	{
 		die ("Error: ".mysqli_error());
 	}
 	else
 	{

 	echo "Your order has been placed.";
 	echo "<br/>";
 	echo "<a href='details.php'>Go back my profile.</a>";

    }
 	mysqli_close($conn);
 	?>

 	<form  name='view' action='viewOrders.php' method='post'>
 		<input type='submit' name='viewOrders' value='View Orders'>
 	</form>

 </body>
 </html>
