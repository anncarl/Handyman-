<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<form action="register.php" method="post">
              <div class="container">
                  <div class="row">
                   <div class="col-sm-3">
                 
                    <h1>Login</h1>
                    <hr class="mb-3">

                    <label for="email"><b>Email Address</b></label>
                    <input class="form-control" type="email" name="email" required>

                    <label for="password"><b>Password</b></label>
                    <input class="form-control" type="password" name="password" required>
                    <hr class="mb-3">
                    <input class="btn btn-primary" type="submit" name="create" value="sign in">
                   </div>

                  </div>
              </div> 
                
          </form>
</body>
</html>