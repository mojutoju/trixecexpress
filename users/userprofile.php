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
    <script src="js/preview.js"></script>
    
  
    </head>
    
    <body>
        
        
        <?php include('navbar/navbar.php'); ?>
        
        
      <div class="main-panel">
          
          
           
          
          
          
          
          <div class="content-wrapper">
        
     
               
        
       <div class="page-header">
           
           
           
           
<?php
if(isset($_GET['imageid']) ){
$imageid = $_GET['imageid'];


$delete = mysqli_query($dbc, "DELETE FROM `profileimages` WHERE imageid = '$imageid' ");

if($delete){
  
  
 ?>
  
  
     
<script>
   
    swal({
          text: "Success",
  title: "Profile Image Deleted  ",

  icon: "success",
  button: "Close",
});

</script>  
  
 
 <?php
   
  echo "<script>window.location.replace('userprofile.php');</script>";


}else{
  
}

}

?>


           
           
           
           
           
           
           
           
           
                <?php

if(isset($_POST['images'])){
    $email = $_SESSION["login"];
    $file = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $type=$_FILES['file']['type'];
$limit_size = 2000;
    $tmp_name = $_FILES['file']['tmp_name'];
    $fp      = fopen($tmp_name, 'r');

    $content = fread($fp, filesize($tmp_name));

    $content = addslashes($content);

    fclose($fp);

$allowed =  array('jpg','png','svg', 'jpeg');//allowed types
$ext = pathinfo($file, PATHINFO_EXTENSION);//extension checking


$check = "SELECT * FROM `profileimages` WHERE email ='".$email."'";

$rs = mysqli_query($dbc,$check);

$data = mysqli_fetch_array($rs, MYSQLI_NUM);

if($data[0] > 1) {

   
   ?>
    
<script>
   
    swal({
          text: "Error",
  title: "You have an existing image ",

  icon: "error",
  button: "Close",
});

</script>  



<?php


} else{
if(!in_array($ext,$allowed) )
{

   
   ?>
   
   
   
    
<script>
   
    swal({
          text: "Error",
  title: "Invalid format make sure you upload a clear jpg, png format. ",

  icon: "error",
  button: "Close",
});


</script>  


<?php

}
else
{

  if($_FILES['file']['size'] <= $limit_size)
  {
   ?>
   
   
    
<script>
   
    swal({
          text: "Image Size is less than 2mb ",
  title: "Invalid Size ",

  icon: "error",
  button: "Close",
});

</script>  

   
   
   
   
   <?php




  }else{

  



    if($file){
    $location = "profileimages/$file";
    move_uploaded_file($tmp_name, $location);
    $query = mysqli_query($dbc,"INSERT INTO `profileimages` (`imageid`, `email`, `file`, `size`, `content`  , `type` , `path`, `date`) VALUES (NULL, '".$email."' ,'".$file."',  '".$size."', '".$content."'  ,'".$type."' ,  '".$location."', now() )");

  if($query){
      
      ?>
      
     
<script>
   
    swal({
          text: "Success",
  title: "Profile Image Uploaded  ",

  icon: "success",
  button: "Close",
});

</script>  
  
      <?php
   
  } else{
    
  }


} }


}}
}




?>  
  
   <?php
