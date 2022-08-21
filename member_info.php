<?php

session_start();

if(!isset($_SESSION['user_email'])){
    header("location:home.html");
    exit();
}

require __DIR__.'/config.php';

$member_id = $_GET['member_id'];

$sql = "SELECT * FROM `team_members` WHERE `id` = $member_id LIMIT 1";

$result = mysqli_query($connection, $sql);

$member = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="team.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/75061f83af.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap');
        body{
            font-family: 'poppins' ,sans serif;
        }
        h3{
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 20px;
        }
        p{
            text-align: center;
            margin-bottom: 30px;
        }
        .image{
            text-align: center;
        }
        .inner-layer{
            display: block;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-data{
	       margin-top: 10px;
	       background-color: #FFF;
       }
       .form-body{
	      padding: 20px;
       }
       .form-head{
	padding: 10px;
	border-bottom: 1px solid;
}
.form-head h2{
	font-size: 22px;
	font-weight: 600;
}
.form-row{
	margin-bottom: 15px;
}
select{
    width: 400px;
    height: 40px;
    background-color: #fff;
}
h6{
    font-size: 25px;
}
input{
    width: 400px;
    height: 40px;
}
textarea{
    width: 400px;
    height: 60px;
}
.form-control{
	background-color: #f7f7ff;
	border-radius: 0px;
}
.form-control:focus{
	box-shadow: none;
	border: 3px solid #138496;
}
.btn-appointment{
	background-color: #02193c !important;
	border-color: #02193c !important;
	width: 150px;
    height: 40px;
    color: #fff;
    border-radius: 20px;
}
.datepicker td, .datepicker th{
	padding: 5px;
}
.dropdown-menu.datepicker{
	max-width: 300px !important;
}
      
    </style>
</head>
<body>
   <!---------------nav section begins-------------------->
   <nav>
    <div class="logo">Fundicrew</div>
    <input type="checkbox" id=click>
    <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
    </label>
    <ul>
        <li><a class="active" href="home.php">Home</a></li>
        <li><a href="team.php">Our Handymen</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="appointment.php">Book appointment</a></li>
    </ul>
</nav>
<!--------------nav sections ends-------------------->

    <div class="wrapper">

        <h1>Team Member</h1>

        <h3>
        <?= $member['name'] ?>
         </h3>

        <div class="image">
            <img src="<?= $member['image'] ?>" alt="">
            </div>
            <p>
        <?= $member['description'] ?>
          </p>
       
         <!--- <div class="form">
          <form action="" method="post">
            Date:<input type="date" name="date"><br>
            Issue:<textarea name="issue"></textarea><br>
            <button type="submit">Submit</button>
        </form>
          </div>--->
          <div class="inner-layer">
          <div class="container">
            <div class="row no-margin">
                <div class="col-sm-5">
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Appointment</h2>
                        </div>
                        <div class="form-body">
        
                            <div class="row form-row">
                              <h6>select service</h6>
                              <select class="form-control"></select>
                            </div>
                             <div class="row form-row">
                              <input type="text" placeholder="Enter Email Adreess" class="form-control">
                            </div>
                            <div class="row form-row">
                              <input type="text" placeholder="Enter phone number" class="form-control">
                            </div>
                           <div class="row form-row">
                              <input id="dat" type="date" placeholder="Appointment Date" class="form-control">
                            </div>
                            

                             <div class="row form-row">
                              <div class="row form-row">
                                <input type="text" placeholder="Enter your Address i.e town" class="form-control">
                              </div>
          
                             <div class="row form-row">
  
                                   <textarea name="" placeholder="enter your message" class="form-control"></textarea>
                            </div>

                             <div class="row form-row">
                               <button class="btn btn-success btn-appointment">
                                 Book Appointment
                               </button>
                               
                            </div>

                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
       

    </div>	
</body>
<!-----------------footer section begins--------------------->
<footer>
  <div class="row">
      <div class="col">
         <div class="logo">Fundicrew</div>
         <p>
             Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Minus similique eligendi commodi repellendus libero exercitationem
         </p>
      </div>
      <div class="col">
          <h3>Office <div class="underline"><span></span></div></h3>
          <p>Utumishi house</p>
          <p>Upperhill, Nairobi</p>
          <p>P.O BOX 3206,60200</p>
          <p class="emailid">fundicrew@gmail.com</p>
          <h4>+254070000000</h4>
      </div>
      <div class="col">
          <h3>Links <div class="underline"><span></span></div></h3>
          <ul>
              <li><a class="active" href="home.php">Home</a></li>
              <li><a href="team.php">Our Handymen</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="appointment.php">Book appointment</a></li>
          </ul>
      </div>
      <div class="col">
      <h3>Our social media <div class="underline"><span></span></div></h3>
      <div class="socialmedia">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-whatsapp"></i>
          <i class="fab fa-instagram"></i>
      </div>
      </div>
  </div>
  <hr>
  <p class="copyright">AnncarlMwendwa @ 2021 - All Rights Reserved</p>
</footer>
<!----------------------footer section ends--------------->
</body>
</html>