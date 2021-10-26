<?php 
    $title = 'View Records';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    
    $results = $crud-> getAttendees();
    
    ?>

    
    <div class="table-wrapper-scroll-y">
    <div class="container">
    <h1 class="text-center">Attendee List</h1>
    <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      
      <th scope="col">Specialty</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
   <?php while($r = $results ->fetch(PDO::FETCH_ASSOC)){ ?>
    <tr>
      <td> <?php echo $r['attendee_id'];?></td>
      <td><?php echo $r['firstname'];?></td>
      <td><?php echo $r['lastname'];?></td>
      <td><?php echo $r['name'];?></td>
      <td>
          <a href="view.php?id=<?php echo $r['attendee_id'];?>" class="btn btn-primary">View</a>
          <a href="edit.php?id=<?php echo $r['attendee_id'];?>" class="btn btn-warning">Edit</a>
          <a onclick="return cnfirm('Are you sure you want to delete this record?')" 
          href="deletedetails.php?id=<?php echo $r['attendee_id'];?>" class="btn btn-danger">Delete</a>
    </td>
      
    </tr>
   <?php } ?>
   
  </tbody>
</table>
   </div>
   </div>

    <?php require_once 'includes/footer.php';?>