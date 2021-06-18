<?php
include 'connection.php';
$name1=$_POST['nme1'];
$pss=$_POST['psswrd-d'];
$mail=$_POST['mail'];
if(!(empty($name1)||empty($pss)||empty($mail)))
{   

   $sq_l="select * from login where (username='$name1' or email='$mail')";
   $result1=mysqli_query($conn,$sq_l);
   if($no1=mysqli_num_rows($result1)>0)
   {   $dat =mysqli_fetch_all($result1);
      if($dat[0][0]==$name1){echo "<script>alert('This username is already taken');</script>";}
      if($dat[0][2]==$mail){echo "<script>alert('choose another email');</script>";}

   }
   else{  
      $sq_l="insert into login values('$name1',$pss,'$mail')";
      $result1=mysqli_query($conn,$sq_l);
   
       if($result1)
       {echo "<script>alert('Sucessfully registered');</script>"; }
        else{ echo "<script>alert('password should be number');</script>"; }
   }

   

}
else{
   echo "<script>alert('enter the fields');</script>";
}

    
  ?>

