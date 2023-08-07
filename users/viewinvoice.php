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

.receipt-content .logo a:hover {
  text-decoration: none;
  color: #7793C4; 
}

.receipt-content .invoice-wrapper {
  background: #FFF;
  border: 1px solid #CDD3E2;
  box-shadow: 0px 0px 1px #CCC;
  padding: 40px 40px 60px;
  margin-top: 40px;
  border-radius: 4px; 
}

.receipt-content .invoice-wrapper .payment-details span {
  color: #A9B0BB;
  display: block; 
}
.receipt-content .invoice-wrapper .payment-details a {
  display: inline-block;
  margin-top: 5px; 
}

.receipt-content .invoice-wrapper .line-items .print a {
  display: inline-block;
  border: 1px solid #9CB5D6;
  padding: 13px 13px;
  border-radius: 5px;
  color: #708DC0;
  font-size: 13px;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear; 
}

.receipt-content .invoice-wrapper .line-items .print a:hover {
  text-decoration: none;
  border-color: #333;
  color: #333; 
}


@media (min-width: 1200px) {
  .receipt-content .container {width: 900px; } 
}

.receipt-content .logo {
  text-align: center;
  margin-top: 50px; 
}

.receipt-content .logo a {
  font-family: Myriad Pro, Lato, Helvetica Neue, Arial;
  font-size: 36px;
  letter-spacing: .1px;
  color: #555;
  font-weight: 300;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear; 
}

.receipt-content .invoice-wrapper .intro {
  line-height: 25px;
  color: #444; 
}

.receipt-content .invoice-wrapper .payment-info {
  margin-top: 25px;
  padding-top: 15px; 
}

.receipt-content .invoice-wrapper .payment-info span {
  color: #A9B0BB; 
}

.receipt-content .invoice-wrapper .payment-info strong {
  display: block;
  color: #444;
  margin-top: 3px; 
}

@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .payment-info .text-right {
  text-align: left;
  margin-top: 20px; } 
}
.receipt-content .invoice-wrapper .payment-details {
  border-top: 2px solid #EBECEE;
  margin-top: 30px;
  padding-top: 20px;
  line-height: 22px; 
}


@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .payment-details .text-right {
  text-align: left;
  margin-top: 20px; } 
}
.receipt-content .invoice-wrapper .line-items {
  margin-top: 40px; 
}
.receipt-content .invoice-wrapper .line-items .headers {
  color: #A9B0BB;
  font-size: 13px;
  letter-spacing: .3px;
  border-bottom: 2px solid #EBECEE;
  padding-bottom: 4px; 
}
.receipt-content .invoice-wrapper .line-items .items {
  margin-top: 8px;
  border-bottom: 2px solid #EBECEE;
  padding-bottom: 8px; 
}
.receipt-content .invoice-wrapper .line-items .items .item {
  padding: 10px 0;
  color: #696969;
  font-size: 15px; 
}
@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .line-items .items .item {
  font-size: 13px; } 
}
.receipt-content .invoice-wrapper .line-items .items .item .amount {
  letter-spacing: 0.1px;
  color: #84868A;
  font-size: 16px;
 }
@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .line-items .items .item .amount {
  font-size: 13px; } 
}

.receipt-content .invoice-wrapper .line-items .total {
  margin-top: 30px; 
}

.receipt-content .invoice-wrapper .line-items .total .extra-notes {
  float: left;
  width: 40%;
  text-align: left;
  font-size: 13px;
  color: #7A7A7A;
  line-height: 20px; 
}

@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .line-items .total .extra-notes {
  width: 100%;
  margin-bottom: 30px;
  float: none; } 
}

.receipt-content .invoice-wrapper .line-items .total .extra-notes strong {
  display: block;
  margin-bottom: 5px;
  color: #454545; 
}

.receipt-content .invoice-wrapper .line-items .total .field {
  margin-bottom: 7px;
  font-size: 14px;
  color: #555; 
}

.receipt-content .invoice-wrapper .line-items .total .field.grand-total {
  margin-top: 10px;
  font-size: 16px;
  font-weight: 500; 
}

.receipt-content .invoice-wrapper .line-items .total .field.grand-total span {
  color: #20A720;
  font-size: 16px; 
}

