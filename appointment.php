<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/appointment.css">
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

      <div class="inner-layer">
          <div class="container">
            <div class="row no-margin">
                <div class="col-sm-7">
                    <div class="content">
                        <h1>Book A Slot With us Now and Save Time</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis at lacus at rhoncus. Integer pharetra lacus vitae sapien blandit eleifend. </p>
                        <h2>For Help Call : <br> +254 700000000</h2>
                    </div>
                </div>
                <form action="appointment.php" method="post">
                <div class="col-sm-5">
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Appointment</h2>
                        </div>
                        <div class="form-body">
                            <div class="row form-row">
                              <h6>select service</h6>
                              <select class="form-control" name="services"></select>
                            </div>
                            <div class="row form-row">
                              <h6>select handyman</h6>
                              <select class="form-control" name="handyman"></select>
                            </div>
                             <div class="row form-row">
                              <input type="text" name="email" placeholder="Enter Email Adreess" class="form-control">
                            </div>
                            <div class="row form-row">
                              <input type="text" name="number" placeholder="Enter phone number" class="form-control">
                            </div>
                           <div class="row form-row">
                              <input id="dat" type="text" name="date" placeholder="Appointment Date" class="form-control">
                            </div>
                            
                             <div class="row form-row">
                              <div class="row form-row">
                                <input type="text" placeholder="Enter your Address i.e town" name= "address" class="form-control">
                              </div>
          
                             <div class="row form-row">
  
                                   <textarea name="" placeholder="enter your message" name="message" class="form-control"></textarea>
                            </div>

                             <div class="row form-row">
                               <button class="btn btn-success btn-appointment" name="book">
                                 Book Appointment
                               </button>
                               
                            </div>

                        </div>
                    </div>
                </form>
                
                </div>
            </div>
          </div>
      </div>
      
    </body>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>

    <script>
      $(document).ready(function(){
          $("#dat").datepicker();
      })
    </script>
    
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