<?php
require_once('db/connect.php');
session_start();



if(isset($_GET["action"])){
    if($_GET["action"] == "logout"){
        session_destroy();
        echo " <script> window.location.href = 'login.php'; </script>";
    }
}

?>