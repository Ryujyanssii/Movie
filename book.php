<?php
include "connection.php";
// session_start()
if(isset($_POST['book']))
{
    session_start();
    $price=$_POST['price'];
    $email=$_SESSION['email'];
    $sql="SELECT * FROM `register` WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    $num=$result->num_rows;
    if($result->num_rows>0)
    {
        $data=$result->fetch_assoc();
        $userid=$data['id'];
       
        for($i=1;$i<=$num;$i++)
        {
            $ticket=rand();
        
        $sql1= "INSERT INTO `order`(`userid`, `ticketno`) VALUES ('$userid','$ticket')";
    if(mysqli_query($conn,$sql1))
        
    {
        header("Location:booked.php");
        exit();
    }
    // else{
    //     echo"go back and book again";
    // }
    }
    }
}
?>
