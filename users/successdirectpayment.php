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
    
  
    </head>
    
    <body>
        
        
        <?php include('navbar/navbar.php'); ?>
        
        
      <div class="main-panel">
          
          
           
          
          
          
          
          <div class="content-wrapper">
        
     
               
        
       <div class="page-header">
           
             
   
       
          <h3 class="page-title">
                <span class="page-title-icon bg-danger text-white mr-2">
                  <i class="fa fa-credit-card"></i>
                </span> Payment Status </h3>
            

 
        
        </div>
          
 <hr>
 
 
 
   

<?php
if(isset($_GET['email']) && isset($_GET['daterequest']) && isset($_GET['pickup']) && isset($_GET['dropoff']) && isset($_GET['zones']) && isset($_GET['amount']) &&  isset($_GET['quantity']) && isset($_GET['itemname']) && isset($_GET['itemstatus']) &&
isset($_GET['description']) && isset($_GET['sendername']) && isset($_GET['senderphoneno']) && isset($_GET['senderaddress']) && isset($_GET['receivername']) && isset($_GET['receiverphoneno']) && isset($_GET['receiveraddress']) ){
    
 $daterequest = $_GET['daterequest'];
          $pickup = $_GET['pickup'];
          $dropoff = $_GET['dropoff'];
          $zones = $_GET['zones'];
      $amount = $_GET['amount'];
          $quantity = $_GET['quantity'];
          $itemname = $_GET['itemname'];
          $description = $_GET['description'];
          $itemstatus = $_GET['itemstatus'];
          $sendername = $_GET['sendername'];
          $senderphoneno = $_GET['senderphoneno'];
          $senderaddress = $_GET['senderaddress'];
          $receivername = $_GET['receivername'];
          $receiverphoneno = $_GET['receiverphoneno'];
          $receiveraddress = $_GET['receiveraddress'];

    $prev_url=$_SERVER['HTTP_REFERER'];     //this gets the url of the previous page where this page redirects from

    $cart_url = "https://trixecexpress.com/users/processrequests.php";
    $cart_url_www = "https://www.trixecexpress.com/users/processrequests.php";

if($prev_url != $cart_url && $prev_url != $cart_url_www){

?>


<div class="card" style="padding:30px;">
    
    <center>
        <img src="https://www.freeiconspng.com/uploads/error-icon-4.png" class="img-fluid" width="200px">
        <br>
        <br>
        <h4> This is a bad attempt and you will be logged out!.</h4> <br>
        <a href="dashboard.php" class="btn btn-success"> Go back to Dashboard </a>
    </center>
</div>


<?php
}
else{
 if(!isset($_GET['email']) || !isset($_GET['daterequest']) || !isset($_GET['pickup']) || !isset($_GET['dropoff']) || !isset($_GET['zones']) || !isset($_GET['amount'])  || !isset($_GET['quantity']) || !isset($_GET['itemname']) || !isset($_GET['itemstatus']) ||
!isset($_GET['description']) || !isset($_GET['sendername']) || !isset($_GET['senderphoneno']) || !isset($_GET['senderaddress']) || !isset($_GET['receivername']) || !isset($_GET['receiverphoneno']) || !isset($_GET['receiveraddress']) ){
    
       echo "<script>window.location.replace('https://www.trixecexpress.com/users/opt.php?action=logout');</script>";
    } else{
        $ipaddress = $_SERVER['REMOTE_ADDR'];   //this is the ip address of the customer's device
 $daterequest = $_GET['daterequest'];
          $pickup = $_GET['pickup'];
          $dropoff = $_GET['dropoff'];
          $zones = $_GET['zones'];
          $amount = $_GET['amount'];
          $paymenttype = "Direct Payment";
          $paymentstatus = "Paid";
          $confirmation = "Pending";
          $quantity = $_GET['quantity'];
          $itemname = $_GET['itemname'];
          $description = $_GET['description'];
          $itemstatus = $_GET['itemstatus'];
          $sendername = $_GET['sendername'];
          $senderphoneno = $_GET['senderphoneno'];
          $senderaddress = $_GET['senderaddress'];
          $receivername = $_GET['receivername'];
          $receiverphoneno = $_GET['receiverphoneno'];
          $receiveraddress = $_GET['receiveraddress'];


$insert = mysqli_query($dbc, "INSERT INTO `requests` VALUES (NULL, '$email', '$fname', '$lname', '$daterequest', '$pickup', '$dropoff', '$zones', '$amount', '$quantity', '$itemname', '$itemstatus', '$description', '$sendername', '$senderphoneno', '$senderaddress', '$receivername', '$receiverphoneno', '$receiveraddress',
'$paymenttype', '$paymentstatus', '$confirmation', now()) ");
if($insert){

?>


     
    
<div class="card" style="padding:30px;">
    
    <center>
        <img src="https://img.pngio.com/curved-check-mark-circle-icon-transparent-png-svg-vector-check-mark-icon-png-512_512.png" class="img-fluid" width="200px">
        <br><br>
        <h5> Your request has been booked successfully.</h5> <br>
          <a href="requests.php" class="btn btn-success"> Click here to book another request. </a>
    </center>
</div>

<?php 

}else{
    
}

?>





<?php }}} ?>
           </div>

          
          </div>       
        
        
        
        </div>
        
        
        
        
        </div>
                <!-- End your project here-->
  </body>
  

  <script type="text/javascript">

     $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
   
    $('#txtDate').attr('min', maxDate);
});
   
    
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
          
   
   
var regex = /^(.+?)(\d+)$/i;
var cloneIndex = $(".clonedInput").length;

function clone(){
    $(this).parents(".clonedInput").clone()
        .appendTo("body")
        .attr("id", "clonedInput" +  cloneIndex)
        .find("*")
        .each(function() {
            var id = this.id || "";
            var match = id.match(regex) || [];
            if (match.length == 3) {
                this.id = match[1] + (cloneIndex);
            }
        })
        .on('click', 'button.clone', clone)
        .on('click', 'button.remove', remove);
    cloneIndex++;
}
function remove(){
    $(this).parents(".clonedInput").remove();
}
$("button.clone").on("click", clone);

$("button.remove").on("click", remove);


   
   
   
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