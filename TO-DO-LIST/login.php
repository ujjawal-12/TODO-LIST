<?php
include 'connection.php';
$name=$_POST['nme']; $ps=$_POST['psswrd'];
$sql="SELECT psswrd from login where username='$name'";
$result=mysqli_query($conn,$sql);
 if($no=mysqli_num_rows($result)>0){
    $ft=mysqli_fetch_all($result);
    $psw=$ft[0][0];
  if($psw===$ps){ $_SESSION["username"]="'$name'";
                   header("Location:project.php");} 
  else { if(!(empty($ps))){echo "<script>alert('invalid password');</script>";}
       else{ echo "<script>alert('enter the password field');</script>";}}
 }
else{
  if(!(empty($name)|| empty($ps))){
  echo "<script>alert('invalid username');</script>";}
  else{ echo "<script>alert('enter the field');</script>";}
}
?>