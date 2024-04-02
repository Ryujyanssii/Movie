<?php
$server="localhost";
$suser="root";
$password="";
$db="admins";
$conn=mysqli_connect($server,$suser,$password,$db);

// if($conn)
// {
//     echo "Connnection Established";
// }
// else{
//     echo "No NO NO we failed to established your conection";
// }
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
?>