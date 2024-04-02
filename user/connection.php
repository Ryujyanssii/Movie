<?php

$servername="localhost";
$user="root";
$password="";
$database= "admins";

$con=mysqli_connect($servername, $user, $password, $database);

if(!$con){
    die("connection failed: ".mysqli_connect_error());
}
?>