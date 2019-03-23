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
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $address = mysqli_real_escape_string($db, $_POST['Address']);
    $uid = mysqli_real_escape_string($db, $_POST['username']);
    $pwd = mysqli_real_escape_string($db, $_POST['pass']);
    $bool = true;
    //query the account table
    $query = mysqli_query($db, "SELECT * FROM Customer");
    //displaying all rows from query
    while($row = mysqli_fetch_array($query))
    {
      /*the first username row is passed on to $table_username,
      and so on until the query is finished */
      $table_username = $row['username'];
      //checks if there are any matching fields
      if($uid == $table_username)
      {
        $bool = false;
        //tell the user that the username has been taken
        print '<script>alert("Username has been taken! Please try again.");</script>';
        //redirects to customersignup.php
        print '<script>window.location.assign("customersignup.php");</script>';
      }
    }
    
    //if there are no conflicts of username
    if($bool)
    {
 
      $pass = hash('sha256',$pwd);                 ///EDIT MI
      //insert the values to table account
      mysqli_query($db, "INSERT INTO Customer (FName, LName, email, Address, username, password) 
        VALUES ('$first', '$last', '$email', '$address', '$uid', '$pass')");
      //prompt to let user know registration was succesful
      print '<script>alert("Successfully registered!");</script>';
    }
  }
?>

<!DOCTYPE html>
<html>
<?php include 'customerheader.php'; ?>
  <body>
  
      <h1>New Account Confirmation </h1><br>
      <h4>First Name:</h4>
      <?php echo $first; ?><br>
      <h4>Last Name:</h4>
      <?php echo $last; ?><br>
      <h4>Email:</h4>
      <?php echo $email; ?><br>
      <h4>Address:</h4>
      <?php echo $Address; ?><br>
      <h4>Username:</h4>
      <?php echo $uid; ?><br>
  </body>
</html>