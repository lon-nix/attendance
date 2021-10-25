<?php 
    $title = 'Index';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    
    $results = $crud-> getSpecialties();
?>

<!-- <div class="cover-image" >
 
  <img class="bg-image" src="images/conference-img.jpg">
</div> -->
<div class="d-flex justify-content-center align-items-center"
    style= "background-image: url('images/conference-img.jpg'); height: 62rem;">
    
    <<!-- div style="background-image: url('images/conference-img.jpg')">
    <div class="d-flex justify-content-center align-items-center h-100">
    <a href="register.php" class="btn btn-primary">Register Now</a>
    </div>
  </div> -->
<div id="intro" class="bg-image shadow-2-strong">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white">
            <h1 class="mb-3">IT Conference</h1>
            <h5 class="mb-4">Mind For The Future</h5>
            <a class="btn btn-outline-light btn-lg m-2" href="register.php"
              role="button">Register Today!</a>
          </div>
        </div>
      </div>
    </div>

<?php require_once 'includes/footer.php';?>