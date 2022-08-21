<?php 
 $attempt=0;
include "config.php";
//this implies that the connection configuration is imported here

//check if the locked session has been created
if(isset($_SESSION["locked"])){
  $difference=time()-$_SESSION["locked"];
  if($difference>10){
    unset($_SESSION["locked"]);
  }
}

if (isset($_POST['submit'])){
  //isset-> if the submit button is run or is active, it does a post function
  $email= $_POST['Email'];
  $password= $_POST['Password'];
  $attempt=$_POST['hidden'];
 

  if($attempt >= 0 AND $attempt<2){
// checking username existence
$sql = "SELECT * FROM users WHERE Email='$email'" ;

     $result = mysqli_query($connection, $sql ) ;

     if( mysqli_num_rows( $result ) == 0 )
     {
$notregistered=  "This Email is not registered";
$attempt++;
     }
     else{
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            
               $dbpass=$row['Password'];
               if(($password)==$dbpass){
$success='You are logged in';
//redirect
header("location:team.php");
            }else{
              $attempt++;
                  $autherror= "wrong password";
                 // echo '<script type="text/javascript"> alert("error and try again. the no. of attempts is '.$attempt.'") </script>';
               }
            }
     }
  }
  else{
    
        $_SESSION["locked"]=time();
        $wait="Please wait for 10 minutes";
        $attempt = 3;
               echo '<script type="text/javascript"> alert("error and try again. the no. of attempts is '.$attempt.'") </script>';
        

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

<body>
    
<div class="container-wrapper">	
	
    <div class="container">
    
        <div class="row">
        
            <div class="col-md-10 col-md-offset-1 mt-4 mb-4">
            
                <div class="row">
                    

                    <div class="col-sm-6 col-sm-offset-3" style="background-color:secondary;">
                    <?php
      // echo isset($passworderr);
      // echo isset($success);
      // echo isset($regerr);
      if(isset($notregistered)){
        echo $notregistered;
      }
      if(isset($existserr)){
        echo $existserr;
      }
      if(isset($success)){
        echo $success;
      }
      if(isset($autherror)){
        echo $autherror;
      }
      if(isset($wait)){
        echo $wait;
      }
      ?>
                   
                      <form action="login.php" method="POST" autocomplete="off">
                      <?php
                         echo"<input type='hidden' name='hidden' value='".$attempt."'>";
                      ?>


                       <div class="login-box-wrapper">
                
                       <div class="modal-header">
                       <h4 class="modal-title text-center">Log into your Account</h4>
                      </div>

                     <div class="modal-body" style="background-color:white;">
                                                    
                     <div class="row gap-20">
                        
                     <div class="col-sm-12 col-md-12">
                     <div class="form-group"> 
                     <label>Username</label>
                     <input class="form-control" placeholder="Enter your email" name="Email" <?php if($attempt==3){ ?> disabled="disabled"<?php }?> required type="text"> 
                     </div>             
                     </div>

                                    
                    

                     <div class="col-sm-12 col-md-12">
                     <div class="form-group"> 
                     <label> Password</label>
                     <input class="form-control" placeholder="Enter your Password" name="Password" <?php if($attempt==3){ ?> disabled="disabled"<?php }?> required type="password"> 
                     </div>           
                     </div>
            
                     </div>
                     </div>
                     <div class="modal-footer text-center">
                       <button type="submit" name="submit" <?php if($attempt==3){ ?> disabled="disabled"<?php }?> class="btn btn-primary">Login</button>
                       
                <p class="login-register-text">Don't have an account? <a href="register.php"> Register</a> here.</p>
            
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

