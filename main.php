<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Module</title>
</head>
<body>
<?php
	$username = $_SESSION['username'];
	echo "you are logged in as ".$username;
?>
<form action='' method='post'>
<a href="index.php" <button type='submit' >Logout</button></a><br><br>

</form>
</body>
</html>