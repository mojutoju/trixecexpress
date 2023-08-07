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
   
   #errmsg
{
color: red;
}
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
    
    
  
    <script src="js/sweetalert.min.js"></script>
    </head>
    
    <body>
        
     
<?php include('navbar.php'); ?>  
        
      <div style="margin-bottom:90px;"></div>
      
      
      
      
      
      
      
      


<?php
if(isset($_POST['signup'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  
  $password = mysqli_real_escape_string($dbc, $_POST['password']);
  $password = md5($password);
  $cpassword = mysqli_real_escape_string($dbc, $_POST['cpassword']);
  $phoneno =$_POST['phoneno'];
$state = $_POST['state'];
$status = "approved";
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];

               
$pic = mysqli_query($dbc, "SELECT * FROM users WHERE email = '$email'  ");
$row = mysqli_fetch_assoc($pic);
           $countrows = mysqli_num_rows($pic);
           if($countrows == 1){
      ?>
      
      
<script>
   
    swal({
          text: "Error",
  title: "Sorry! User Exists",

  icon: "error",
  button: "Close",
});
</script>  
      
      <?php

           }else{

           
           
           
if($pass != $cpass){
    
 ?>
 
 
<script>
   
    swal({
          text: "Error",
  title: "Password does not match ",

  icon: "error",
  button: "Close",
});
</script>  
 
 
 <?php
    
}else{


$sql = mysqli_query($dbc, "INSERT INTO `users` VALUES (NULL,'$fname', '$lname', '$email', '$password', '$cpassword', '$phoneno', '$state', '$status' , now())  ");
if($sql){
    
    
    ?>
    
    
<script>
   
    swal({
          text: "Success",
  title: "You have successfully registered with Trixec Express and information has been sent to your e-mail address. ",

  icon: "success",
  button: "Close",
});
</script>  


<?php




$to = $email; 
$from = 'noreply@trixecexpress.com'; 
$fromName = 'Trixec Express'; 
 
$subject = "Become a User"; 
 
$htmlContent = "
    <html> 
    <head> 
        <title>Welcome to Trixec Express </title> 
    </head> 
    <body> 

 
 <div class='container'>
   
   <center>
 <img src='https://serving.photos.photobox.com/97292711e9eaeabc6d3f969506d71b836b06e15ff5f3f6d1b27690f1f9540f6975878031.jpg'
  class='img-fluid img-thumbnail' width='800px'> </center>

<b> <h3 style='font-size:25px;'> Dear $fname, </h3> </b> 

<h4>You have completed your registration on Trixec Express. Do not disclose your information to any 3rd party.
</h4>

<h5 style='font-size:20px;'> Kindly take note of the following details. </h5> 


<h3> Firstname : $fname </h3> 
<h3> Lastname : $lname </h3>
<h3> Email Address : $email </h3> 
<h3> Password : $cpassword </h3> 
<h3> Phone number : $phoneno</h3>
<h3> State : $state </h3> 



<img src='https://trixecexpress.com/users/img/trixecc.png' class='img-fluid' width='200'>

<h4> Thank you, <br>
Trixec Express 
</h4>

<p style='letter-spacing:1.5px;'> For more information, visit our website <a style='letter-spacing:1.5px; font-weight:bold;' href='https://www.trixecexpress.com'> Trixec Express </a>   </p>

</div>

    </body> 
    </html>"; 
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 

 
// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
 
 ?>
 
  
 <?php
 
 
 
}else{ 
  
  
  ?>
  
      
<script>
   
    swal({
          text: "Error",
  title: "Sorry! E-mail Delivery Failed",

  icon: "error",
  button: "Close",
});
</script>  
  
  <?php
}






}else{

}
}
}}

