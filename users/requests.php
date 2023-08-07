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
                  <i class="fa fa-handshake-o"></i>
                </span> Requests Booking  </h3>
            

 
        </div>
        
          
 <hr>
            <div id="clonedInput1" class="clonedInput">
     
     <form name="requests" action="processrequests.php" method="POST">
         
         
     
                <label style="font-size:13px;"> Date of Request</label>
                <input type="date" class="form-control" required id="txtDate"  name="daterequest" placeholder="Select Date of Request" style="font-size:13px;">
          
          
          <br>
            
                <div class="row">
             
    
             <div class="col-md-6 mb-3">
                <label style="font-size:13px;"> Pickup Location </label>
               <select name="pickup" class="form-control" style="font-size:13px;" required>
                  
                  <option value=""> Select a Pickup Location </option>
                  <option value="" style="font-weight:bold;"> MAINLAND ZONE A  </option>
                  <option value="Ojuelegba"> Ojuelegba </option>
                  <option value="Surulere">Surulere</option>
                  <option value="Yaba"> Yaba</option>
                  <option value="Shomolu"> Shomolu</option>
                  <option value="Bariga"> Bariga</option>
                  <option value="Mushin"> Mushin</option>
                  <option value="Jibowu"> Jibowu</option>
                  <option value="Onipanu"> Onipanu</option>
                  <option value="Maryland"> Maryland</option>
                  <option value="Iyanaoworo"> Iyanaoworo</option>
                   <option value="" style="font-weight:bold;"> MAINLAND ZONE B </option>
                      <option value="Anthony"> Anthony </option>
                  <option value="Gbagada">Gbagada</option>
                  <option value="Ikeja"> Ikeja</option>
                  <option value="Shomolu"> Shomolu</option>
                  <option value="Oshodi"> Oshodi</option>
                  <option value="Ajao Estate"> Ajao Estate </option>
                  <option value="Mafoluku"> Mafoluku</option>
                  <option value="Isolo"> Isolo</option>
                  <option value="Computer Village"> Computer Village </option>
                  <option value="Ikeja"> Ikeja</option>
                  <option value="G.R.A"> G.R.A </option>
                     <option value="" style="font-weight:bold;"> MAINLAND ZONE C </option>
                     <option value="Magodo Phase 1"> Magodo Phase 1 </option>
                     <option value="Magodo Phase 2"> Magodo Phase 2</option>
                     <option value="Omole Phase 1">Omole Phase 1</option>
                     <option value="Omole Phase 2">Omole Phase 2</option>
                     <option value="Ketu">Ketu</option>
                     <option value="Ojota">Ojota</option>
                     <option value="Alausa">Alausa</option>
                     <option value="Mile 12"> Mile 12</option>
                     <option value="Ogba">Ogba</option>
                     
                          <option value="" style="font-weight:bold;"> MAINLAND ZONE D </option>
                          <option value="Ikeja Along"> Ikeja Along</option>
                          <option value="Egbeda"> Egbeda</option>
                          <option value="Idimu"> Idimu</option>
                          <option value="Akowonjo">Akowonjo</option>
                          <option value="Iyana Ipaja">Iyana Ipaja</option>
                          <option value="Gowon Estate">Gowon Estate</option>
                          <option value="Ifako">Ifako</option>
                          <option value="Alimosho">Alimosho</option>
                          <option value="Ikotun">Ikotun</option>
                          <option value="Igando">Igando</option>
                                <option value="" style="font-weight:bold;"> MAINLAND ZONE E </option>
                                <option value="Mile 12">Mile 12</option>
                                <option value="Festac">Festac</option>
                                <option value="Amuwo Odooffin"> Amuwo Odooffin </option>
                                <option value="Satellite Town"> Satellite Town</option>
                                <option value="Navy Town">Navy Town</option>
                                <option value="Alaba"> Alaba</option>
                                <option value="Lasu">Lasu</option>
                                <option value="Tradefair">Tradefair</option>
                                <option value="Ojo"> Ojo</option>
                                <option value="Iba">Iba</option>
                                <option value="Ikorodu">Ikorodu</option>
                                 <option value="" style="font-weight:bold;"> MAINLAND ZONE F </option>
                  <option value="Agege">Agege</option>
                  <option value="Orile Agege">Orile Agege</option>
                  <option value="Fagba">Fagba</option>
                  <option value="Oko Aba">Oko Aba</option>
                  <option value="Abule Egba"> Abule Egba</option>
                    <option value="" style="font-weight:bold;"> ISLAND ZONE A </option>
                    <option value="Ikoyi">Ikoyi</option>
                    <option value="Banana Island">Banana Island</option>
                    <option value="Victoria Island">Victoria Island</option>
                    <option value="Oniru">Oniru</option>
                    <option value="Park View">Park View</option>
                    <option value="Dolphin Estate">Dolphin Estate</option>
                    <option value="Lagos Island">Lagos Island</option>
                    <option value="Marina">Marina</option>
                       <option value="" style="font-weight:bold;"> ISLAND ZONE B </option>
                       <option value="Lekki Phase 1"> Lekki Phase 1</option>
                       <option value="Lekki Phase 2">Lekki Phase 2</option>
                       <option value="3rd Roundabout"> 3rd Roundabout</option>
                       <option value="Osapa London">Osapa Lodon</option>
                       <option value="Alpha Beach">Alpha Beach</option>
                       <option value="Chisco">Chisco</option>
                       <option value="Agungi">Agungi</option>
                       <option value="Chevron">Chevron</option>
                       <option value="Femi Okunnu">Femi Okunnu</option>
                       <option value="VGC">VGC</option>
                       <option value="" style="font-weight:bold;"> ISLAND ZONE C </option>
                       <option value="Ajah">Ajah</option>
                       <option value="Badore">Badore</option>
                       <option value="Abraham Adesanya">Abraham Adesanya</option>
                       <option value="Sangotedo">Sangotedo</option>
                       <option value="Awoyaya">Awoyaya</option>
                       <option value="Lakowe">Lakowe</option>
              </select>
            </div> 
             
             
             
             
             <div class="col-md-6 mb-3">
                <label style="font-size:13px;"> Dropoff Location </label>
              <select name="dropoff" class="form-control" style="font-size:13px;" required>
                  
                  <option value=""> Select a Dropoff Location </option>
                  <option value="" style="font-weight:bold;"> MAINLAND ZONE A  </option>
                  <option value="Ojuelegba"> Ojuelegba </option>
                  <option value="Surulere">Surulere</option>
                  <option value="Yaba"> Yaba</option>
                  <option value="Shomolu"> Shomolu</option>
                  <option value="Bariga"> Bariga</option>
                  <option value="Mushin"> Mushin</option>
                  <option value="Jibowu"> Jibowu</option>
                  <option value="Onipanu"> Onipanu</option>
                  <option value="Maryland"> Maryland</option>
                  <option value="Iyanaoworo"> Iyanaoworo</option>
                   <option value="" style="font-weight:bold;"> MAINLAND ZONE B </option>
                      <option value="Anthony"> Anthony </option>
                  <option value="Gbagada">Gbagada</option>
                  <option value="Ikeja"> Ikeja</option>
                  <option value="Shomolu"> Shomolu</option>
                  <option value="Oshodi"> Oshodi</option>
                  <option value="Ajao Estate"> Ajao Estate </option>
                  <option value="Mafoluku"> Mafoluku</option>
                  <option value="Isolo"> Isolo</option>
                  <option value="Computer Village"> Computer Village </option>
                  <option value="Ikeja"> Ikeja</option>
                  <option value="G.R.A"> G.R.A </option>
                     <option value="" style="font-weight:bold;"> MAINLAND ZONE C </option>
                     <option value="Magodo Phase 1"> Magodo Phase 1 </option>
                     <option value="Magodo Phase 2"> Magodo Phase 2</option>
                     <option value="Omole Phase 1">Omole Phase 1</option>
                     <option value="Omole Phase 2">Omole Phase 2</option>
                     <option value="Ketu">Ketu</option>
                     <option value="Ojota">Ojota</option>
                     <option value="Alausa">Alausa</option>
                     <option value="Mile 12"> Mile 12</option>
                     <option value="Ogba">Ogba</option>
                     
                          <option value="" style="font-weight:bold;"> MAINLAND ZONE D </option>
                          <option value="Ikeja Along"> Ikeja Along</option>
                          <option value="Egbeda"> Egbeda</option>
                          <option value="Idimu"> Idimu</option>
                          <option value="Akowonjo">Akowonjo</option>
                          <option value="Iyana Ipaja">Iyana Ipaja</option>
                          <option value="Gowon Estate">Gowon Estate</option>
                          <option value="Ifako">Ifako</option>
                          <option value="Alimosho">Alimosho</option>
                          <option value="Ikotun">Ikotun</option>
                          <option value="Igando">Igando</option>
                                <option value="" style="font-weight:bold;"> MAINLAND ZONE E </option>
                                <option value="Mile 12">Mile 12</option>
                                <option value="Festac">Festac</option>
                                <option value="Amuwo Odooffin"> Amuwo Odooffin </option>
                                <option value="Satellite Town"> Satellite Town</option>
                                <option value="Navy Town">Navy Town</option>
                                <option value="Alaba"> Alaba</option>
                                <option value="Lasu">Lasu</option>
                                <option value="Tradefair">Tradefair</option>
                                <option value="Ojo"> Ojo</option>
                                <option value="Iba">Iba</option>
                                <option value="Ikorodu">Ikorodu</option>
                                 <option value="" style="font-weight:bold;"> MAINLAND ZONE F </option>
                  <option value="Agege">Agege</option>
                  <option value="Orile Agege">Orile Agege</option>
                  <option value="Fagba">Fagba</option>
                  <option value="Oko Aba">Oko Aba</option>
                  <option value="Abule Egba"> Abule Egba</option>
                    <option value="" style="font-weight:bold;"> ISLAND ZONE A </option>
                    <option value="Ikoyi">Ikoyi</option>
                    <option value="Banana Island">Banana Island</option>
                    <option value="Victoria Island">Victoria Island</option>
                    <option value="Oniru">Oniru</option>
                    <option value="Park View">Park View</option>
                    <option value="Dolphin Estate">Dolphin Estate</option>
                    <option value="Lagos Island">Lagos Island</option>
                    <option value="Marina">Marina</option>
                       <option value="" style="font-weight:bold;"> ISLAND ZONE B </option>
                       <option value="Lekki Phase 1"> Lekki Phase 1</option>
                       <option value="Lekki Phase 2">Lekki Phase 2</option>
                       <option value="3rd Roundabout"> 3rd Roundabout</option>
                       <option value="Osapa London">Osapa Lodon</option>
                       <option value="Alpha Beach">Alpha Beach</option>
                       <option value="Chisco">Chisco</option>
                       <option value="Agungi">Agungi</option>
                       <option value="Chevron">Chevron</option>
                       <option value="Femi Okunnu">Femi Okunnu</option>
                       <option value="VGC">VGC</option>
                       <option value="" style="font-weight:bold;"> ISLAND ZONE C </option>
                       <option value="Ajah">Ajah</option>
                       <option value="Badore">Badore</option>
                       <option value="Abraham Adesanya">Abraham Adesanya</option>
                       <option value="Sangotedo">Sangotedo</option>
                       <option value="Awoyaya">Awoyaya</option>
                       <option value="Lakowe">Lakowe</option>
              </select>
            </div> 
             
             
            <div class="col-md-6 mb-3">
                <label style="font-size:13px;"> Pickup Zone - Dropoff Zone </label>
                <select  id="type" name="zones" class="form-control" style="font-size:13px;" required>
                    <option value="" style="font-weight:bold;"> - Select a Pickup - Dropoff Zone - </option>
