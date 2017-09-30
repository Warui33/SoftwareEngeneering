<html>
 <head>
 	<title>Update</title>
 </head>

 <body>

 	<?php include 'connection.php';
 
 		
 		$cid = $_POST['cid'];
 		$name =  $_POST['pname'];
 		$quantity = $_POST['quantity'];
 		$address = $_POST['address'];
 		$number = $_POST['number'];
 		$payment = $_POST['payment'];

 		$update = $_POST['update'];

 		$sql = "UPDATE orders SET clientId='$cid',productName='$name',quantityOrdered='$quantity',address='$address',phoneNo='$number',paymentInfo='$payment' WHERE clientId = $cid";


 	if(!mysqli_query($conn,$sql))
 	{
 		die ("Error: ".mysqli_error());
 	}
 	else
 	{

 	echo "Your details have been updated.";
 	echo "<br/>";
	echo "<a href='details.php'>Go back to My Profile.</a>";
	echo "<br/>";

 }
 	mysqli_close($conn);
 	?>

 </body>
 </html>
