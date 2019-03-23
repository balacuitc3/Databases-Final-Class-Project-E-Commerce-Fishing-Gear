<?php
session_start();
include 'config.php';

  global $db;
  //receives user input from form 
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $uid = mysqli_real_escape_string($db, $_POST['e_username']);
    $pwd = mysqli_real_escape_string($db, $_POST['e_password']);
    
    //query the account table
    $query = mysqli_query($db, "UPDATE Employee SET e_password= '$pwd' WHERE e_username= '$pwd'");
    //displaying all rows from query

    while($row = mysqli_fetch_array($query))
    {
      /*the first username row is passed on to $table_username,
      and so on until the query is finished */
      $table_username = $row['username'];
      $table_password = $row['password'];
      //checks if there are any matching fields
      if($uid == $table_password)
      {
        //tell the user that the username has been taken
        mysqli_query($db, "UPDATE Employee SET e_password= '$pwd' WHERE e_username= '$uid'");
      //prompt to let user know registration was succesful
     print '<script>alert("Password Changed!");</script>';
        //redirects to customersignup.php
       print '<script>window.location.assign("employeeList.php");</script>';
      }
     print '<script>window.location.assign("employeeList.php");</script>';
    }
  } 
  
?>

<!DOCTYPE html>
<html>
<?php include 'ownerheader.php'; ?>
</html>