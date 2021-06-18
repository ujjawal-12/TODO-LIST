<?php
 session_start();
 if(isset($_SESSION['username']))
 {  
  header("Location:project.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./verify.css">
  <title>User login & register</title>
</head>
<body>
     <?php
        if(isset($_POST["submit"])){ include 'login.php';}
        if(isset($_POST["submit-signup"])){ include 'signup.php'; }
      ?>
<div id="body">
    <div id="content">
       <div id="box-1">
          <div class="form"><form  method="post" name="login">
          <div>
          <h2 >LOGIN HERE</h2>
          </div>
          <label for="name">Username<span id="uname"></span></label></br>
          <input type="text" id="name" name="nme" placeholder="enter username"></br>
          <label for="psswrd">Password<span id="pswrd"></span></label></br>
            <input type="password" id="psswrd" name="psswrd" placeholder="Password"></br></br>
            <input type="submit" name="submit" value="LOG IN">
            
          </form>
        </div>
       </div>
      <div id="box-2">
        <div class="form"> 
        <form  method="post" name="signup">
          <div>
          <h2 >SIGN UP HERE</h2>
          </div>
          <label for="name">Username <span id="u-name"></span></label></br>
          <input type="text" id="name" name="nme1" placeholder="enter username"></br>
          <label for="mail">Email<span id="mail-id"></span></label></br>
          <input type="email" id="mail" name="mail" placeholder="Email"></br>
          <label for="psswrd">Password<span id="psswrd-d"></span></label></br>
            <input type="password" id="psswrd" name="psswrd-d" placeholder="Password"></br></br>
            <input type="submit" name="submit-signup" value="SIGN UP">
          </form>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>