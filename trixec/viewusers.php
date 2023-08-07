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
                </span> View User </h3>
            
            <hr>
            
           
            
                          



<div class="card" style="padding:20px;">
    
      
       <?php 
       if(isset($_GET['id']) && isset($_GET['email'])){
           
           $userid = $_GET['id'];
           $emailid = $_GET['email'];
           
           $select = mysqli_query($dbc,"SELECT * FROM `users` WHERE email = '$emailid' AND id = '$userid'  ");
if(mysqli_num_rows($select) > 0){
    $j = 1;
 while($rows = mysqli_fetch_assoc($select)){

  $id = $rows['id'];
  $fname = $rows['fname'];
  $lname = $rows['lname'];
  $email= $rows['email'];
$cpassword = $rows['cpassword'];
$status = $rows['status'];
$phonenos = $rows['phoneno'];
     $state = $rows['state'];
$date = $rows['date'];
           
           
                 $pic = mysqli_query($dbc, "SELECT * FROM profileimages WHERE email= '$emailid' ");
     $row = mysqli_fetch_assoc($pic);
     
     
     $files = $row['file'];
         $imageid = $row['imageid'];        
           
           
           
   
       
       ?>
       
       
       
       <div class="row">
           
           
           <div class="col-md-6 mb-3">
               
                 <?php
                $countrows = mysqli_num_rows($pic);
                if($countrows == 1){
      
                  ?>

<div class="card">
         <img src="/users/profileimages/<?php echo $files; ?>" class="img-fluid img-thumbnail">
</div>
                  <?php
          
                }else {  ?>
                
              
              <img src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male2-512.png" class="img-fluid img-thumbnail">
            
              <?php
              }
         
            ?>
               
               
           </div>
           
           
             <div class="col-md-6 mb-3">
             
             
             
  <!-- Background color -->
  <div class="card-up indigo lighten-1"></div>


  
  <!-- Content -->

    <!-- Name -->
    <h6 class="card-title"> <i class="fa fa-user"></i> <?php echo $fname; ?> <?php echo $lname; ?> </h6>
    <hr>
    <!-- Quotation -->
    <p>  <i class="fa fa-envelope"></i> <a style="color: black;" href="mailto:<?php echo $email; ?>"> <?php echo $email; ?> </a>
    </p>
    <hr>
    <p>  <i class="fa fa-phone"></i> <a href="tel:<?php echo $phonenos; ?>" style="color:black;"> <?php echo $phonenos; ?>
</a> | <i class="fa fa-lock"></i> <?php echo $cpassword; ?>  </p> <hr>

<p> <i class="fa fa-street-view"></i> State of Residence : <?php echo $state; ?> </p>
<hr>

<p> <i class="fa fa-calendar"></i> Date Created : <?php 
$timestamp = strtotime($date);
 
// Creating new date format from that timestamp
$new_date = date("d-m-Y", $timestamp);


echo $new_date;  ?> </p>



</div>

           
           
           
           
       </div>
       
       
       
       
       
       <?php $j++; }}} ?>
             
  
       </div>     
            
            
               </div>
               </div>
               
               
                              <!-- End your project here-->
  </body>
  
 <script>
        $(document).ready(function () {

    (function ($) {

        $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});
    </script>
    
    
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