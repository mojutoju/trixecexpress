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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Trixec Express -  Most Trusted and Reliable Logistics Company in
Nigeria </title>
    <!-- MDB icon -->
    <link rel="icon" href="/users/img/trixec.jpeg" type="image/jpeg" />
    <!-- plugins:css -->
    <link rel="stylesheet" href="/users/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/users/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/users/assets/css/style.css">
    <!-- End layout styles -->
    <style>
        .sidebar .nav .nav-item.active > .nav-link i {
    color: red;
}

body {
    background: #f2edf3;

}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item:hover {
background: red;
color:white;
}

.text-primary, .list-wrapper .completed .remove {
    color: lightgreen !important;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-toggle:after {
    color: red;
    font-size: 1rem;
}

.sidebar .nav .nav-item.active > .nav-link .menu-title {
    color: red;
    font-family: "ubuntu-medium", sans-serif;
}

.sidebar .nav.sub-menu .nav-item .nav-link.active {
    color: red;
    background: transparent;
}
    </style>
  </head>
  <body>
      
 
    
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="dashboard.php"><img src="/users/img/trixecdash.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img class="img-fluid" src="/users/img/trixecdashh.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
        
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
      
              <img src="https://p7.hiclipart.com/preview/355/848/997/computer-icons-user-profile-google-account-photos-icon-account.jpg" class="img-fluid" alt="profile">
            
             
                    
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"> <?php echo $lname; ?> <?php echo $username; ?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              
                <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="changepassword.php">
                  <i class="fa fa-lock mr-2 text-primary"></i>Change Password </a>
                <a class="dropdown-item" href="opt.php?action=logout">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Log Out </a>
              </div>
            </li>
           
                <li class="nav-item  d-none d-lg-block">
           
           
            </li>
            
             <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            
        
           <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="opt.php?action=logout">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            
        
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    
         
              
              <img src="https://p7.hiclipart.com/preview/355/848/997/computer-icons-user-profile-google-account-photos-icon-account.jpg" class="img-fluid" alt="profile">
            
            
                
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Administrator</span>
                  <span class="text-secondary text-small">Trixec Admin </span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            
            
            
            
            
               <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-group menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="manageusers.php"> Manage Users </a></li>
                 
                </ul>
              </div>
            </li>
            
            
            
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Deliveries</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-truck menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="alldeliveries.php">All Deliveries</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pendingdeliveries.php">Pending Deliveries</a></li>
                   <li class="nav-item"> <a class="nav-link" href="completeddeliveries.php">Completed Deliveries</a></li>
                           <li class="nav-item"> <a class="nav-link" href="uncompleteddeliveries.php">Uncompleted Deliveries</a></li>
                    <li class="nav-item"> <a class="nav-link" href="scheduleddeliveries.php">Scheduled Deliveries</a></li>
                </ul>
              </div>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Wallet</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-money menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="managewallet.php"> Manage Wallet </a></li>
                 
                </ul>
              </div>
            </li>
            
            
          
            
            
          <li class="nav-item">
              <a class="nav-link" href="invoices.php">
                <span class="menu-title">Invoices</span>
                <i class="fa fa-folder menu-icon"></i>
              </a>
            </li>
            
            
          </ul>
        </nav>
        <!-- partial -->
       
              
              
              
              
      
              
              
               <script src="/users/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/users/assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/users/assets/js/off-canvas.js"></script>
    <script src="/users/assets/js/hoverable-collapse.js"></script>
    <script src="/users/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/users/assets/js/dashboard.js"></script>
    <script src="/users/assets/js/todolist.js"></script>
              
   <!-- SCRIPTS -->
 
  <script type="text/javascript">

    // Animations initialization
    new WOW().init();
    
    
    


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
  
  
              
              </body>
              
</html>