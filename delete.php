<html>
 <head>
 	<title>Delete Order</title>
 </head>

 <body>

 	<?php include 'connection.php';
 	session_start();
 

 		$sql = "DELETE FROM orders WHERE productName='$_POST[dlt]'";


 	if(!mysqli_query($conn,$sql))
 	{
 		die ("Error: ".mysqli_error());
 	}
 	else
 	{

 	echo "You have deleted your order.";
 	//header("location: homepage.php"); 

 	

 }
 	mysqli_close($conn);
 	?>

 </body>
 </html>