if(isset($_POST['update'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phoneno =$_POST['phoneno'];
 
$state = $_POST['state'];

$update = mysqli_query($dbc, "UPDATE `users` SET `fname` = '$fname' , `lname` = '$lname' , `phoneno` = '$phoneno',`state` = '$state' WHERE email  = '".$_SESSION['login']."'  ");
if($update){
  
 
 ?>
 
     
     
<script>
   
    swal({
          text: "Success",
  title: "Profile Updated  ",

  icon: "success",
  button: "Close",
});

</script>  
  
 
 
 <?php
 
 
}else {
?>
  
  
      
     
<script>
   
    swal({
          text: "Error",
  title: "Missing Something ? ",

  icon: "error",
  button: "Close",
});

</script>  

<?php }} ?>
   
       
          <h3 class="page-title">
                <span class="page-title-icon bg-danger text-white mr-2">
                  <i class="fa fa-user"></i>
                </span> User Profile </h3>
            

 
        </div>
        
          
 <hr>
            
            
          
          <div class="row">
              
              
               
        <div class="col-md-4 mb-3">
            
              <div class="card">
                    
      <div class="card-header" style="background:white; font-weight:800;"> Profile Picture </div>
      
      
                  
        <?php
            
                        $pic = mysqli_query($dbc, "SELECT * FROM profileimages WHERE email='".$_SESSION['login']."' ");
     $row = mysqli_fetch_assoc($pic);
     
     
     $file = $row['file'];
         $imageid = $row['imageid'];           
             
?>





         
                                            <?php
                $countrows = mysqli_num_rows($pic);
                if($countrows == 1){
      
                  ?>

<div class="card">
         <img src="profileimages/<?php echo $file; ?>" class="img-fluid">
</div>

 <a  href="userprofile.php?imageid=<?php echo  $imageid; ?>" class="btn btn-danger"
 onclick="return confirm('Are you sure you want to delete this profile image ?');"
 > <i class="fa fa-trash"></i> Delete Profile Picture </a>
                  <?php
          
                }else {  ?>
                
              
                
<div id="divImageMediaPreview" style="padding:10px;"><img src="https://www.pngitem.com/pimgs/m/512-5125598_computer-icons-scalable-vector-graphics-user-profile-avatar.png" class="img-fluid img-thumbnail" width="800">
</div>


  <form action="userprofile.php"  method="post" name="images" enctype="multipart/form-data">
    <input id="ImageMedias"  name="file" type="file" required >
    
    <br>    <br>
    <div class="form-group">
        <input type="submit" class="btn btn-danger" value="Upload" name="images">
        
          <?php
            
                        $pic = mysqli_query($dbc, "SELECT * FROM profileimages WHERE email='".$_SESSION['login']."' ");
     $row = mysqli_fetch_assoc($pic);
     
     
     $file = $row['file'];
         $imageid = $row['imageid'];           
             
?>

         
                                            <?php
                $countrows = mysqli_num_rows($pic);
                if($countrows == 1){
      
         echo "



 <a  href='userprofile.php?imageid=$imageid' class='btn btn-danger'
 onclick='return confirm('Are you sure you want to delete this profile image ?');'
 > <i class='fa fa-trash'></i> Delete Profile Picture </a>";
          
                }else { }
         
            ?>
    </div>
    
    
    
      

    
    </form>
    
            
              <?php
              }
         
            ?>
      
  
    
                    
                </div>
                
            
            
        </div>
        
        
        
        <div class="col-md-6 mb-3">
            
               
<h3> EDIT PROFILE </h3>

<hr>




<form name="update" method="POST" action="userprofile.php">


<label style="font-size: 13px;"> First Name  </label>
<input type="text" class="form-control" placeholder="First name" name="fname" value="<?php echo $fname; ?>" style="font-size: 13px;" >
<br>
<label style="font-size: 13px;"> Last Name  </label>
<input type="text" class="form-control" placeholder="Last name" name="lname" value="<?php echo $lname; ?>" style="font-size: 13px;"> 
<br>
<label style="font-size: 13px;"> E-mail Address </label>
<input type="email" class="form-control" placeholder="E-mail Address" name="email" value="<?php echo $email; ?>" style="font-size: 13px;" readonly>

<br>
<label style="font-size: 13px;"> Phone No  </label>
<input type="text" class="form-control" name="phoneno" placeholder="Phone number" required=""  onkeydown="return ( event.ctrlKey || event.altKey || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
         || (95<event.keyCode && event.keyCode<106)
         || (event.keyCode==8) || (event.keyCode==9) 
         || (event.keyCode>34 && event.keyCode<40) 
         || (event.keyCode==46) )" name="phoneno" value="<?php echo $phoneno; ?>" style="font-size: 13px;">



<br>

<label style="font-size: 13px;"> State of Residence </label>
<select name="state" id="state" class="form-control" style="font-size: 13px;" >
  <option value="<?php echo $state; ?>"> <?php echo $state; ?> </option>
   <option value="" >- Select state of residence -</option>
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
<br>




<input type="submit" class="btn btn btn-md"  style="background-color:red; color:white;" value="Update" name="update">
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
   
   
   
$("#ImageMedias").change(function () {
	if (typeof (FileReader) != "undefined") {
		var dvPreview = $("#divImageMediaPreview");
		dvPreview.html("");            
		$($(this)[0].files).each(function () {
			var file = $(this);                
				var reader = new FileReader();
				reader.onload = function (e) {
					var img = $("<img class='img-fluid img-thumbnail' />");
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

   
    
    // Animations initialization
    new WOW().init();




function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }


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