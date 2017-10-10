<html>
 <div>
 	<div>
 	   <head>
 		  <title>Test Run</title>
 		  <link rel = "stylesheet" type="text/css" href= "style_home.css">
      <style>
       body, html{
        height: 100%;
        margin: 0;
        padding: 0;
       }

       .try{
        background-image: url("avo.jpg");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
       }

       input[type=text] {
    width: 110px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}

input[type=text]:focus {
    width: 90%;
}
h2
{
  font-family: cursive;
  color: #56ca4a;
  font-size: 60px;
  font-weight: 10px;
}
      </style>
 	   </head>
    </div>
<div id='one'>
  <div style="width: 100%; z-index: 10;">
      <div id="header" style="width: 80%; height: 100px; border-bottom: 2px solid white;">
        <h2 style="margin: 0; padding-left: 10%;">HEALTHY LIVING</h2>   
      </div>

      <div id="links" style="width: 20%; display:flex; border-bottom: 2px solid white; text-align: right; height:100px;">
            <a href="Login.php"><H4><b> Log In</H4></b></a>
            <a href="Signup.php"><H4><b> Sign Up</H4></b></a>
      </div>
  </div>
    <div style="width: 100%; background:#bcee68; height:85px;">
      <nav id="nav" style="width: 70%; background:#bcee68; z-index: 10;">
        <ul style="display: inline-block; margin-bottom:20px; margin-top: 0px; width:100%; border-bottom: 2px solid black;">
          <li><H3><a href="customer.php">Profile</a></H3></li>
        </ul>
      </nav>
      <div style="width: 30%; float:right; background: #bcee68; height: 90px; padding-top: 10px; text-align:right; border-bottom: 2px solid black; z-index:10;">
        <form name="search" method="POST" action="search.php">
          <input type="text" name="search" placeholder="Search">
          <input type="submit" name="submit" value="Search">
        </form>   
      </div>    
    </div>
  </div> 

    
       <br><br>
    

    <div>
       <body>

       <div class="try" style="margin-top: 80px;"></div>
      
       </div><br><br>
       

       </body>
    </div>
 </div>
</html>
