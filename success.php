<?php 

  $title = 'Success';
  require_once 'includes/header.php';
  require_once 'db/conn.php';
  require_once 'sendemail.php';

  if(isset($_POST['submit'])){
      //extract values from the $_POST array
      $fname = $_POST['firstName'];
      $lname = $_POST['lastName'];
      $dob = $_POST['dateofbirth'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $specialty = $_POST['specialty'];
      //call funcation to insert and track if success or not
      $issuccess = $crud->insertAttendee($fname, $lname, $dob, $email, $phone, $specialty);
      $specialtyName = $crud->getSpecialtyById($specialty);

      if($issuccess){
        SendEmail::SendMail($email, 'Welcome to IT Conference 2021', 'You have successfuly registered for this year\'s IT Conference');
        include 'includes/successmessage.php';
      }
      else{
        include 'includes/errormessage.php';
      }

  }
?>



  <!-- <div class="card" style="width: 18rem;">
        <img src="images/userPic.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php //echo $_GET['firstName'].' '. $_GET['lastName'];?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php //echo $_GET['specialty'];?></h6>
            
            <p class="card-text">Date of Birth: <?php //echo $_GET['dob'];?></p>
            <p class="card-text">Phone: <?php //echo $_GET['phone'];?></p>
            <p class="card-text">Email: <?php //echo $_GET['email'];?></p>

    
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div> -->

    <div class="card" style="width: 18rem;">
        <img src="images/userPic.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $_POST['firstName'].' '. $_POST['lastName'];?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $specialtyName['name'];?></h6>
            
            <p class="card-text">Date of Birth: <?php echo $_POST['dateofbirth'];?></p>
            <p class="card-text">Phone: <?php echo $_POST['phone'];?></p>
            <p class="card-text">Email: <?php echo $_POST['email'];?></p>

    
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

<?php require_once 'includes/footer.php';?>