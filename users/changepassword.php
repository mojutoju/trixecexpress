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
if(isset($_POST['security'])){
  $password = mysqli_real_escape_string($dbc, $_POST['password']);
  $password = md5($password);
  $cpassword = mysqli_real_escape_string($dbc,$_POST['cpassword']);
  $pass = $_POST['password'];
  $cpass = $_POST['cpassword'];
$email = $_SESSION['login'];

         
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

  $update = mysqli_query($dbc, "UPDATE `users` SET `password` = '$password' , `cpassword` = '$cpassword' WHERE email = '$email'; ");
  if($update){
  
  
  
  ?>
  
  
  
  
<script>
   
    swal({
          text: "Success",
  title: "Password Updated, Type in new Password when logging in. ",

  icon: "success",
  button: "Close",
});
</script>  
 
 
  
  
  
  <?php
  
  }else{

  }
}
}

?>

         
        
        <?php
        
$totalrequests = "SELECT count(*) FROM `requests` WHERE email = '".$_SESSION['login']."'  ";
$requesting = mysqli_query($dbc, $totalrequests);
$requeststotal = mysqli_fetch_array($requesting);




$pendingrequests = "SELECT count(*) FROM `requests` WHERE email = '".$_SESSION['login']."' AND confirmation = 'Pending'   ";
$pending = mysqli_query($dbc, $pendingrequests);
$requestspending = mysqli_fetch_array($pending);

$acceptedrequests = "SELECT count(*) FROM `requests` WHERE email = '".$_SESSION['login']."' AND confirmation = 'Completed'   ";
$accepted = mysqli_query($dbc, $acceptedrequests);
$requestscompleted = mysqli_fetch_array($accepted);

$declinedrequests = "SELECT count(*) FROM `requests` WHERE email = '".$_SESSION['login']."' AND confirmation = 'Uncompleted'   ";
$declining = mysqli_query($dbc, $declinedrequests);
$requestsuncompleted = mysqli_fetch_array($declining);

$paidrequests = "SELECT count(*) FROM `requests` WHERE email = '".$_SESSION['login']."' AND paymentstatus = 'Paid' ";
$paid = mysqli_query($dbc, $paidrequests);
$requestspaid = mysqli_fetch_array($paid);

$unpaidrequests = "SELECT count(*) FROM `requests` WHERE email = '".$_SESSION['login']."' AND paymentstatus = 'Not Paid' ";
$unpaid = mysqli_query($dbc, $unpaidrequests);
$requestsunpaid = mysqli_fetch_array($unpaid);



        
        ?>
        
      <div class="main-panel">
          
          
           
          
          
          
          
          <div class="content-wrapper">
        
     
               
        
       <div class="page-header">
           
             
      
       
     
                
            
                
                
                
                
                
            </div>
            
          
            <br>
            
                   <h3 class="page-title">
                <span class="page-title-icon bg-danger text-white mr-2">
                  <i class="fa fa-lock"></i>
                </span> Change Password </h3>
            
            <hr>
        
        
      

<form name="security" action="changepassword.php" method="POST">

<label> New Password </label>
  <input type="password" class="form-control" name="password" placeholder="Enter New Password"  style="font-size: 13px;" id="newpassword" required> 

  <br>
  
<span id='text'></span>

<br>


  <label> Confirm New Password</label>
  <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password"  style="font-size: 13px;" id="newpass" required> 

<br>

  <input type="submit" class="btn btn-success"  value="Update" name="security">
</form>

          
        
        </div>
        </div>
                <!-- End your project here-->
  </body>
  
<script>


    $('#newpassword, #newpass').on('keyup', function () {
  if ($('#newpassword').val() == $('#newpass').val()) {
    $('#text').html('New Password : Matching').css('color', 'green');
  } else 
    $('#text').html('Not Matching').css('color', 'red');
});

    
    $('#password, #confirm_password').on('keyup', function () {
  if ($('#myInput').val() == $('#confirm_password').val()) {
    $('#message').html('Current Password : Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
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