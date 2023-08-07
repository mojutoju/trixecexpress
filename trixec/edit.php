<?php include('db/connect.php');
session_start();
?>


<?php

if($_SESSION["login"] != null){
    $username = $_SESSION["login"];

}
else{
 echo " <script> window.location.href = 'login.php'; </script>";
}
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
  <title> Trixec Express </title>
    <link rel="icon" href="img/trixec.jpeg" type="image/jpeg">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
  
  html{
      scroll-behavior : smooth;
  }
  
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
          
 
h6{
    font-weight:bolder;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: blue;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #131313;
}


/*!
 * Start Bootstrap - Simple Sidebar HTML Template (https://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */
/* Toggle Styles */
/* This sidebar modified by seegatesite.com */

#wrapper {
  padding-left: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}


body{
    background: #fafafa;
}


#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin .25s ease-out;
  -moz-transition: margin .25s ease-out;
  -o-transition: margin .25s ease-out;
  transition: margin .25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: red;
    border-color: red;
}

.list-group-item {
    position: relative;
    display: block;
    padding: .75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
 border: 1px solid white; 
 font-size: 15px;
}


.box > .icon { text-align: center; position: relative; }
.box > .icon > .image { position: relative; z-index: 2; margin: auto; width: 88px; height: 88px; border: 8px solid white; line-height: 88px; border-radius: 50%; background: #4396D6; vertical-align: middle; }
.box > .icon:hover > .image { background: #333; }
.box > .icon > .image > i { font-size: 36px !important; color: #fff !important; }
.box > .icon:hover > .image > i { color: white !important; }
.box > .icon > .info { margin-top: -24px; background: rgba(0, 0, 0, 0.04); border: 1px solid #e0e0e0; padding: 15px 0 10px 0; }
.box > .icon:hover > .info { background: rgba(0, 0, 0, 0.04); border-color: #e0e0e0; color: white; }
.box > .icon > .info > h3.title {  font-size: 16px; color: #222; font-weight: 500; }
.box > .icon > .info > p { font-size: 13px; color: #666; line-height: 1.5em; margin: 20px;}
.box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { color: #222; }
.box > .icon > .info > .more a { font-family: "Roboto",sans-serif !important; font-size: 12px; color: #222; line-height: 12px; text-transform: uppercase; text-decoration: none; }
.box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #63B76C; }
.box .space { height: 30px; }


.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

 .card-counter.success{
    background-color: #27E43C;
    color: #FFF;
  }  


 .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  



  .card-counter.warning{
    background-color: orange;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
  
  td, th {
      font-size : 12px;
  }

  </style>
  
  
  
<script src="js/sweetalert.min.js"></script>

  
  
  </head>
  
  <body>
      
      
      
      
 
<div class="d-flex" id="wrapper">
      
      
      
<!-- Sidebar -->
<div class=" border-right" id="sidebar-wrapper" style="background-color:white; ">
  <div class="sidebar-heading" style="font-weight:bold; " > <center> <img src="img/trixec.jpeg" class="img-fluid" width="200px"> </center> </div>
  <div class="list-group list-group-flush">
  <a  href="dashboard.php" class="list-group-item list-group-item-action active" style="font-weight: bold; "> <i class="	fa fa-signal"></i> Dashboard </a>

    

   
   
        <a class="list-group-item list-group-item-action" href="opt.php?action=logout" style="font-weight: bold; "> <i class="fa fa-power-off"></i> Log Out</a>
 
  </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light  border-bottom" style="   background-color:red; ">
    <button class="btn btn-white btn-sm" id="menu-toggle"> <i class="fa fa-bars"></i> Menu</button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" style=" background-color:white;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" ></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item ">
          <a class="nav-link text-white" href="dashboard.php"> <i class="fa fa-user-circle"></i> Welcome Admin <span class="sr-only">(current)</span></a>
        </li>
      

      </ul>
    </div>
  </nav>
  
  
  
    <div class="container-fluid">
       
  <?php 

$request = "SELECT count(*) FROM `requests` WHERE 1  ";
$requests = mysqli_query($dbc, $request);
$count = mysqli_fetch_array($requests);

?>

    
     <!-- Tab panels -->
     <div class="tab-content pt-5">
      
   
      
      
            <!--Panel 3-->
<div class="tab-pane fade in show active" id="panel11" role="tabpanel">
       <h6 style="font-weight:800; text-align:left;"> Edit Orders Setup </h6>
        <hr>
  
  <h6> For Deliveries please fill in this form to enter client's delivery requests </h6>
  <hr>
  
  <div class="container-fluid">
      
  <p> Sender's Information </p>
  <hr>
  
  
   <?php
  if(isset($_POST['requests'])){
      
      $sendername = $_POST['sendername'];
      $item = $_POST['item'];
      $phoneno = $_POST['phoneno'];
      $amount = $_POST['amount'];
      $description = $_POST['description'];
      $address = $_POST['address'];
      $state = $_POST['state'];
      $receivername = $_POST['receivername'];
      $receiverno = $_POST['receiverno'];
      $receiveraddress = $_POST['receiveraddress'];
      $receiverstate = $_POST['receiverstate'];
      $options = $_POST['options'];
      $status = $_POST['status'];
    
    $update = mysqli_query($dbc, " UPDATE `requests` SET `sendername`='$sendername',`item`='$item',`phoneno`='$phoneno',`amount`='$amount',`description`='$description',`address`= '$address',`state`= '$state',`receivername`= '$receivername',`receiverno`= '$receiverno',`receiveraddress`= '$receiveraddress',`receiverstate`= '$receiverstate',`options`='$options', `status` = '$status' WHERE id = '$id'");  
    
    if($update){
        ?>
        
            
             
<script>
   
    swal({
          text: "Success",
  title: "Data Updated",

  icon: "success",
  button: "Close",
});


</script>  
        
        
        <?php
    }
  }
      ?>
  
  
  <?php
if(isset($_GET['id'])){
    
    $id = $_GET['id'];
    
      $request = mysqli_query($dbc,"SELECT * FROM `requests` WHERE id = '$id'  ");
if(mysqli_num_rows($request) > 0){
    $r = 1;
 while($rows = mysqli_fetch_assoc($request)){

$id = $rows['id'];
$sendername = $rows['sendername'];
$item = $rows['item'];
$phoneno = $rows['phoneno'];
$amount = $rows['amount'];
$description = $rows['description'];
$address = $rows['address'];
$state = $rows['state'];
$receivername = $rows['receivername'];
$receiverno = $rows['receiverno'];
$receiveraddress = $rows['receiveraddress'];
$receiverstate = $rows['receiverstate'];
$options = $rows['options'];
$status = $rows['status'];

  ?>
  
  <form name="requests" action="edit.php?id=<?php echo $id; ?>" method="POST">
      
      <div class=" row">
          
      <div class="col-md-4 mb-3">
          
            
      <div class="form-group">
          <label style="font-size:13px;"> Sender's Name </label>
          <input type="text" name="sendername" class="form-control" style="font-size:13px;" value="<?php echo $sendername; ?>">
          
      </div>
      
    
      
      <div class="form-group">
            <label style="font-size:13px;"> Item Name </label>
          <input type="text" name="item" class="form-control" style="font-size:13px;" value="<?php echo $item; ?>">
          
      </div>
          
      </div>   
      
      
      <div class="col-md-4 mb-3">
               <div class="form-group">
                       <label style="font-size:13px;"> Phone Number </label>
              <input type="text" class="form-control" name="phoneno"  value = "<?php echo $phoneno; ?> "  onkeydown="return ( event.ctrlKey || event.altKey || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )"   style="font-size: 13px;">
                  </div>
                  
                  
                  
                    <div class="form-group">
              <label style="font-size:13px;"> Amount (N) </label>
       <input type="text" class="form-control"  value ="<?php echo $amount; ?>"   onkeydown="return ( event.ctrlKey || event.altKey || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )" name="amount"  style="font-size: 13px;">
          
      </div>
          
                  
                  
                  
                  
      </div>
      
     <div class="col-md-8 mb-3">
           <div class="form-group">
              <label style="font-size:13px;"> Item Description </label>
        <textarea class="form-control" name="description"  style="font-size:13px;" value="<?php echo $description; ?>"><?php echo $description; ?></textarea>
      </div>
          
     </div>
     
      <div class="col-md-8 mb-3">
           <div class="form-group">
              <label style="font-size:13px;"> Address </label>
        <textarea class="form-control" name="address" value="<?php echo $address; ?>" style="font-size:13px;"><?php echo $address; ?></textarea>
      </div>
          
          
                      <div class="form-group">
                                <label style="font-size:13px;"> State </label>
<select name="state" id="state" class="form-control"  style="font-size: 13px;" >
              <option value="" selected="selected">- Select state of residence -</option>
              <option selected="selected" value="<?php echo $state; ?>"> <?php echo $state; ?> </option>
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
      
      
  <p> Receiver's Information </p>
  <hr>
  
  
  
  <div class="row">
      
      
       <div class="col-md-4 mb-3">
          
            
      <div class="form-group">
              <label style="font-size:13px;"> Receiver's Name </label>
          <input type="text" name="receivername" class="form-control" style="font-size:13px;" value="<?php echo $receivername; ?>">
          
      </div>
      
    
          
      </div>   
      
      
       <div class="col-md-4 mb-3">
               <div class="form-group">
                       <label style="font-size:13px;"> Receiver's Phone Number </label>
              <input type="text" class="form-control" name="receiverno"  value=" <?php echo $receiverno; ?>"  onkeydown="return ( event.ctrlKey || event.altKey || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )"  style="font-size: 13px;">
                  </div>
      </div>
      
      
        <div class="col-md-8 mb-3">
           <div class="form-group">
          
        <textarea class="form-control" name="receiveraddress"  style="font-size:13px;" value="<?php echo $receiveraddress; ?>"><?php echo $receiveraddress; ?></textarea>
      </div>
      
      
      
      
                      <div class="form-group">
                         <label style="font-size:13px;"> State </label>
<select name="receiverstate" id="state" class="form-control"  style="font-size: 13px;" >
              <option value="">- Select state of residence -</option>
              <option value="<?php echo $state; ?>" selected="selected"> <?php echo $receiverstate; ?> </option>
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
      
      
      <br>
      
       <p> Final Section </p>
  <hr>
      <label style="font-size:13px;"> Who would make the payment ? </label>
      
      <div class="form-group">
  <select name="options" class="form-control" style="font-size:13px;">
             
      <option value="<?php echo $options; ?>"> <?php echo $options; ?> </option>
      <option value="Sender">Senders</option>
      <option value="Receiver">Receivers</option>
  </select>
  </div>
  
  
  <div class="form-group">
        <label style="font-size:13px;"> Payment Status </label>
  <select name="status" class="form-control" style="font-size:13px;">
             
      <option value="<?php echo $status; ?>"> <?php echo $status; ?> </option>
      <option value="Paid">Paid</option>
      <option value="Not Paid">Not Paid</option>
  </select>
  
  </div>
  
     
      
          
     </div>
     
     
      
  </div>
  
     
 
     
    <input type="submit" name="requests" value="Update" class="btn btn-success">  
  </form>
  </div>
      <?php $r++; }}} ?>
      
      </div>
      
 
        
        
        </div>
      
      
      </div>
      
      
      
      
      
      
      
      
      
      </div>
      </div>
      
      </div>
      
   <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script type="text/javascript">
    // Animations initialization
    new WOW().init();


    $(document).ready(function() {

$("#type").change(function() {
    var val = $(this).val();
    if (val == "Academics") {
        $("#size").html(
        "<option value='Mathematics'>Mathematics</option> <option value='English'>English</option>   <option value='FurtherMaths'>Further Maths </option>  <option value='Science'>Basic Science</option>  <option value='SocialStudies'>Social Studies</option>  <option value='CivicEducation'>Civic Education </option>  <option value='Agriculture'>Agriculture</option>  <option value='Physics'>Physics</option>  <option value='Chemistry'>Chemistry</option>  <option value='Biology'>Biology</option>  <option value='Commerce'>Commerce</option>  <option value='Geography'>Geography</option>  <option value='History'>History</option>  <option value='Accounting'>Accounting</option>  <option value='Literature'>Literature</option>  <option value='French'>French</option>  <option value='Physiology'>Physiology</option>  <option value='Anatomy'>Anatomy</option>  <option value='Biochemistry'>Biochemistry</option>  <option value='ComputerScience'>Computer Science</option>  <option value='AdultEducation'>Adult Education </option>  <option value='PublicHealth'>Public Health</option>  <option value='Economics'>Economics</option>  ");
        
    } else if (val == "Non-Academics") {
        $("#size").html("<option value='Catering'> Catering </option> <option value='HealthyLiving'>Healthy Living</option>  <option value='FirstAid'>First Aid</option>  <option value='Nutrition and Diet'>Nutrition and Diet</option>  <option value='Makeup'>Makeup</option>  <option value='Hairstyling'>Hairstyling</option>  <option value='Shoemaking'>Shoemaking</option>  <option value='Dancing'>Dancing</option>  <option value='Organicskincare'>Organic Skin Care</option>  <option value='PublicSpeaking'>Public Speaking</option>");

    } 


    
});


});


 $('#password, #confirm_password').on('keyup', function () {
  if ($('#myInput').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});


$("#ImageMedias").change(function () {
	if (typeof (FileReader) != "undefined") {
		var dvPreview = $("#divImageMediaPreview");
		dvPreview.html("");            
		$($(this)[0].files).each(function () {
			var file = $(this);                
				var reader = new FileReader();
				reader.onload = function (e) {
					var img = $("<img class='img-fluid' />");
					img.attr("style", "width: 500px; height:500px; padding: 10px");
					img.attr("src", e.target.result);
					dvPreview.append(img);
				}
				reader.readAsDataURL(file[0]);                
		});
	} else {
		alert("This browser does not support HTML5 FileReader.");
	}
});


$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
$("#menu-toggle-2").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled-2");
  $('#menu ul').hide();
});

function initMenu() {
  $('#menu ul').hide();
  $('#menu ul').children('.current').parent().show();
  //$('#menu ul:first').show();
  $('#menu li a').click(
    function() {
      var checkElement = $(this).next();
      if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
        return false;
      }
      if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
        $('#menu ul:visible').slideUp('normal');
        checkElement.slideDown('normal');
        return false;
      }
    }
  );
}
$(document).ready(function() {
  initMenu();
});




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


(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);

      
      if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
 
  </script>
</body>

</html>