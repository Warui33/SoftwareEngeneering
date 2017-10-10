<html>
 <head>
   <title>Sign Up</title>
   <link rel = "stylesheet" type="text/css" href= "style_home.css">
   <style>
   h4
{
  font-family: cursive;
  color: #000066;
  font-size: 18px;
  font-weight: 5px;
}

input[type=text], select {
    width: 35%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=reset], select {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
    width: 35%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 20%;
    background-color: #004d80;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #1e90ff;
}


</style>
 
   <script type="text/javascript">
     function validateform()
      {
        var pid = document.sign.cid.value;
        var nid = document.sign.names.value;
        var username = document.sign.uname.value;
        var utype = document.sign.utype.value;
	      var password1 =document.sign.password1.value;
        var phone = document.sign.number.value;
        var residence = document.sign.address.value;

	  if(pid==""||nid==""||username==""||password1==""||utype==""||phone==""||residence=="")
	   {
	     alert("The fields should not be empty");
       return false;
     }
     return (true);
    }
      
     </script>

   </head><br>
  

<body>
  
  <div style="background-image:url('want.jpg');">
      <form name="sign" method="post" action="signed.php" onsubmit="return (validateform());">
        <fieldset style="text-align: center">
          <legend style align="center">Sign Up</legend>

          <H4 style = "color: #1a001a;">Client ID: <input type="text" name="cid"></H4><br>
           <H4 style = "color: #1a001a;">Full Names: <input type="text" name="names"></H4><br>
         <H4 style = "color: #1a001a;">Username: <input type="text" name="uname"></H4><br>
         <H4 style = "color: #1a001a;">User Type: <select name="utype">
         <option value="Manager">Manager</option>
         <option value="Client">Client</option>
         </select><br><br>
         <H4 style = "color: #1a001a;">Password: <input type="password" name="password1"><br><br><br>
         <H4 style = "color: #1a001a;">Residence Address: <input type="text" name="address"></H4><br>
         <H4 style = "color: #1a001a;">Phone Number: <input type="text" name="number"></H4><br>
         <H4 style = "color: #1a001a;"><name="input" action_page.php method="post"</H4>
   <H4 style = "color: #1a001a;"><input type="submit" name="submit" value="Submit" onclick="alert('Submitted')">
       <input type="reset" value="Reset"></H4>

        </fieldset>
     </form>
       </div>
   </body>
 </html>
