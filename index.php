<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<fieldset>
<legend>Provide your Details</legend>
<form style="background-color: blue; width:25%;" action='confirmlogin.php' method = "POST">
     <select name='usertype'>
     <legend>Provide your Details</legend>
     <option value='user'>User</option>
     <option value='admin'>Administrator</option>
     </select>
     <br><br>
    Username <input type="text" name="username"><br><br>
	Password <input type="password" name="password"><br><br>
	<input type="submit" name="submit" value="Login">
	</form>
    </fieldset>
 </center>   
</body>
</html>
