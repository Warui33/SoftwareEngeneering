<?php include 'connection.php';
if(empty($_SESSION)) // if the session not yet started 
   session_start();

if(isset($_SESSION['ClientId']))
 { 
   header("location: homepage2.php"); 
   exit; 
}

?>
  
<html>
 <head>
   <div>
   <title>Log In</title>
  <link rel = "stylesheet" type="text/css" href= "style_home.css">
 
   
   <script type="text/javascript">
     function validateform()
      {
        var username = document.login.uname.value;
	      var password1 =document.login.pass.value;

	  if(username==""||password1=="")
	   {
	     alert("The fields should not be empty");
       return false;
     }
     return (true);
    }
      
     </script>
   </head><br>

  </div>
  <body>

    
    <div style="background-image:url('glaciers.jpg');">
      <?php
            $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            $m=''; 
            if(strpos($url, 'message=error')){
                $m = 'You have to login to order.';
                //echo "<p style='color:Red; text-align:center; font-size:30px;'>You have to login to add items to cart</p>";
            }else if(strpos($url, 'm=sucess')){
                $m='';
                //echo "<p style='color:Blue; text-align:center; font-size:30px;'></p>";
            }
            echo "<p style='color:Red; text-align:center; font-size:30px;'>$m</p>";
          ?>
      <form name="login" method="post"  action="log.php" onsubmit="return (validateform());">
        <fieldset style="text-align: center">
          <legend style align="center">Log In</legend>

         <H4 style = "color: black;">User Type: <select name="utype">
         <option value="Manager">Manager</option>
         <option value="Client">Client</option>
       </select><br><br>
         <H4 style = "color: black;">Username: <input type="text" name="uname"></H4><br>
         <H4 style = "color: black;">Password: <input type="password" name="pass"></H4><br>
         <input type="submit" name="submit" value="Log In"><br><br><br><br><br><br><br>
        </fieldset>
    
     </form>
    </div>

   </body>
 </html>
