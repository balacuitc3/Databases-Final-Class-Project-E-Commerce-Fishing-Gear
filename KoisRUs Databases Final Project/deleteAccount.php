<?php 
session_start();
echo $_SESSION['username'];
include "config.php";
include "ownerheader.php";
if(isset($_SESSION['username']) &&  $_SESSION['loggedin'] == true)
        {

?>

<!-- This will allow a user to create an account-->
<html>
    <head>
        <meta charset="UTF-8">
            <title>Delete User</title>
        <link rel="stylesheet" type="text/css href="style.css">
    </head>
    <body>
        <h1 style="background-color:#F1FFB0">Delete Account:</h1>
        <form action="deleteEmployee.php" method="POST" style="width:60%; padding-left:200px">
        <div class="form-group">
             <link rel="stylesheet" type="text/css" href="style.css">
            <label>Choose User:</label>
            <input class="form-control" type="text" name="EmployeeID" placeholder="EmployeeID" required>
        </div><br>
     </script>
        </div><br>
    <button type="submit" class="btn btn-primary"/>Delete User</button>
    </form>

    </body>
</html>
<?php
}
else
{
print '<script>window.location.assign("login.php");</script>'; 
}
?>