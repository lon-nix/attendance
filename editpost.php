<?php 

  $title = 'Edit Post';
  
  require_once 'db/conn.php';

  //Get values from the Post  
  if(isset($_POST['submit'])){
      //extract values from the $_POST array
      $id = $_POST['id'];
      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $dob = $_POST['dateofbirth'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $specialty = $_POST['specialty'];
      //call edit post function
      $result = $crud->editAttendee($id,$fname, $lname, $dob, $email, $phone, $specialty);

      //Rediret to viewrecords.php
      if($result){
        include 'includes/successmessage.php';
          header("Location: viewrecords.php");
      }
      else{
        include 'includes/errormessage.php';
      }

  }
?>




<?php require_once 'includes/footer.php';?>