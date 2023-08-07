<?php include('db/connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Trixec Express </title>
    <!-- MDB icon -->
    <link rel="icon" href="img/trixec.jpeg" type="image/jpeg" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
  
  
    <style>
        
        
        
        
        
    </style>
    
    
     
  
<script src="js/sweetalert.min.js"></script>
  
  
  </head>
  <body style="background-image:url(img/trixecbgg.jpg); background-size:cover; background-position:center;">
    <!-- Start your project here-->
    <div class="container">
      <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="text-center">
            
                        
               
<?php
if(isset($_POST['login'])){
 
  $username = $_POST['username'];
  
  $password = mysqli_real_escape_string($dbc, $_POST['password']);
  $password = md5($password);

  $sql = mysqli_query($dbc, "SELECT * FROM `login` WHERE username = '".$username."' AND password = '".$password."'");
  $num = mysqli_fetch_array($sql);

  if($num>0) {
 
    $_SESSION['login'] = $username;
      $_SESSION['id'] = $num['id'];
     


?>

    
<script>
   
    swal({
          text: "Success",
  title: "Login Successful ",

  icon: "success",
  button: "Close",
});

 window.location.href = 'dashboard.php';
</script>  


<?php

}else{


?>

  
      
<script>
   
    swal({
          text: "Error",
  title: "<?php echo mysqli_error($dbc); ?> ",

  icon: "error",
  button: "Close",
});
</script>  


  
  



<?php



}}

?>

            
            
            
            
       <div class="card">
           <div class="card-header" style="background-color:white; font-weight:800; font-size:30px;">
               
               Login 
               
           </div>
           
           <div class="card-body">
               
               
               
               
   
               
               
                
              <form name="login" action="login.php" method="POST"> 
                   
                   <div class="form-group">
                       <input type="text" class="form-control" name="username" required style="font-size:14px; border-radius: 24px; padding:12px; " placeholder="Username">
                   </div>
                   
                   <br>
                    <div class="form-group">
                       <input type="password" class="form-control" name="password" required style="font-size:14px; border-radius: 24px; padding:12px; " placeholder="Password">
                   </div>
                   
                        <br>
                    <div class="form-group">
                       <input type="submit" class="btn btn-danger" value="Login" name="login">
                   </div>
                   
                   
               </form>
               
           </div>
           <div class="card-footer"> 
           
             <h6 class="pt-2" style="color:grey;"> 2020 Copyright Reserved @ Trixec Express.</h6>


           
           
           </div>
           
       </div>
       
                </div>
      </div>
    </div>
    <!-- End your project here-->
  </body>

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript">
      
  
       
      if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

  </script>
  
  
</html>