.receipt-content .invoice-wrapper .line-items .total .field span {
  display: inline-block;
  margin-left: 20px;
  min-width: 85px;
  color: #84868A;
  font-size: 15px; 
}

.receipt-content .invoice-wrapper .line-items .print {
  margin-top: 50px;
  text-align: center; 
}



.receipt-content .invoice-wrapper .line-items .print a i {
  margin-right: 3px;
  font-size: 14px; 
}

.receipt-content .footer {
  margin-top: 40px;
  margin-bottom: 110px;
  text-align: center;
  font-size: 12px;
  color: #969CAD; 
}                    
                             
                                    
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
          
          
           
          
          
          
          
          <div class="content-wrapper">
        
     
               
        
       <div class="page-header">
           
             
      
       
     
                
            
                
                
                
                
                
            </div>
            
          
            <br>
            
                   <h3 class="page-title">
                <span class="page-title-icon bg-danger text-white mr-2">
                  <i class="fa fa-folder"></i>
                </span> View Invoice </h3>
            
            <hr>
        
        
      
            
                  
                
                  
              
              <div class="card" style="padding:18px;">
                  
                
                
                        
                        <?php
                        
                        if(isset($_GET['requestid'])){
                            $requestid = $_GET['requestid'];
                        
$select = mysqli_query($dbc,"SELECT * FROM `requests` WHERE email = '".$_SESSION['login']."' AND requestid = '$requestid'   ");
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
$receiverphoneno = $rows['receiverphoneno'];
$confirmation = $rows['confirmation'];
    ?>
    
    
    
    
    
    
    <div class="header" style="padding:10px; text-align:center;">
        
        <h1 style="font-weight:bold; text-align:center;">  Payment Receipt </h1>
        
    </div>
    
    <hr>
    
    <div class="row">
        
        
        <div class="col-sm-4 ">
            	<p> Date of Request : <?php echo $daterequest; ?></p>
            	<p> Pickup Location : <?php echo $pickup; ?> </p>
            			<p> Dropoff Location : <?php echo $dropoff; ?></p>
				
				 
                      
        </div>
        
        
        
        <div class="col-sm-4">
            
               
					<p> Item Name : <?php echo $itemname; ?></p>
				
					<p> Item Status : <?php echo $itemstatus; ?> </p>
					
						<p> Description : <?php echo $description; ?> </p>
						
        </div>
        
        
        <div class="col-sm-4">
            
               
				
						  <p> Receiver Phone No : <?php echo $receiverphoneno; ?> </p>
		
			<p> Receiver Address : <?php echo $receiveraddress; ?> </p>
			
			<p> Payment Method : <?php echo $paymenttype; ?> </p>
                      
                  
                      
						
        </div>
        
        
        
        
          <div class="col-sm-4">
              	<p> Quantity : <?php echo $quantity; ?> </p>
    
			<p> Zones : <?php echo $zones; ?></p>
				<p> Sender Name : <?php echo $sendername; ?> </p>
				
				</div>
				
				
				
				<div class="col-sm-4">
							    
							    <p> Sender Phone No : <?php echo $senderphoneno; ?> </p>
							    
							    <p> Sender Address : <?php echo $senderaddress; ?> </p>
							    
							    <p> Receiver Name : <?php echo $receivername; ?></p>
							    
			  
			
        </div>
        
      <div class="col-sm-4">
            <p> Payment Status : <?php echo $paymentstatus; ?> </p>
                     
                      <p> Confirmation : <?php echo $confirmation; ?> </p>
      </div>
      
     
      
        
    </div>
         
               <hr>
               <div class="text-center">
                   
                   <h3> Total Amount Paid : N<?php echo number_format($amount); ?> </h3>
               </div>
               
               <hr>
                      
                   <div class="right" style="float:right; position:right;">
                       <a onclick="printPage()" class="btn btn-danger btn-sm" style="color:white;"> <i class="fa fa-download"></i> Download Receipt </a>
                   </div>   
                            <?php $j++; }}} ?>
                       
                        </div>
                  
              </div>
              
             
            </div>
            
             <hr>
            
          
        
        </div>
        </div>
                <!-- End your project here-->
  </body>
  
  <script>
function printPage() {
  window.print();
}
</script>
  
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