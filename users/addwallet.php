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
                </span> Fund Wallet  </h3>
            

 
        </div>
        
          
 <hr>
        
        
           <div class="card">
               
               <div class="card-header"> Fund your E-Wallet</div>
               
          <?php
          
          $newstring = substr($phoneno, -7);
        
							        $txref = $lname."-".$newstring; //this is a unique reference for each payment
							    ?>
							    
               
               <div class="car" style="padding:20px;">
              
              
              <form method="POST" action="processwallet.php" name="wallet">
                  		  
					
                      <label style="font-size:13px;"> <i class="fa fa-credit-card"></i> Wallet Amount </label>
                      <input type="text" class="form-control" style="font-size:13px;" name="walletamount" required>
                      
                      <br> 
                      
                    <input type="hidden" class="form-control" name="walletid" value="<?php echo $txref; ?>">
           
           
        
           
        
      
                       
                   
                       
                       
                       <input type="submit" class="btn btn-success" name="wallet" value="Process Payment">
                 
			
							    
						</form>	    
							    
							    
				
                   
                   
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