<?php 
session_start();
if(!isset($_SESSION['username'])){
   header("Location:loigin3.php");
}
$name=$_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./chk.css">
  <title>To Do App</title>
</head>
<body>

  <div id="header1">
    <ul>
      <li ><a href="./logout.php">LOGOUT</a></li>
     
    </ul>
  </div>
  <div id='screen'>
    <div class="box">
      <h1 id="header"><u>TODO APP</u></h1>
      <div class="bx">
       
        <input type='text' id="chk" placeholder="TODO LIST" name="data">
        <button id='set' type="button" name="data">save</button><br>
       
      </div>
      <ul id='item'>
      </ul>
    </div>
  </div>
</body>
<script src="./project.js"></script>
</body>
</html>