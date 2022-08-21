<?php

session_start();

require_once('config.php');

if(isset($_POST['create'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['password'];

    if(emailUnique($email)){
        $sql = "INSERT INTO users (firstname, lastname, email, number, password ) VALUES(?,?,?,?,?)";
        $stminsert = $db->prepare($sql);
        $result = $stminsert->execute([$firstname, $lastname, $email, $number, $password]);            
        if($result){
            echo 'saved successfully';
        
            $_SESSION['user_email'] = $email;
        }else{
            echo 'there were errors while saving your data';
        }
    }else{
        echo "Email taken";
    }
}

function emailUnique($email){
    $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
    global $connection;
    $result = $connection->query($sql);

    $row = $result->fetch_assoc();
    return $row == null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usersign up</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div>
    </div>
      <div>
          <form action="register.php" method="post">
              <div class="container">
                  <div class="row">
                   <div class="col-sm-3">
                 
                    <h1>Registration</h1>
                    <p>Fill the form with the correct details</p>
                    <hr class="mb-3">
                    <label for="firstname"><b>Firstname</b></label>
                    <input class="form-control" type="text" name="firstname" required>

                    <label for="lastname"><b>Lastname</b></label>
                    <input class="form-control" type="text" name="lastname" required>

                    <label for="email"><b>Email Address</b></label>
                    <input class="form-control" type="email" name="email" required>

                    <label for="number"><b>Phone Number</b></label>
                    <input class="form-control" type="text" name="number" required>

                    <label for="password"><b>Password</b></label>
                    <input class="form-control" type="password" name="password" required>
                    <hr class="mb-3">
                    <input class="btn btn-primary" type="submit" name="create" value="sign up">
                   </div>

                  </div>
              </div> 
                
          </form>
</div>
</body>
</html>