?>
    
      
      
      
      
      
      
      
      
      <div class="container">
          
          <div class="row wow fadeIn">
              
              
              
              <div class="col-md-6 mb-3">
                  
                  
                  
                  <img src="https://trixecexpress.com/img/trixecdelivery.jpg" class="img-fluid">
                  
                  
                  
                  
                  
                  
              </div>
              
              
              
              
              <div class="col-md-6 mb-3">
                  
                  
                  <h3> Welcome to Trixec Express </h3>
                  <p> Create an account and begin your delivery request.</p>
                  
                  <hr>
                  
                  
                  
                  
                  <form name="signup" action="signup.php" method="POST">
                      
                      <div class="row">
                          
                          <div class="col-md-6 mb-3">
                           
                      <div class="form-group">
                          <label style="font-size:14px;"> Firstname</label>
                          <input type="text" name="fname" class="form-control" style="font-size:13px;" required placeholder="Enter Firstname">
                      </div>
                          
                              
                          </div>
                          
                          
                          
                          
                            <div class="col-md-6 mb-3">
                           
                      <div class="form-group">
                          <label style="font-size:14px;"> Lastname</label>
                          <input type="text" name="lname" class="form-control" style="font-size:13px;" required placeholder="Enter Lastname">
                      </div>
                          
                              
                          </div>
                          </div>
                          
                           <div class="form-group">
                          <label style="font-size:14px;"> E-mail Address</label>
                          <input type="email" name="email" class="form-control" style="font-size:13px;" required placeholder="Enter E-mail Address">
                      </div>
                      
                      
                      
                      <div class="row">
                          
                          
                          <div class="col-md-6 mb-3">
                              
                              <div class="form-group">
                                 <label style="font-size:14px;"> Password</label>
                              <input type="password" class="form-control" name="password" required style="font-size:13px;" placeholder="Enter Password">
                              </div>
                              
                          </div>
                          
                          
                          <div class="col-md-6 mb-3">
                              
                              <div class="form-group">
                             <label style="font-size:14px;"> Confirm Password </label>    
                              <input type="password" class="form-control" name="cpassword" required style="font-size:13px;" placeholder="Enter Confirm Password">
                              </div>
                          </div>
                          
                          
                          
                      </div>
                          
                          
                          
                          
                          <div class="row">
                              
                              <div class="col-md-6 mb-3">
                                 <div class="form-group">
                          <label style="font-size:14px;"> Phone No</label>
                          <input type="text" id="number"  name="phoneno" class="form-control" style="font-size:13px;" required placeholder="Enter Phone Number">
                          <span id="errmsg"></span>
                      </div>  
                                  
                              </div>
                              
                              
                              <div class="col-md-6 mb-3">
                                   
                          <div class="form-group">
                          <label style="font-size:14px;"> State of Residence</label>
                          
                          <select name="state" id="state" class="form-control" style="font-size:13px;" required>
              <option value="" selected="selected">- Select -</option>
              <option value="Abuja FCT">Abuja FCT</option>
              <option value="Abia">Abia</option>
              <option value="Adamawa">Adamawa</option>
              <option value="Akwa Ibom">Akwa Ibom</option>
              <option value="Anambra">Anambra</option>
              <option value="Bauchi">Bauchi</option>
              <option value="Bayelsa">Bayelsa</option>
              <option value="Benue">Benue</option>
              <option value="Borno">Borno</option>
              <option value="Cross River">Cross River</option>
              <option value="Delta">Delta</option>
              <option value="Ebonyi">Ebonyi</option>
              <option value="Edo">Edo</option>
              <option value="Ekiti">Ekiti</option>
              <option value="Enugu">Enugu</option>
              <option value="Gombe">Gombe</option>
              <option value="Imo">Imo</option>
              <option value="Jigawa">Jigawa</option>
              <option value="Kaduna">Kaduna</option>
              <option value="Kano">Kano</option>
              <option value="Katsina">Katsina</option>
              <option value="Kebbi">Kebbi</option>
              <option value="Kogi">Kogi</option>
              <option value="Kwara">Kwara</option>
              <option value="Lagos">Lagos</option>
              <option value="Nassarawa">Nassarawa</option>
              <option value="Niger">Niger</option>
              <option value="Ogun">Ogun</option>
              <option value="Ondo">Ondo</option>
              <option value="Osun">Osun</option>
              <option value="Oyo">Oyo</option>
              <option value="Plateau">Plateau</option>
              <option value="Rivers">Rivers</option>
              <option value="Sokoto">Sokoto</option>
              <option value="Taraba">Taraba</option>
              <option value="Yobe">Yobe</option>
              <option value="Zamfara">Zamfara</option>
     <option value="Outside Nigeria">Outside Nigeria</option>
            </select>
                         
                      </div>
                               
                                  
                              </div>
                              
                          </div>
                          
                          
                          
                          
                            
                        
                      
              
                        
                        <div class="form-group">
                      
                      <input type="submit" class="btn btn-danger" name="signup"  value="Sign Up">
                          
                      
                        <a href="login.php" class="btn btn-primary"> Click here to Login </a>
                           
                      </div>
                     
                          
                      </div>
                      
                     
                      
                      
                      
                     
                      
                  </form>
                  
                  
              
              
              
              
          </div>
          
      </div>
      
      
      
      
      
            <div style="margin-bottom:80px;"></div>
      
           
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
      
   
    $(document).ready(function () {
  //called when key is pressed in textbox
  $("#number").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Accepts only Numbers").show().fadeOut("slow");
               return false;
    }
   });
});
    
       
      if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

  </script>
  
  
</html>