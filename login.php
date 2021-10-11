<?php 
define('TITLE','Login | AutoWash');
$pageTitle = "login";
include "components/navbar.php";

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


    $q = " select * from tblusers where email = '$email' && password ='$password' ";

    $result = mysqli_query($con, $q);

    $num = mysqli_num_rows($result);
    if ($num == 1){
        session_start();
        $_SESSION['username']=$email;
        header('location:index.php');
    }
}
?>

<div class="container mt-3 mb-3">
    <div class="row">
    <div class="col-md-6">
            <h1>Login</h1>
        </div>
    <div class="col-md-6">
        <div class="card bg-light" style="max-width: 500px;">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-2 text-center">Login</h4>
                <p class="text-center message">Get started with your free account</p>
                <p>
                    <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
                    <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via
                        Facebook</a>
                </p>
                <p class="divider-text">
                    <center><span class="bg-light text-center">OR</span></center>
                </p>
                <form action="login.php" method="POST">

                    <!-- Email -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email address" type="email">
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Create password" type="password" name="password">
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block"> Login </button>
                    </div> <!-- form-group// -->
                    <p class="text-center">Don't have an account? <a href="register.php">Register Now</a> </p>
                </form>
            </article>
        </div> <!-- card.// -->
        
    </div>

    </div>
    

</div>
<!--container end.//-->

<?php include 'components/footer.php';?>