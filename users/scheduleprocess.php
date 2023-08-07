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
                  <i class="fa fa-truck"></i>
                </span> Book Delivery Requests  </h3>
            

 
        </div>
        
          
 <hr>
        
        
           <div class="card">
               
               <div class="card-header"> Confirm Schedule Book Requests</div>
               
          <?php
          
      if(isset($_POST['requests'])){
          $daterequest = $_POST['daterequest'];
          $pickup = $_POST['pickup'];
          $dropoff = $_POST['dropoff'];
          $zones = $_POST['zones'];
          $status = $_POST['confirmation'];
          $payment = $_POST['paymentstatus'];
          $paymenttype = $_POST['paymenttype'];
          $quantity = $_POST['quantity'];
          $itemname = $_POST['itemname'];
          $description = $_POST['description'];
          $itemstatus = $_POST['itemstatus'];
          $sendername = $_POST['sendername'];
          $senderphoneno = $_POST['senderphoneno'];
          $senderaddress = $_POST['senderaddress'];
          $receivername = $_POST['receivername'];
          $receiverphoneno = $_POST['receiverphoneno'];
          $receiveraddress = $_POST['receiveraddress'];
          
          
          if($zones == "Mainland Zone A to Mainland Zone A"){
              $amount = 900;
          }else if($zones == "Mainland Zone A to Mainland Zone B "){
              $amount = 1000;
          }else if($zones == "Mainland Zone A to Mainland Zone C"){
              $amount = 1500;
          }else if($zones == "Mainland Zone A to Mainland Zone D"){
              $amount = 1700;
          }else if($zones == "Mainland Zone A to Mainland Zone E"){
              $amount = 1700;
          }else if($zones == "Mainland Zone A to Mainland Zone F"){
              $amount = 1700;
          }else if($zones == "Mainland Zone A to Island Zone A"){
              $amount = 1500;
          }else if($zones == "Mainland Zone A to Island Zone B"){
              $amount = 1500;
          }else if($zones == "Mainland Zone A to Island Zone C"){
              $amount = 2000;
          }else if($zones == "Mainland Zone B to Mainland Zone A"){
              $amount = 1000;
          }else if($zones == "Mainland Zone B to Mainland Zone B"){
              $amount = 900;
          }else if($zones == "Mainland Zone B to Mainland Zone C"){
              $amount = 1500;
          }else if($zones == "Mainland Zone B to Mainland Zone D"){
              $amount = 1700;
          }else if($zones == "Mainland Zone B to Mainland Zone E"){
              $amount = 1700;
          }else if($zones == "Mainland Zone B to Mainland Zone F"){
              $amount = 1700;
          }else if($zones == "Mainland Zone B to Island Zone A"){
              $amount = 1500;
          }else if($zones == "Mainland Zone B to Island Zone B"){
              $amount = 1500;
          }else if($zones == "Mainland Zone B to Island Zone C"){
              $amount = 2000;
          }else if($zones == "Mainland Zone C to Mainland Zone A"){
              $amount = 1500;
          }else if($zones == "Mainland Zone C to Mainland Zone B"){
              $amount = 1500;
          }else if($zones == "Mainland Zone C to Mainland Zone C"){
              $amount = 900;
          }else if($zones == "Mainland Zone C to Mainland Zone D"){
              $amount = 1700;
          }else if($zones == "Mainland Zone C to Mainland Zone E"){
              $amount = 1700;
          }else if($zones == "Mainland Zone C to Mainland Zone F"){
              $amount = 1700;
          }else if($zones == "Mainland Zone C to Island Zone A"){
              $amount = 1500;
          }else if($zones == "Mainland Zone C to Island Zone B"){
              $amount = 1500;
          }else if($zones == "Mainland Zone C to Island Zone C"){
              $amount = 2000;
          }else if($zones == "Mainland Zone D to Mainland Zone A"){
              $amount = 1700;
          }else if($zones == "Mainland Zone D to Mainland Zone B"){
              $amount = 1700;
          }else if($zones == "Mainland Zone D to Mainland Zone C"){
              $amount = 1700;
          }else if($zones == "Mainland Zone D to Mainland Zone D"){
              $amount = 900;
          }else if($zones == "Mainland Zone D to Mainland Zone E"){
              $amount = 1700;
          }else if($zones == "Mainland Zone D to Mainland Zone F"){
              $amount = 1700;
          }else if($zones == "Mainland Zone D to Island Zone A"){
              $amount = 1000;
          }else if($zones == "Mainland Zone D to Island Zone B"){
              $amount = 1500;
          }else if($zones == "Mainland Zone D to Island Zone C"){
              $amount = 2000;
          }else if($zones == "Mainland Zone E to Mainland Zone A"){
              $amount = 1700;
          }else if($zones == "Mainland Zone E to Mainland Zone B"){
              $amount = 1700;
          }else if($zones == "Mainland Zone E to Mainland Zone C"){
              $amount = 1700;
          }else if($zones == "Mainland Zone E to Mainland Zone D"){
              $amount = 1700;
          }else if($zones == "Mainland Zone E to Mainland Zone E"){
              $amount = 900;
          }else if($zones == "Mainland Zone E to Mainland Zone F"){
              $amount = 2000;
          }else if($zones == "Mainland Zone E to Island Zone A"){
              $amount = 1000;
          }else if($zones == "Mainland Zone E to Island Zone B"){
              $amount = 1500;
          }else if($zones == "Mainland Zone E to Island Zone C"){
              $amount = 2000;
          }else if($zones == "Mainland Zone F to Mainland Zone A"){
              $amount = 1700;
          }else if($zones == "Mainland Zone F to Mainland Zone B"){
              $amount = 1700;
          }else if($zones == "Mainland Zone F to Mainland Zone C"){
              $amount = 1700;
          }else if($zones == "Mainland Zone F to Mainland Zone D"){
              $amount = 1700;
          }else if($zones == "Mainland Zone F to Mainland Zone E"){
              $amount = 1700;
          }else if($zones == "Mainland Zone F to Mainland Zone F"){
              $amount = 900;
          }else if($zones == "Mainland Zone F to Island Zone A"){
              $amount = 1000;
          }else if($zones == "Mainland Zone F to Island Zone B"){
              $amount = 1500;
          }else if($zones == "Mainland Zone F to Island Zone C"){
              $amount = 2000;
          }else if($zones == "Island Zone A to Mainland Zone A"){
              $amount = 1500;
          }else if($zones == "Island Zone A to Mainland Zone B"){
              $amount = 1500;
          }else if($zones == "Island Zone A to Mainland Zone C"){
              $amount = 1500;
          }else if($zones == "Island Zone A to Mainland Zone D"){
              $amount = 1000;
          }else if($zones == "Island Zone A to Mainland Zone E"){
              $amount = 1500;
          }else if($zones == "Island Zone A to Mainland Zone F"){
              $amount = 1000;
          }else if($zones == "Island Zone A to Island Zone A"){
              $amount = 900;
          }else if($zones == "Island Zone A to Island Zone B"){
              $amount = 1000;
          }else if($zones == "Island Zone A to Island Zone C"){
              $amount = 1500;
          }else if($zones == "Island Zone B to Mainland Zone A"){
              $amount = 1500;
          }else if($zones == "Island Zone B to Mainland Zone C"){
              $amount = 1500;
          }else if($zones == "Island Zone B to Island Zone B"){
              $amount = 900;
          }else if($zones == "Island Zone C to Island Zone C"){
              $amount = 900;
          }else if($zones == "Island Zone C to Mainland Zone A"){
              $amount = 1500;
          }else if($zones == "Island Zone C to Mainland Zone B"){
              $amount = 1500;
          } 
              

          
        $txref = $lname.$fname."-".$phoneno; //this is a unique reference for each payment
							    ?>
							    
               
               <div class="car" style="padding:20px;">
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
            <p> Payment Status : <?php echo $payment; ?> </p>
                     
                      <p> Confirmation : <?php echo $status; ?> </p>
                      
                      	<p> Amount : N<?php echo number_format($amount); ?> </p>
      </div>
      
     
      
        
    </div>
					
			<hr>
			
			<h5> Confirm Schedule Book Requests </h5>
			<a href="submitschedules.php?email=<?php echo $email."&daterequest=".$daterequest."&pickup=".$pickup."&dropoff=".$dropoff."&zones=".$zones."&amount=".$amount."&quantity=".$quantity."&itemname=".$itemname."&itemstatus=".$itemstatus."&description=".$description."&sendername=".$sendername."&senderphoneno=".$senderphoneno."&senderaddress=".$senderaddress."&receivername=".$receivername."&receiverphoneno=".$receiverphoneno."&receiveraddress=".$receiveraddress."&paymenttype=".$paymenttype."&paymentstatus=".$payment."&confirmation=".$status; ?> " class= "btn btn-success btn-sm"> Yes</a>
			&nbsp; &nbsp;
			<a href="schedulerequests.php" class="btn btn-danger btn-sm"> No  </a>
			
			<hr>
					    
					 
					        
					    
					    
					   
					    
					
					
                  
						
						
					
			
			
			
			
			<?php } ?>	
                   
                   
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