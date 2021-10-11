<?php include "php/connect.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="css/navbar.css">
  <title><?php echo TITLE;?></title>
</head>

<body>
  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">FixLabs</a>
      <h1></h1>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

          <?php  if(!$_SESSION['username']) {?>
            <li><a href="#">Welcome, <?php echo $_SESSION['username'];?></a></li>
          <a class="nav-link" href="home.php?action=logout">Logout</a>
          <?php } else { ?>
            <li class="nav-item <?php if ($pageTitle=='index'){ echo 'active';} ?>">
            <a class="nav-link" href="home.php?action=home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php if ($pageTitle=='login'){ echo 'active';} ?>">
            <?php //echo $_SESSION['username'];?>
            <a class="nav-link " href="home.php?action=login">Login</a>
          </li>
          <li class="nav-item <?php if ($pageTitle=='register'){ echo 'active';} ?>">
            <a class="nav-link" href="home.php?action=register">Register</a>
          </li>

          <?php } ?>
          


        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>

  </nav>