<option value="Mainland Zone A to Mainland Zone A">Mainland Zone A – Mainland Zone A</option>
<option value="Mainland Zone A to Mainland Zone B "> Mainland Zone A – Mainland Zone B </option>
<option value="Mainland Zone A to Mainland Zone C">Mainland Zone A - Mainland Zone C</option>
<option value="Mainland Zone A to Mainland Zone D">Mainland Zone A – Mainland Zone D</option>
<option value="Mainland Zone A to Mainland Zone E">Mainland Zone A – Mainland Zone E</option>
<option value="Mainland Zone A to Mainland Zone F "> Mainland Zone A – Mainland Zone F </option>
<option value="Mainland Zone A to Island Zone A">Mainland Zone A – Island Zone A</option>
<option value="Mainland Zone A to Island Zone B">Mainland Zone A – Island Zone B</option>
<option value="Mainland Zone A to Island Zone C">Mainland Zone A – Island Zone C</option>


   <option value="Mainland Zone B to Mainland Zone A">Mainland Zone B – Mainland Zone A
</option>
<option value="Mainland Zone B to Mainland Zone B"> Mainland Zone B – Mainland Zone B </option>
<option value="Mainland Zone B to Mainland Zone C">Mainland Zone B - Mainland Zone C</option>
<option value="Mainland Zone B to Mainland Zone D">Mainland Zone B – Mainland Zone D</option>
<option value="Mainland Zone B to Mainland Zone E">Mainland Zone B – Mainland Zone E</option>
<option value="Mainland Zone B to Mainland Zone F "> Mainland Zone B – Mainland Zone F </option>
<option value="Mainland Zone B to Island Zone A">Mainland Zone B – Island Zone A</option>
<option value="Mainland Zone B to Island Zone B">Mainland Zone B – Island Zone B</option>
<option value="Mainland Zone B to Island Zone C">Mainland Zone B – Island Zone C</option>


