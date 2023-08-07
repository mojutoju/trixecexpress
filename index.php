<?php include('db/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Trixec Express -  Most Trusted and Reliable Logistics Company in
Nigeria </title>
    <!-- MDB icon -->
    <link rel="icon" href="img/trixec.jpeg" type="image/jpeg" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
   
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom styles -->
    
    <style>
   
          .sidenav {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 99999;
          top: 0;
          right: 0;
          background-color: white;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }
        
        .sidenav a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 18px;
          color: black;
          display: block;
          transition: 0.3s;
        }
        
        .sidenav a:hover {
          color: #697f2a;
          background:white;
        }
        
        .sidenav .closebtn:hover {
          color: #fff;
          background:transparent;
        }
        
        .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }
        
        @media  screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        
        
           html,
      body,
      header,
      .carousel {
        height: 60vh;
      }

      @media (max-width: 740px) {
        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
.view,body,html{height:100%}@media (max-width:740px){.full-page-intro{height:1000px}}.carousel{height:50%}.carousel .carousel-inner,.carousel .carousel-inner .active,.carousel .carousel-inner .carousel-item{height:100%}@media (max-width:776px){.carousel{height:100%}}.navbar{background-color:rgba(0,0,0,.3)}.page-footer,.top-nav-collapse{background-color:#1C2331}@media only screen and (max-width:768px){.navbar{background-color:#1C2331}}


.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: red;
  color: white;
  padding: 16px 20px;
  border-radius: 10px;
  cursor: pointer;
border:none;
  position: fixed;
  bottom: 23px;
  left: 28px;
  width: 60px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  left: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

body{margin:0}


    </style>
    
      <script src="js/sweetalert.min.js"></script>
  
    
    </head>
    
    <body>
        
<?php include('navbar.php'); ?>  
      
      
            
      
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">
      <div class="view" style="background-image: url('img/bgtrixec.jpg'); background-position:center; background-repeat: no-repeat; background-size: cover;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

          <!-- Content -->
          <div class="text-center text-white mx-5 wow fadeIn">
            <h1 class="mb-4">
             WELCOME TO TRIXECEXPRESS <br>
             <hr>
<strong> MOST TRUSTED AND RELIABLE LOGISTICS COMPANY IN
NIGERIA </strong>

            </h1>

          </div>
          <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

      </div>
    </div>
    <!--/First slide-->

    <!--Second slide-->
    <div class="carousel-item">
      <div class="view" style="background-image: url('img/bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position:center;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

  <!-- Content -->
          <div class="text-center text-white mx-5 wow fadeIn">
            <h1 class="mb-4">
             WELCOME TO TRIXECEXPRESS <br>
             <hr>
<strong> MOST TRUSTED AND RELIABLE LOGISTICS COMPANY IN
NIGERIA </strong>

            </h1>

          </div>
          <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

      </div>
    </div>
    <!--/Second slide-->

    <!--Third slide-->
    <div class="carousel-item">
      <div class="view" style="background-image: url('img/trixecbgg.jpg'); background-repeat: no-repeat; background-size: cover; background-position:center;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

         <div class="text-center text-white mx-5 wow fadeIn">
            <h1 class="mb-4">
             WELCOME TO TRIXECEXPRESS <br>
             <hr>
<strong> MOST TRUSTED AND RELIABLE LOGISTICS COMPANY IN
NIGERIA </strong>

            </h1>

          </div>

        </div>
        <!-- Mask & flexbox options-->

      </div>
    </div>
    <!--/Third slide-->

  </div>
  <!--/.Slides-->

  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->

</div>
<!--/.Carousel Wrapper--> 



        
        <div class="row">
            
            <div class="col-md-6" style="background:red;  color:white;">
                
                <div style="padding:18px; margin:20px;">
                <h2 style="font-weight:800;">
                   
                   WHY WE ARE TRUSTED AND RELIABLE </h2>
                   <hr style="color:white; background:white;">
                   
                   <h5 style="font-weight:bold;">
 <i class="fa fa-lock"></i> Dependable and Secure </h5> 
 
 <p>
 Our well trained and licensed riders have been well trained
to handle your parcels delicately and ensure they are delivered
in time and safely. </p>


<h5 style="font-weight:bold;">


<i class="fa fa-truck"></i> Fast Delivery  </h5> 
<p>
 We have stationed bikes at major areas in Lagos state for
fast and easy pickup. Our riders are familiar with the fastest
routes to take to ensure your packages get to you in due time.

</p>



<h5 style="font-weight:bold;">


<i class="fa fa-star"></i> Excellent Customer Service </h5> 
 
 <p>
Customer satisfaction is our major priority at
TRIXECEXPRESS. Your satisfaction is our utmost priority,we
have well trained customer service personnel to ensure this.
                    
                </p>
                </div>
                
                
            </div>
            
            
            <div class="col-md-6">
                
                <img src="img/trixecdelivery.jpg" class="img-fluid">
                
            </div>
            
            
        </div>
        
 
     
     
     <div style="background-image:url('img/bannertrixec.jpg'); background-position:center; background-size:cover; padding:25px;">
     
<div class="container">
    
    <center>
        
        <h3 style="font-weight:bold; text-align:center; color:white;"> ABOUT TRIXECEXPRESS </h3>
        <p style="color:white;"> We offer same day and next day delivery all over Lagos,
We have bikes stationed at major areas in Lagos state to
enable swift pickup and dropoff. <br>
Our aim is to provide Nigerians with swift and reliable delivery
services And also bridge the gap between point A and point B.</p>
        
     
      
        
    </center>
    
    
</div>
    
        </div>
        
       
            
        </div>
        
        
        <div style="margin-bottom:50px"></div>
        
    
    <div class="container-fluids" style="background-image:url('img/bgred.jpg'); background-position:center; background-size:cover; background-repeat:no-repeat;">
        
        <div class="container">
        <div class="row">
            
            
            <div class="col-md-8 mb-3">
                
                <img src="img/trixecbg.png" class="img-fluid">
                
            </div>
            
            
            
            <div class="col-xl-4 col-md-3 mb-3" style="padding:15px;">
                
                
                <div class="card-header" style="background:red; color:white;">
                <h3 style="font-weight:800;"> Contact Us </h3>
                </div>
                
                <div class="card" style="padding:20px;">
            
<?php 

if(isset($_POST['reach'])) {

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];



if($email){
    
  ?>
  
    
                    
  <script>
     
      swal({
            text: "Success",
    title: "Message Sent Successfully, We will get back to you shortly and contact you via E-mail. ",
  
    icon: "success",
    button: "Close",
  });
  </script>  
     
      
  
  <?php
    


$sender = $email;
$recipient = 'tojumoju@ymail.com';

$subject = "Trixec Express";
$messages = " Hello Management, A client named $fullname  just contacted you. Here is the message : $message";

$headers = 'From:' . $sender;

if (mail($recipient, $subject, $messages, $headers))
{
   
   ?>
   
     
                    
  <script>
     
      swal({
            text: "Success",
    title: "Thank you for contacting us, we will review and get back to you shortly via Email. ",
  
    icon: "success",
    button: "Close",
  });
  </script>  
     
      
   
   <?php
}}
else
{
    echo "Error: Message not accepted";
}

}
?>




  <form name="reach" method="POST" action="index.php">
                        <div class="form-group">
                            <label for="name" style="font-size:13px;">Name</label>
                            <input type="text" class="form-control" name="fullname"  placeholder="Enter name" style="font-size:13px;" required>
                        </div>
                        <div class="form-group">
                            <label for="email" style="font-size:13px;">Email address</label>
                            <input type="email" class="form-control" name="email"  placeholder="Enter email" style="font-size:13px;" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message" style="font-size:13px;">Message</label>
                            <textarea class="form-control" name="message"  rows="6" style="font-size:13px;" required></textarea>
                        </div>
                        <div class="mx-auto">
                    <input type="submit" name="reach" class="btn btn-primary text-right" value="Submit">
                    </form>
                
            </div>
            </div>
            
            
        </div>
        </div>
        </div>
        
        
        
        
<button class="open-button "  data-toggle="modal"
  data-target="#exampleModal"> <i class="fa fa-bullhorn"></i> </button>
  
  
<!-- Modal -->
<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send Reviews</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            
            <label style="font-size:13px;"> Full Name</label>
            <div class="form-group">
                <input type="text" name="fullname" class="form-control" style="font-size:13px;" placeholder="Full Name e.g John Doe" required>
            </div>
            <br>
            
              <label style="font-size:13px;"> E-mail Address</label>
            <div class="form-group">
                <input type="email" name="email" class="form-control" style="font-size:13px;" placeholder="Email Address e.g johndoe@gmail.com" required>
            </div>
            
            <br>
              
              <label style="font-size:13px;"> Comments</label>
            <div class="form-group">
                  <textarea class="form-control" placeholder="Type message.." name="msg" required></textarea>
            </div> <br>
            
              <label style="font-size:13px;"> Ratings</label>
            <div class="form-group">
                <select name="ratings" style="font-size:13px" class="form-control" required>
                    <option value=""> - Rate Us - </option>
                    <option value="Bad"> Bad</option>
                    <option value="Poor">Poor</option>
                    <option value="Good"> Good</option>
                    <option value="Great"> Great</option>
                    <option value="Excellent"> Excellent</option>
                </select>
            </div>
            
            <br>
          <input type="submit" class="btn btn-success" value="Submit Review" name="reviews"> 
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">
          Close
        </button>
       
      </div>
    </div>
  </div>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
        
        
        
        
        
        
        
        
        
        
        
        
   <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
     
<?php include('footer.php'); ?>
       
        <!-- End your project here-->
  </body>
  
   <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript" src="js/sidebar.js"> </script>
  <script type="text/javascript">

    // Animations initialization
    new WOW().init();
      //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
  
  </script>

 
  <!-- Custom scripts -->
  <script type="text/javascript">
      
  
       
      if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

  </script>
  
  
</html>