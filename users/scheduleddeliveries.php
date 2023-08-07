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
          
          
        <?php
        if(isset($_GET['requestid'])){
            $requestid = $_GET['requestid'];
            
            
            $delete = mysqli_query($dbc, "DELETE FROM `requests` WHERE `requestid` = '$requestid' AND email = '".$_SESSION['login']."' ");
            
            if($delete){
                
                
                ?>
                
                
                
<script>
   
    swal({
          text: "Success",
  title: "Scheduled Request has been deleted. ",

  icon: "success",
  button: "Close",
});

 window.location.href = 'scheduleddeliveries.php';
</script>  
                
                <?php
            }
        }
        
        ?>
          
          
          
          
          <div class="content-wrapper">
        
     
               
        
       <div class="page-header">
           
             
      
       
     
                
            
                
                
                
                
                
            </div>
            
          
            <br>
            
                   <h3 class="page-title">
                <span class="page-title-icon bg-danger text-white mr-2">
                  <i class="fa fa-calendar"></i>
                </span> Scheduled Deliveries </h3>
            
            <hr>
        
        
      
                <input type="text" class="form-control" style="font-size:13px;" id="myInput" placeholder="Search for all scheduled deliveries and requests...">
                  
                  <br>
                  
              
              <div class="card">
                  
                
                    <div class="table-responsive table-hover">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Date of Request </th>
                            <th> Pickup </th>
                            <th> Dropoff </th>
                            <th> Zones </th>
                            <th> Amount </th>
                            <th> Payment Type </th>
                            <th> Status </th>
                            <th> View </th>
                            <th> Delete </th>
                           
                          </tr>
                        </thead>
                        
                        <?php
$select = mysqli_query($dbc,"SELECT * FROM `requests` WHERE email = '".$_SESSION['login']."' AND confirmation = 'Pending' AND paymenttype = 'None' AND paymentstatus = 'Not Paid'   ");
if(mysqli_num_rows($select) > 0){
    $j = 1;
 while($rows = mysqli_fetch_assoc($select)){
$daterequest = $rows['daterequest'];
$pickup = $rows['pickup'];
$dropoff = $rows['dropoff'];
$amount = $rows['amount'];
$zones = $rows['zones'];
$quantity = $rows['quantity'];
$itemname= $rows['itemname'];
$itemstatus = $rows['itemstatus'];
$description = $rows['description'];
$sendername = $rows['sendername'];
$senderphoneno = $rows['senderphoneno'];
$senderaddress = $rows['senderaddress'];
$receivername = $rows['receivername'];
$receiveraddress = $rows['receiveraddress'];
     $dates = date('d F, Y', strtotime($daterequest));
$date = $rows['date'];
$requestid = $rows['requestid'];
$paymenttype = $rows['paymenttype'];
$paymentstatus = $rows['paymentstatus'];
$confirmation = $rows['confirmation'];
    ?>
    
                        <tbody id="myTable">
                            <td> <?php echo $daterequest;  ?> </td>
                            <td> <?php echo $pickup; ?> </td>
                            <td> <?php echo $dropoff; ?> </td>
                            <td> <?php echo $zones; ?> </td>
                            <td>  &#x20A6;<?php echo number_format($amount); ?> </td>
                            <td> <?php echo $paymenttype; ?> </td>
                            <td> <?php echo $confirmation; ?> </td>
                            <td> <a href="viewschedule.php?requestid=<?php echo $requestid; ?>" class="btn btn-success btn-sm"> View </a></td>
                            <td> <a href="scheduleddeliveries.php?requestid=<?php echo $requestid; ?>" class="btn btn-danger btn-sm"> Delete </a></td>
                            <?php $j++; }} ?>
                        </tbody>
                        
                        </table>
                        </div>
                  
              </div>
              
             
            </div>
            
             <hr>
            
          
        
        </div>
        </div>
                <!-- End your project here-->
  </body>
  
<script>
    $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
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