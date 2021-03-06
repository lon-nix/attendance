<?php 
    $title = 'View Record';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    //Get attendee by ID
    if (!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }else{
        $id = $_GET['id'];
        $result = $crud-> getAttendeeDetails($id);

?>

    
    <div class="card" style="width: 18rem;">
        <img src="<?php echo empty($result['avatar_path']) ? 'uploads/userPic.png' : $result['avatar_path'] ; ?>"class="card-img-top" alt="..."> 
        <div class="card-body">
            <h5 class="card-title"><?php echo $result['firstname'].' '. $result['lastname'];?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['name'];?></h6>
            
            <p class="card-text">Date of Birth: <?php echo $result['dateofbirth'];?></p>
            <p class="card-text">Phone: <?php echo $result['phonenumber'];?></p>
            <p class="card-text">Email: <?php echo $result['emailaddress'];?></p>

    
            <a href="viewrecords.php" class="btn btn-secondary">Back to list</a>
          <a href="edit.php?id=<?php echo $result['attendee_id'];?>" class="btn btn-warning">Edit</a>
          <a href="deletedetails.php?id=<?php echo $result['attendee_id'];?>" class="btn btn-danger">Delete</a>
        </div>
    </div>
     <?php } ?>   

    <?php require_once 'includes/footer.php';?>