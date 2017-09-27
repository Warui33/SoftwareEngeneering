<?php

include 'constant.php';

$conn = mysqli_connect($Host_Name,$Database_User,$Password,$Database_Name);
if(!$conn){
	die("connection failed".mysqli_connect_error());
}