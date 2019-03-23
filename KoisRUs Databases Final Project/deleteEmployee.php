<?php
    session_start();
    include 'config.php';
    $employee = mysqli_real_escape_string($db, $_POST['employee']);
    $query=mysqli_query($db, "DELETE FROM Employee WHERE e_id='$employee'");
   
print '<script>alert("User Deleted!");</script>';
print '<script>window.location.assign("employeeList.php");</script>';
?>
