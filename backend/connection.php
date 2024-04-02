<?php
$server="localhost";
$suser="root";
$password="";
$db="admins";
$conn=mysqli_connect($server,$suser,$password,$db);

if(!$conn)
{
    echo "something went wrong";
}

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
//   echo "Connected successfully";
  // SESSION_start();
  
  // if(!isset($_SESSION['email']))
  
  // {
  //   header("location:login.php");
  //   exit();
  // }
?>