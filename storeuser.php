<?php
echo 1;
$conn=mysqli_connect('localhost','root','','tours');
if(!empty($_POST))
{
  echo 1;
   $fullname=$_POST['fullname'];
   echo $fullname;
   $email=$_POST['email'];
    $address=$_POST['address'];
    
    
    $sql="INSERT INTO users(fullname,email,address)
             VALUES('$fullname','$email','$address')";
             
             if(mysqli_query($conn, $sql))
             {
              echo 'sucCess';
             };
            
};
die();
header('location:index.php')

?>
