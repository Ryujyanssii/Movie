<?php
 include ("connection.php");
if($_SERVER["REQUEST_METHOD"]=='POST') {
        $email=($_POST['email']);
        $password=($_POST['pass']);
       

        $sql="SELECT * FROM `register` WHERE email='$email'";
        $result=mysqli_query($con, $sql);
        $num=mysqli_num_rows($result);  
        if($num==1){
            $data =$result->fetch_assoc();
            
            
           
            if(password_verify($password,$data['password'])){
           
                session_start();
              $_SESSION['login']=true;
              $_SESSION['email']=$email;
              $_SESSION['fname']=$data['fname'];
              $_SESSION['mname']=$data['mname'];
              $_SESSION['lname']=$data['lname'];
              $_SESSION['phone']=$data['phone'];
              $_SESSION['DOB']=$data['date'];
            
              $_SESSION['message']= '
              <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>login sucessfully!</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

              header('location:http://localhost/website/index.php');
              exit;
            }else{
              $_SESSION['message']= '
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Email or Password do not match.</strong>  Please, try again!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          header('location:http://localhost/websites/index.php');
          exit;
       }}
         else{
          $_SESSION['message']= '
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Invalid credentials!</strong> try again!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      header('location:http://localhost/websites/index.php');
      exit;
  
         
    
        }       
}   
?>