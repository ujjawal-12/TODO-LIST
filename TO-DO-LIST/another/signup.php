<?php
$db_host="localhost";
$db_user="root";
$db_psswrd="";
$db_name="person";
$conn=mysqli_connect($db_host,$db_user,$db_psswrd,$db_name) or die("connection failed");
$name=$_POST['nme'];
$psswrd=$_POST['psswrd'];
$sql="insert into login values('$name',$psswrd)";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{   
   echo "sucessfully registered";
}
else{
   header("Location:loigin3.php");
} 
    
  
?>
