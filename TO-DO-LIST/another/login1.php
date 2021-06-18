<?php
  session_start();
  if(isset($_SESSION['username']))
  {
    echo "<script> Window.loaction='project.php'</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  *{
    margin:0;
    padding:0;
    box-sizing:border-box;
  }
  </style>
  </head>
  <body>
<div style="background-color:teal;height:100vh;width:100%;display:flex; align-items:center;justify-content:center;">
<div style="border:5px solid gold;border-radius:10px;background-color:white;width:300px;height:300px;display:flex; align-items:center;justify-content:center;">
   <form action="run.php" method="post">
   <div  style="display:flex;align-items:center;justify-content:center; height:30px">
   <h3 >SIGN IN</h3>
      </div>
   <label for="name"><span style="font-size:20px";>Username</span></label></br>
     <input type="text" style="padding:5px;width:250px; border:none;border-bottom:2px solid hotpink;outline:none; " id="name" name="nme" placeholder="enter username"></br></br>
     <label for="psswrd"><span style="font-size:20px";>Password</span></label></br>
     <input type="password" style="padding:5px;width:250px; border:none;border-bottom:2px solid hotpink;outline:none; " id="psswrd" name="psswrd" placeholder="Password"></br></br>
     <input type="submit" name="submit" style="color:blue ;padding:5px;border:1px solid blue;font-weight:bold"></br><p><a href="signup.php" style="color:blue;text-decoration:none;margin:100px;">SIGNUP</a></p>
   </form>
   
</div>
</div>

<?php include_once("footer.php");?>