<option value="Mainland Zone C to Mainland Zone A">Mainland Zone C - Mainland Zone A</option>
<option value="Mainland Zone C to Mainland Zone B">Mainland Zone C - Mainland Zone B</option>
<option value="Mainland Zone C to Mainland Zone C">Mainland Zone C - Mainland Zone C</option>
<option value="Mainland Zone C to Mainland Zone D">Mainland Zone C - Mainland Zone D</option>
<option value="Mainland Zone C to Mainland Zone E">Mainland Zone C - Mainland Zone E</option>
<option value="Mainland Zone C to Mainland Zone F">Mainland Zone C - Mainland Zone F</option>
<option value="Mainland Zone C to Island Zone A">Mainland Zone C – Island Zone A</option>
<option value="Mainland Zone C to Island Zone B">Mainland Zone C – Island Zone B</option>
<option value="Mainland Zone C to Island Zone C">Mainland Zone C – Island Zone C</option>


 <option value="Mainland Zone D to Mainland Zone A">Mainland Zone D - Mainland Zone A</option>
 <option value="Mainland Zone D to Mainland Zone B">Mainland Zone D - Mainland Zone B</option>
 <option value="Mainland Zone D to Mainland Zone C">Mainland Zone D - Mainland Zone C</option>
 <option value="Mainland Zone D to Mainland Zone D">Mainland Zone D - Mainland Zone D</option>
 <option value="Mainland Zone D to Mainland Zone E">Mainland Zone D - Mainland Zone E</option>
 <option value="Mainland Zone D to Mainland Zone F">Mainland Zone D - Mainland Zone F</option>
