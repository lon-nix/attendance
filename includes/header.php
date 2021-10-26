<?php 
//This includes the seesuin file. This file contains code that starts/resumes a session.
//by having it in the header file. It will be included on every page, allowing session capability to be used on every page across the website.
  include_once 'includes/session.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="css/site.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JQuery CSS -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
   
    <title>Attendance - <?php echo $title ?> </title>
  </head>
  <body>
    <div class='container-fluid'>
      <nav class="navbar sticky-top navbar-expand-lg  navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">IT Confrence</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="viewrecords.php">View Attendees</a>
              </li> 
            </ul>
         
        
        <?php 
              if(!isset($_SESSION['userid'])){
            ?>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="register.php">Register</a>
              </li> 
            </ul>
            <?php } else { ?>
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="#">Hello <?php echo $_SESSION['username'] ?>!</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout <span class="sr-only"></span></a>
              </li> 
            </ul>         
          <?php } ?>
          </div>
        
      </nav>
      <br/>