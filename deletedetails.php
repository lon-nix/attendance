<?php 
    $title = 'Delete Record';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    
    $results = $crud-> getSpecialties();
    if (!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }else{
        $id = $_GET['id'];
        $attendee = $crud -> getAttendeeDetails($id);
    
?>

    <h1 class="text-center">Delete Record</h1>

    <form >
        <fieldset disabled>
        <label class="form-label">ID </label>
        <input class="text-center"  value = "<?php echo $attendee['attendee_id'] ?>">
        <input type="hidden" name = "id" value = "<?php echo $attendee['attendee_id'] ?>">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input class="form-control" value = "<?php echo $attendee['firstname'] ?>" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input class="form-control" value = "<?php echo $attendee['lastname'] ?>" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dateofbirth" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" value = "<?php echo $attendee['dateofbirth'] ?>" id="dateofbirth" name="dateofbirth">
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Area of Expertise</label>
            <select class="form-select" id="specialty" name="specialty">
                    <?php while($r = $results ->fetch(PDO::FETCH_ASSOC)){ ?>
                    <option value= "<?php echo $r['specialty_id']?>" <?php if ($r['specialty_id'] == $attendee['specialty_id']) echo 'selected'?>>
                    <?php echo $r['name'];?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" value = "<?php echo $attendee['emailaddress'] ?>" id="email" name="email" aria-describedby="Help">
            
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact number</label>
            <input type="text" class="form-control" value = "<?php echo $attendee['phonenumber'] ?>"  id="phone" name="phone" aria-describedby="Help">
            
        </div>
        </fieldset>
        <div class="d-grid gap-2">
            <a onclick="return cnfirm('Are you sure you want to delete this record?')" 
                href="delete.php?id=<?php echo $attendee['attendee_id'];?>" class="btn btn-danger">Delete</a>
          <a href="viewrecords.php" class="btn btn-secondary">Cancel</a>
        </div>  
          
    </form>

    <?php } ?>

 <?php require_once 'includes/footer.php';?>