<?php
include "connection.php";
include "session.php";
if(isset($_POST['submit']))
{
   $name=$_POST['name'];
   $detail=$_POST['detail'];  
   $status="1";

   $filename=rand().$_FILES['image']['name'];
   $tempname=$_FILES['image']['tmp_name'];
   $folder="images/".$filename;
    if(move_uploaded_file($tempname,$folder))
    {
       echo"uploaded successfully";
   
       
    }
    else{
       echo"failed to upload image";
        
    }
    $sql="INSERT INTO `movies`( `name`, `detail`, `image`, `status`) VALUES ('$name','$detail','$filename','$status')";
    if(mysqli_query($conn ,$sql))
{
$_SESSION['message']="inserted successfully";
   header("location:movies.php");
   exit();
}
 

}
?>