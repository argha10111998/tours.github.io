<?php
$conn=mysqli_connect('localhost','root','','tours');
if(!empty($_POST))
{
  
   $postname=$_POST['postname'];
   //echo $destination;
   $author=$_POST['author'];
    $date=$_POST['date'];
    echo $postname;
    echo $date;
    $author=$_POST['author'];
    $caption=$_POST['author'];
    $content=$_POST['content'];
    if(isset($_FILES['featuredimage']))
    {
     // echo 1;
     $featuredimage=$_FILES['featuredimage']['name'];
  $temp=$_FILES['featuredimage']['tmp_name'];
  move_uploaded_file($temp,"img/".$featuredimage);
    }
    if(isset($_FILES['postimage']))
    {
     // echo 1;
     $postimage=$_FILES['postimage']['name'];
  $temp=$_FILES['postimage']['tmp_name'];
  move_uploaded_file($temp,"img/".$postimage);
    }
    $sql="INSERT INTO blogs(postname,author,date,caption,featuredimage,postimage,content)
             VALUES('$postname','$author','$date','$caption','$featuredimage','$postimage','$content')";
             
             if(mysqli_query($conn, $sql))
             {
              echo 'sucess';
             };
             unset($_POST);
};
die();
header('location:writeblog.php')

?>
