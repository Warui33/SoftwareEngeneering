<?php
session_start();
unset($_SESSION['id']);
session_destroy();


$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            $m=''; 
            if(strpos($url, 'logout')){
               // $m = 'You have to login to book';
                echo "<p style='color:black; text-align:center; font-size:20px;'>You have successfully logged out.</p>";
            }else if(strpos($url, 'm=sucess')){
               // $m='';
                echo "<p style='color:Blue; text-align:center; font-size:30px;'></p>";
            }
header("location: Login.php");
exit;
?>