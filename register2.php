<?php 

include "connect.php";
//this implies that the connection configuration is imported here

if (isset($_POST['submit'])){
  //isset-> if the submit button is run or is active, it does a post function

  $username= $_POST['Username'];
  $email= $_POST['Email'];
  $date=$_POST['Date'];
  $postal=$_POST['Postalcode'];
  $password= $_POST['Password'];
  $rpassword=$_POST['rpassword'];
  $hash = md5($password);

// checking email existence
$sql = "SELECT * FROM credentials WHERE Username='$username'" ;

     $result = mysqli_query($connection, $sql ) ;

     if( mysqli_num_rows( $result ) > 0 )
     {
$existserr = "There is already a user with that username!"  ;
     }
     else{
      if ( $password === $rpassword){
          //if there is a match in the password field,we should run a sql query to add them to the db
      
          $register_query = "INSERT INTO credentials (Username, Email,Date,Postalcode,Password) VALUES ('$username', '$email', '$date','$postal', '$hash')";
      
          $addition= mysqli_query($connection,$register_query);
      
          if($addition){
            header("location:login.php");

          }else{
           $regerr ="Data not entered correctly";
          }
      
      
        }else{
          $passworderr = "Password did not match!";
        }
      }
     
      
       
     }





?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

   
</head>

<body class="hero">
    
<div class="container-wrapper">	
	
    <div class="container">
    
        <div class="row">
        
            <div class="col-md-10 col-md-offset-1 mt-4 mb-4">
            
                <div class="row">

                    <div class="col-sm-6 col-sm-offset-3" style="background-color:secondary;">
                    <?php
      //if a certain error exists,it should echo the error
      if(isset($passworderr)){
        echo $passworderr;
      }
      if(isset($existserr)){
        echo $existserr;
      }
      
      if(isset($regerr)){
        echo $regerr;
      }
      ?>
                   
                      <form action="register.php" method="POST" autocomplete="off">
                       <div class="login-box-wrapper">
                
                       <div class="modal-header">
                       <h4 class="modal-title text-center">Create an Account</h4>
                      </div>

                     <div class="modal-body" style="background-color:white;">
                                                    
                     <div class="row gap-20">
                        
                     <div class="col-sm-12 col-md-12">
                     <div class="form-group"> 
                     <label>Username</label>
                     <input class="form-control" placeholder="Enter your username" name="Username" required type="text"> 
                     </div>             
                     </div>

                                    
                     <div class="col-sm-12 col-md-12">
                     <div class="form-group"> 
                     <label>Email Address</label>
                     <input class="form-control" placeholder="Enter your email address" name="Email" required type="email"> 
                     </div>           
                     </div>

                     <div class="col-sm-12 col-md-12">
                     <div class="form-group"> 
                     <label>Date of Birth</label>
                     <input class="form-control" placeholder="Enter your Date of Birth" name="Date" required type="date"> 
                     </div>           
                     </div>

                     <div class="col-sm-12 col-md-12">
                     <div class="form-group"> 
                     <label>Postal Address</label>
                     <input class="form-control" placeholder="Enter your Postal Address" name="Postalcode" required type="text"> 
                     </div>           
                     </div>
                                    
                     <div class="col-sm-12 col-md-12">  
                     <div class="form-group"> 
                     <label>Password</label>
                     <input class="form-control" placeholder="Enter your password" name="Password" required type="password"> 
                     </div>            
                     </div>

                     <div class="col-sm-12 col-md-12">
                     <div class="form-group"> 
                     <label>Confirm Password</label>
                     <input class="form-control" placeholder="Confirm your Password" name="rpassword" required type="password"> 
                     </div>           
                     </div>
            
                     </div>
                     </div>
                     <div class="modal-footer text-center">
                       <button type="submit" name="submit" class="btn btn-primary">Register</button>
                       
                <p class="login-register-text">Have an account? <a href="login.php"> Log in</a> here.</p>

            
                      </div>
                     </div>
                     </form>
                    </div> 
                </div> 
            </div>
        </div>
    </div>
</div>
</body>

</html>


