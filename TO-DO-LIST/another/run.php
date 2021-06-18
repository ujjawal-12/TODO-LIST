<?php 
session_start();
$db_host="localhost";
$db_user="root";
$db_psswrd="";
$db_name="person";
$conn=mysqli_connect($db_host,$db_user,$db_psswrd,$db_name) or die("connection failed");
$name=$_POST['nme'];
$psswrd=$_POST['psswrd'];
$sql="select * from login where username='$name' and psswrd=$psswrd limit 1";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{   
   
    $_SESSION["username"]="ujjawal";
    header("Location:project.php");
   
}
else{  
      header("Location:loigin3.php");
} 
?>