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





    </style>
    
    
  
    
    </head>
    
    <body>
        
<?php include('navbar.php'); ?>  
        
      

     
   
 
     
        

        
       
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
    
}

$sender = $email;
$recipient = 'info@deenaygrltd.com';

$subject = "Deenay Global Resources";
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
}
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
                        <br>
                        <div class="mx-auto">
                    <input type="submit" name="reach" class="btn btn-primary text-right" value="Submit">
                    </form>
                
            </div>
            </div>
            
            
        </div>
        </div>
        </div>
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