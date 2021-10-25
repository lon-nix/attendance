<?php 
    $title = 'Registration';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    
    $results = $crud-> getSpecialties();
?>

    <h1 class="text-center">Registration for IT Confrence</h1>

    <form method="post" action="success.php">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input required class="form-control" id="firstName" name="firstName">
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input required class="form-control" id="lastName" name="lastName">
        </div>
        <div class="mb-3">
            <label for="dateofbirth" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" id="dateofbirth" name="dateofbirth">
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Area of Expertise</label>
            <select class="form-select" id="specialty" name="specialty">
                <!--<option selected>Select speciality</option>-->
                <?php while($r = $results ->fetch(PDO::FETCH_ASSOC)){ ?>
                    <option value= "<?php echo $r['specialty_id']?>"><?php echo $r['name'];?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input required type="email" class="form-control" id="email" name="email" aria-describedby="Help">
            <div id="Help" class="form-text">All info used are private.</div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact number</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="Help">
            <div id="Help" class="form-text">All info used are private.</div>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </div>    
    </form>

 <?php require_once 'includes/footer.php';?>