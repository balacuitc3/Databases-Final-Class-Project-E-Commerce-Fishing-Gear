<?php

include 'config.php';
  /*When the user goes to signup for an account, it
    checks that the username has not already been used.
     If not, it successfully creates the account.*/
  //connect to database

  global $db;
  //receives user input from form 
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $first = mysqli_real_escape_string($db, $_POST['firstname']);
    $last = mysqli_real_escape_string($db, $_POST['lastname']);
    $birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);
    $age = mysqli_real_escape_string($db, $_POST['age']);
    $uid = mysqli_real_escape_string($db, $_POST['username']);
    $pwd = mysqli_real_escape_string($db, $_POST['pass']);
    $bool = true;
    //query the account table
    $query = mysqli_query($db, "SELECT * FROM administrator");
    //displaying all rows from query
    while($row = mysqli_fetch_array($query))
    {
      /*the first username row is passed on to $table_username,
      and so on until the query is finished */
      $table_username = $row['a_Username'];
      //checks if there are any matching fields
      if($uid == $table_username)
      {
        $bool = false;
        //tell the user that the username has been taken
        print '<script>alert("Username has been taken! Please try again.");</script>';
        //redirects to customersignup.php
        print '<script>window.location.assign("adminCreateAccount.php");</script>';
      }
    }
    //if there are no conflicts of username
    if($bool)
    {
      //insert the values to table account
      mysqli_query($db, "INSERT INTO administrator (a_firstname, a_lastname, a_age, a_username, a_password, a_birthdate) 
        VALUES ('$first' ,'$last', '$age', '$uid', '$pwd', '$birthdate')");
      //prompt to let user know registration was succesful
      print '<script>alert("Successfully registered!");</script>';
    }
  }
?>

<!DOCTYPE html>
<html>
<?php include 'adminheader.php'; ?>
  <body>
  
      <h1>New Account Confirmation </h1><br>
      <h4>First Name:</h4>
      <?php echo $first; ?><br>
      <h4>Last Name:</h4>
      <?php echo $last; ?><br>
      <h4>Email:</h4>
      <?php echo $email; ?><br>
      <h4>Birthdate:</h4>
      <?php echo $birthdate; ?><br>
      <h4>Age:</h4>
      <?php echo $age; ?><br>
      <h4>Username:</h4>
      <?php echo $uid; ?><br>
    


  </body>
</html>