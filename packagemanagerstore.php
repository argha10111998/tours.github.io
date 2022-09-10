<?php
$conn=mysqli_connect('localhost','root','','tours');
if(!empty($_POST))
{
  
   $destination=$_POST['destination'];
   //echo $destination;
   $days=$_POST['days'];
    $persons=$_POST['persons'];
    $caption=$_POST['caption'];
    $rating=$_POST['rating'];
    $price=$_POST['price'];
    if(isset($_FILES['image']))
    {
     // echo 1;
    $name=$_FILES['image']['name'];
  $temp=$_FILES['image']['tmp_name'];
  move_uploaded_file($temp,"img/".$name);
    }
    
    $sql="INSERT INTO packages(destination,image,persons,caption,rating,price,days)
             VALUES('$destination','$name','$persons','$caption','$rating',' $price','$days')";
             
             if(mysqli_query($conn, $sql))
             {
             // echo 'sucess';
             };
             unset($_POST);
};
header('location:packagemanager.php')

?>