<option value="Mainland Zone D to Island Zone A">Mainland Zone D – Island Zone A</option>
<option value="Mainland Zone D to Island Zone B">Mainland Zone D – Island Zone B</option>
<option value="Mainland Zone D to Island Zone C">Mainland Zone D – Island Zone C</option>


 <option value="Mainland Zone E to Mainland Zone A">Mainland Zone E - Mainland Zone A</option>
 <option value="Mainland Zone E to Mainland Zone B">Mainland Zone E - Mainland Zone B</option>
 <option value="Mainland Zone E to Mainland Zone C">Mainland Zone E - Mainland Zone C</option>
 <option value="Mainland Zone E to Mainland Zone D">Mainland Zone E - Mainland Zone D</option>
 <option value="Mainland Zone E to Mainland Zone E">Mainland Zone E - Mainland Zone E</option>
 <option value="Mainland Zone E to Mainland Zone F">Mainland Zone E - Mainland Zone F</option>
<option value="Mainland Zone E to Island Zone A">Mainland Zone E – Island Zone A</option>
<option value="Mainland Zone E to Island Zone B">Mainland Zone E – Island Zone B</option>
<option value="Mainland Zone E to Island Zone C">Mainland Zone E – Island Zone C</option>



 <option value="Mainland Zone F to Mainland Zone A">Mainland Zone F - Mainland Zone A</option>
 <option value="Mainland Zone F to Mainland Zone B">Mainland Zone F - Mainland Zone B</option>
 <option value="Mainland Zone F to Mainland Zone C">Mainland Zone F - Mainland Zone C</option>
 <option value="Mainland Zone F to Mainland Zone D">Mainland Zone F - Mainland Zone D</option>
 <option value="Mainland Zone F to Mainland Zone E">Mainland Zone F - Mainland Zone E</option>

 <option value="Mainland Zone F to Mainland Zone F">Mainland Zone F - Mainland Zone F</option>
<option value="Mainland Zone F to Island Zone A">Mainland Zone F – Island Zone A</option>
<option value="Mainland Zone F to Island Zone B">Mainland Zone F – Island Zone B</option>
<option value="Mainland Zone F to Island Zone C">Mainland Zone F – Island Zone C</option>


