<?php 
session_start();
include "config.php";
include "ownerheader.php";
if(isset($_SESSION['username']) &&  $_SESSION['loggedin'] == true)
        {
?>

<!-- This will allow a user to create an account-->
<html>
    <head>
        <meta charset="UTF-8">
            <title>Add Product</title>
        <link rel="stylesheet" type="text/css href="style.css">
    </head>
    <body>
        <h1 style="background-color:#F1FFB0">Username change:</h1>
        <form action="updateEmployee.php" method="POST" style="width:60%; padding-left:200px">
        <div class="form-group">
             <link rel="stylesheet" type="text/css" href="style.css">
            <label>Current Username:</label>
            <input class="form-control" type="text" name="Username" placeholder="Current Username" required>
        </div><br>
        <div class="form-group">
            <label>New Username:</label>
            <input class="form-control" type="text" name="New Username" placeholder="New Username" required>
        </div><br>
    <script language='javascript' type='text/javascript'>
    	function check(input) {
        	if (input.value != document.getElementById('e_username').value) {
            	input.setCustomValidity('Item does not exist.');
        	} else {
            	// input is valid -- reset the error message
            	input.setCustomValidity('');
        	}
    	}
     </script>
        </div><br>
    <button type="submit" class="btn btn-primary"/>Change Username</button>
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