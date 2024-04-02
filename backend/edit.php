<?php
include "connection.php";
include "session.php";
if(isset($_POST['submitmovie']))
{
//    $id=$_POST['id'];
//    die();
   $id=$_POST['id'];
   $name = $_POST['name']; 
   $detail =$_POST['detail'];
   $image=$_POST[ 'image'];
   $sql="UPDATE `movies` SET `name`='$name',`detail`='$detail',`image`= '$image' WHERE id='$id' ";
    if (mysqli_query($conn,$sql))  
    {
        $_SESSION['message']= "Movie Updated Successfully!";
		header("location:movies.php");
        exit();
    }else{
        $_SESSION['message']="something went wrong";
        header("location:movies.php");
        exit();
    }


}


?>