<option value="Island Zone A to Mainland Zone A"> Island Zone A - Mainland Zone A</option>
<option value="Island Zone A to Mainland Zone B"> Island Zone A - Mainland Zone B</option>
<option value="Island Zone A to Mainland Zone C"> Island Zone A - Mainland Zone C</option>
<option value="Island Zone A to Mainland Zone D"> Island Zone A - Mainland Zone D</option>
<option value="Island Zone A to Mainland Zone E"> Island Zone A - Mainland Zone E</option>
<option value="Island Zone A to Mainland Zone F"> Island Zone A - Mainland Zone F</option>
<option value="Island Zone A to Island Zone A"> Island Zone A - Island Zone A</option>
<option value="Island Zone A to Island Zone B"> Island Zone A - Island Zone B</option>
<option value="Island Zone A to Island Zone C"> Island Zone A - Island Zone C</option>

<option value="Island Zone B to Mainland Zone A"> Island Zone B - Mainland Zone A</option>
<option value="Island Zone B to Island Zone B"> Island Zone B - Island Zone B</option>
<option value="Island Zone B to Mainland Zone C"> Island Zone B - Mainland Zone C</option>


<option value="Island Zone C to Island Zone C"> Island Zone C - Island Zone C</option>
<option value="Island Zone C to Mainland Zone A"> Island Zone C - Mainland Zone A</option>
<option value="Island Zone C to Mainland Zone B"> Island Zone C - Mainland Zone B</option>



                </select>
             
            </div> 
             
               
                 
            <div class="col-md-6 mb-3">
                <label style="font-size:13px;"> Quantity </label>
                <input type="number" class="form-control" placeholder="Input Item Quantity" name="quantity" required style="font-size:13px;" min="1">
                </div>
             
                 
                 
                  <div class="col-md-6 mb-3">
                <label style="font-size:13px;"> Item Name </label>
                <input type="text" class="form-control" name="itemname" required placeholder="Input Item Name" style="font-size:13px;" >
                </div> 
                 
                 
            <div class="col-md-6 mb-3">
                <label style="font-size:13px;"> Description </label>
                <input type="text" class="form-control" name="description" required placeholder="Item Description" style="font-size:13px;" >
                </div>
                
                
                  <div class="col-md-6 mb-3">
                <label style="font-size:13px;"> Item Status </label>
                <select name="itemstatus" class="form-control" required style="font-size:13px;">
                    <option value=""> - Select Item Status - </option>
                    <option value="Fragile">Fragile</option>
                    <option value="Non-Fragile"> Non-Fragile</option>
                    
                    
                </select>
                </div>
             
             
         </div>
         
         
         
          <h3 class="page-title">
                <span class="page-title-icon bg-danger text-white mr-2">
                  <i class="fa fa-user-o"></i>
                </span> Client Information  </h3>
            
  <hr>
  
  <div class="row">
      
      <div class="col-md-6 mb-3">
          <label style="font-size:13px;"> Sender's Name </label>
          <input type="text" name="sendername" class="form-control" value="<?php echo $lname; ?> <?php echo $fname; ?>" style="font-size:13px;">
      </div>
      
        <div class="col-md-6 mb-3">
          <label style="font-size:13px;"> Sender's Phone No </label>
          <input type="text" id="number" name="senderphoneno" class="form-control" value=" <?php echo $phoneno; ?>" style="font-size:13px;">
      </div>
      
         <div class="col-md-6 mb-3">
          <label style="font-size:13px;"> Sender's Address </label>
          <input type="text"  name="senderaddress" class="form-control"  style="font-size:13px;">
      </div>
      
      
        <div class="col-md-6 mb-3">
          <label style="font-size:13px;"> Receiver's Name </label>
          <input type="text" name="receivername" class="form-control" style="font-size:13px;">
      </div>
      
        <div class="col-md-6 mb-3">
          <label style="font-size:13px;"> Receiver's Phone No </label>
          <input type="text" id="number" name="receiverphoneno" class="form-control"  style="font-size:13px;">
      </div>
      
      
         <div class="col-md-6 mb-3">
          <label style="font-size:13px;"> Receiver's Address </label>
          <input type="text"  name="receiveraddress" class="form-control"  style="font-size:13px;">
      </div>
      
  </div>
         
         
         
         
         
         
    
            
               
        
                
                <div class="form-group">
             <input type="submit" class="btn btn-success" value="Book Requests" name="requests">
         </div>
     
         
         
         
       
     </form>
 
          
             
        
        
        
        
        
        
        
        
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