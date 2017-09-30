<?php include 'connection.php';
if(empty($_SESSION)) // if the session not yet started 
   session_start();

if(!isset($_SESSION['userName']))
 { 
   header("Location: Login.php?mes=error");
   exit;
} 
?>

<html>
<head>
	<title>My Profile</title>
  <link rel = "stylesheet" type="text/css" href= "style_home.css">
  <style>
  h4
{
  font-family: cursive;
  color: #56ca4a;
  font-size: 30px;
  font-weight: 10px;
}

input[type=submit] {
    width: 90%;
    background-color: #56ca4a ;
    color: black;
    font-weight: 60px;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #bcee68;
}
  </style>
</head>


<body>


 <div id="adm">
<h4>CHOOSE AN ACTION

</div><br>

           <form action="orderForm.php" method="POST">
             <input type='submit' name='book' value='Place Order'>
           </form><br><br>

            <form method ="POST" action="viewOrders.php">
              <input type='submit' name='view' value='View Orders'>
            </form><br><br>

            <form method ="POST" action="editForm.php">
               <input type='submit' name='view' value='Edit Order'>
            </form><br><br>

            <form method ="POST" action="delete.php">
              <input type='submit' name='delete' value='Delete Order'>
              <input type="text" name="dlt" placeholder="Enter Product Name"><br>
            </form><br><br>
  
  </body>
</html>