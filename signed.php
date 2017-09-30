<html>
 <head>
 	<title>View</title>
 </head>

 <body>
 	<h3>Viewing entered data</h3>

 	<?php include 'connection.php';
 
 		$sql = "INSERT INTO newbees(ClientId,Username,FullNames,UserType,Password,Address,PhoneNumber) VALUES('$_POST[cid]','$_POST[uname]','$_POST[names]','$_POST[utype]','$_POST[password1]','$_POST[address]','$_POST[number]')";


 	if(!mysqli_query($conn,$sql))
 	{
 		die ("Error: ".mysqli_error());
 	}
 	else
 	{

 	echo "New Record has been added.";
 	echo"<br/>";
 	echo "The Client ID is: ".$_POST['cid'];
    echo"<br/>";
 	echo "The Username ID is: ".$_POST['uname'];
 	echo"<br/>";
 	echo "The Full names are: ".$_POST['names'];
 	echo"<br/>";
 	echo "The usertype  is: ".$_POST['utype'];
 	echo"<br/>";
 	echo "The password is: ".$_POST['password1'];
 	echo"<br/>";
 	echo "The residence adrress is: ".$_POST['address'];
 	echo"<br/>";
 	echo "The phone number is: ".$_POST['number'];
 	echo"<br/>";
 	echo "<br/>";
	echo "<a href='homepage.php'>Go back to home page.</a>";
	echo "<br/>";
 	echo "<br/>";

 }
 	mysqli_close($conn);
 	?>

 </body>
 </html>
