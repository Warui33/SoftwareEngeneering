<?php include 'connection.php';
  if (empty($_SESSION))
    session_start();


  if(!isset($_POST['submit'])) { // if the form not yet submitted
   header("Location: Signup.php");
   exit; 
}

    $name = $_POST['uname'];
    $pass1 = $_POST['pass'];
    $utype = $_POST['utype'];

      echo $utype;

      $sql = "select * from users where userName='$name'and password='$pass1' and userType='$utype'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      $id = $row['ClientId'];
      $_SESSION['id'] = $id;//session is created

      if(!$row)
      {
      echo "Incorrect username or password";
      header ("location: logIn.php?message=error");
      }
      else
      {
        echo "Successful login";

        $utype = $row['userType'];

    if($utype == 'Manager')
    {
    //case 'Manager':
    $_SESSION['userName'] = $name;
    $_SESSION['ClientId'] = $id;
    $_SESSION['password'] = $pass;
    $_SESSION['userType']= 'Manager';
    header("Location: Manager.php");
  }
  else
  {
    //case 'Client':
    //session_start();
        $_SESSION['userName'] = $name;
        $_SESSION['ClientId'] = $id;
        $_SESSION['password'] = $pass;
        $_SESSION['userType']= 'Client';
        header("Location: homepage2.php");
  }
      }
    
    mysqli_close($conn);
    ?>

