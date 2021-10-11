<!-- <a href="home.php?action=login" class="btn btn-warning">Login</a>
<a href="home.php?action=register" class="btn btn-warning">Register</a>
<a href="home.php?action=reset" class="btn btn-warning">Reset</a> -->
<?php

/**
@author : Shubham Maurya,
Email id : maurya.shubham5@gmail.com
**/
session_start();
//error_reporting(0);

if(isset($_POST['login']))
{
$nemail=$_POST['email'];
$pass=$_POST['password'];

$_SESSION['username']=$email;
//echo "Welcome, ".$_SESSION['admin'];
// header("location:welcome.php");
}


?>
<?php   
    $pageTitle = "index";
    define('TITLE','Home | Bin Habib'); 
    include "components/navbar.php";
    
    include "components/footer.php";


?>

