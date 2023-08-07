<?php include('db/connect.php');
session_start();
if($_SESSION["login"] != null){
    $email = $_SESSION["login"];

}
else{
 echo " <script> window.location.href = 'login.php'; </script>";
}
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
 
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
  
  
    
    
  
    <script src="js/sweetalert.min.js"></script>
    
  
  <style>

  </style>
  
    </head>
    
    <body>
        
        
        <?php include('navbar/navbar.php'); ?>
        
        
        <?php
        
$totalrequests = "SELECT count(*) FROM `requests` WHERE 1  ";
$requesting = mysqli_query($dbc, $totalrequests);
$requeststotal = mysqli_fetch_array($requesting);

$scheduled = "SELECT count(*) FROM `requests` WHERE confirmation = 'Pending' AND paymenttype = 'None' AND paymentstatus = 'Not Paid' ";
$scheduling = mysqli_query($dbc, $scheduled);
$scheduletotal = mysqli_fetch_array($scheduling);


$pendingrequests = "SELECT count(*) FROM `requests` WHERE  confirmation = 'Pending'   ";
$pending = mysqli_query($dbc, $pendingrequests);
$requestspending = mysqli_fetch_array($pending);

$acceptedrequests = "SELECT count(*) FROM `requests` WHERE  confirmation = 'Completed'   ";
$accepted = mysqli_query($dbc, $acceptedrequests);
$requestscompleted = mysqli_fetch_array($accepted);

$declinedrequests = "SELECT count(*) FROM `requests` WHERE  confirmation = 'Uncompleted'   ";
$declining = mysqli_query($dbc, $declinedrequests);
$requestsuncompleted = mysqli_fetch_array($declining);

$paidrequests = "SELECT count(*) FROM `requests` WHERE  paymentstatus = 'Paid' ";
$paid = mysqli_query($dbc, $paidrequests);
$requestspaid = mysqli_fetch_array($paid);

$unpaidrequests = "SELECT count(*) FROM `requests` WHERE paymentstatus = 'Not Paid' ";
$unpaid = mysqli_query($dbc, $unpaidrequests);
$requestsunpaid = mysqli_fetch_array($unpaid);


  
  $user = "SELECT count(*) FROM `users` WHERE 1 ";
$totaluser = mysqli_query($dbc, $user);
$usertotal = mysqli_fetch_array($totaluser);


$pendingusers = "SELECT count(*) FROM `users` WHERE status = 'pending'   ";
$userspend = mysqli_query($dbc, $pendingusers);
$userpending = mysqli_fetch_array($userspend);
  
  
$approvedusers = "SELECT count(*) FROM `users` WHERE status = 'approved'  ";
$usersapprove = mysqli_query($dbc, $approvedusers);
$usersapproved = mysqli_fetch_array($usersapprove);

$unapprovedusers = "SELECT count(*) FROM `users` WHERE status = 'unapproved'  ";
$usersunapprove = mysqli_query($dbc, $unapprovedusers);
$usersunapproved = mysqli_fetch_array($usersunapprove);


        
        ?>
        
      <div class="main-panel">
          
          
           
          
          
          
          
          <div class="content-wrapper">
        
     
               
        
       <div class="page-header">
           
           
             
     
       
  
                
              </div>
            
               
             <h3 class="page-title">
                <span class="page-title-icon bg-danger text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard </h3>
            
            <hr>
            
            
              <div class="row">
              <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background:blue;">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Deliveries <i class="fa fa-handshake-o mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> <?php echo reset($requeststotal); ?></h2>
                
                  </div>
                </div>
              </div>
              
               <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card bg-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Completed Deliveries <i class="fa fa-truck mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> <?php echo reset($requestscompleted); ?> </h2>
                
                  </div>
                </div>
              </div>
              
                <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card bg-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Uncompleted Deliveries <i class="fa fa-truck mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> <?php echo reset($requestsuncompleted); ?> </h2>
                
                  </div>
                </div>
              </div>
              
               <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card bg-warning card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Pending Deliveries <i class="fa fa-truck mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> <?php echo reset($requestspending); ?> </h2>
                
                  </div>
                </div>
              </div>
              
               
               <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card bg-dark card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Scheduled Deliveries <i class="fa fa-calendar mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> <?php echo reset($scheduletotal); ?> </h2>
                
                  </div>
                </div>
              </div>
              
              
                
               <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background:blue;">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Users <i class="fa fa-user mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> <?php echo reset($usertotal); ?> </h2>
                
                  </div>
                </div>
              </div>
              
              
                  <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card bg-warning card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Pending Users <i class="fa fa-user mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> <?php echo reset($userpending); ?> </h2>
                
                  </div>
                </div>
              </div>
              
              
              
                  <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card bg-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Unapproved Users <i class="fa fa-user mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> <?php echo reset($usersunapproved); ?> </h2>
                
                  </div>
                </div>
              </div>
              
                  <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card bg-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Approved Users <i class="fa fa-user mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> <?php echo reset($usersapproved); ?> </h2>
                
                  </div>
                </div>
              </div>
              
              
                <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background:dodgerblue;">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Profits <i class="fa fa-money mdi-24px float-right"></i>
                    </h4>
                    
                        
                  <?php
                  $result = mysqli_query($dbc, 'SELECT SUM(amount) AS total FROM requests'); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['total'];
                  
                  ?>
                  
                    <h2 class="mb-2"> &#8358;<?php echo number_format($sum,2); ?></h2>
               
                    
 </div>
                
                  </div>
                </div>
              
              
                  <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card bg-warning card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Pending Profits <i class="fa fa-money mdi-24px float-right"></i>
                    </h4>
                    
                        
                  <?php
                  $result = mysqli_query($dbc, "SELECT SUM(amount) AS total FROM requests WHERE confirmation = 'Pending' "); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['total'];
                  
                  ?>
                  
                    <h2 class="mb-2"> &#8358;<?php echo number_format($sum,2); ?></h2>
               
                    
 </div>
                
                  </div>
                </div>
              
              
              
                  <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card bg-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Confirmed Profits <i class="fa fa-money mdi-24px float-right"></i>
                    </h4>
                    
                        
                  <?php
                  $result = mysqli_query($dbc, "SELECT SUM(amount) AS total FROM requests WHERE confirmation = 'Completed' "); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['total'];
                  
                  ?>
                  
                    <h2 class="mb-2"> &#8358;<?php echo number_format($sum,2); ?></h2>
               
                    
 </div>
                
                  </div>
                </div>
              
              
              
                  <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card bg-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Uncompleted Profits <i class="fa fa-money mdi-24px float-right"></i>
                    </h4>
                    
                        
                  <?php
                  $result = mysqli_query($dbc, "SELECT SUM(amount) AS total FROM requests WHERE confirmation = 'Uncompleted' "); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['total'];
                  
                  ?>
                  
                    <h2 class="mb-2"> &#8358;<?php echo number_format($sum,2); ?></h2>
               
                    
 </div>
                
                  </div>
                </div>
              
              
              </div>
            
            
            
            
            
               </div>
               </div>
               
               
                              <!-- End your project here-->
  </body>
  

  <script type="text/javascript">

    // Animations initialization
    new WOW().init();
    
    
    

     
   
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