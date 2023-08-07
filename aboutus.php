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
        
      

     
     <div style="background-image:url('img/bannertrixec.jpg'); background-position:center; background-size:cover; padding:40px;">
     
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