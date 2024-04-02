<?php
if(isset($_POST["submit"])) 
{  

    include("connection.php");
   
    $phone=($_POST['mobile-no']);  
	$email=($_POST['email']);  
	$dob=($_POST['dob']);  
  $fname = ($_POST['first-name']);  
  $mname = ($_POST['middle-name']);  
  $lname = ($_POST['last-name']);
	$password=($_POST['pass']);
    $cpassword=($_POST['cpass']);


    $sql="SELECT * FROM `register` WHERE email='$email'";
    $result=mysqli_query($con, $sql); 
    $num=mysqli_num_rows($result); 

    if($num>0){
      
    header('location:http://localhost/website/index.php');
    exit();
    }else{
        if($password==$cpassword){
       
          $hash= password_hash($password, PASSWORD_DEFAULT);
            $sql="INSERT INTO `register`( `phone`, `email`, `date`, `fname`, `mname`, `lname`, `password`) VALUES ('$phone','$email','$dob','$fname','$mname','$lname','$hash')";
            
            $result=mysqli_query($con,$sql);
           
          
        header('location:http://localhost/website/index.php');
        exit();
            
            }
            else{
           
        header('location:http://localhost/website/index.php');
        exit();
                
            }

    }


}
?>