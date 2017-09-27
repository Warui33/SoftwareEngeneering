<?php
include 'connection.php';

$usertype = $_POST['usertype'];
$username = $_POST['username'];
$pass = $_POST['password'];

echo $usertype."<br>";
echo $username."<br>";
echo $pass."<br>";

$sql = "SELECT *FROM users WHERE User_Name = '$username' and UserType = '$usertype' and Password = '$pass'";

$result = $conn->query($sql);

if(!$row = $result->fetch_assoc()){
	echo 'Password is Incorrect';
	//header("Location: ../index.php?error=wrong password");
}else{
	echo "Correct password";

	$full_name = $row['Full_Name'];
	$userId = $row['userId'];
	$email = $row['Email'];
	$phone = $row['Phone_Number'];
	$user = $row['User_Name'];
	$password = $row['Password'];
	$type = $row['UserType'];
	$time = $row['AccessTime'];
	$image = $row['Image'];
	$address = $row['Address'];


	/*echo $full_name;
	echo $userId;
	echo $email;
	echo $phone;
	echo $user;
	echo $password;
	echo $type;
	echo $time;
	echo $image;
	echo $address;*/
	session_start();
	$_SESSION['fullname'] = $full_name;
	$_SESSION['userid'] = $userId;
	$_SESSION['email'] = $email;
	$_SESSION['phoneNo'] = $phone;
	$_SESSION['username'] = $user;
	$_SESSION['password'] = $password;
	$_SESSION['usertype'] = $type;
	$_SESSION['accesstime'] = $time;
	$_SESSION['image'] = $image;
	$_SESSION['address'] = $address;

	header("Location: main.php");
}