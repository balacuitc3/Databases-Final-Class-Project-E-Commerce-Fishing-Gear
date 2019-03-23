<?php 
include "config.php";

?>

<!-- This will allow a user to create an account-->
<html>
    <head>
        <meta charset="UTF-8">
            <title>Sign Up</title>
        <link rel="stylesheet" type="text/css href="style.css">
    </head>
    <body>
        <h1 style="background-color:#F1FFB0">Create an account below:</h1>
        <form action="signupconfirm.php" method="POST" style="width:60%; padding-left:200px">
        <div class="form-group">
             <link rel="stylesheet" type="text/css" href="style.css">
            <label>First Name:</label>
            <input class="form-control" type="text" name="firstname" placeholder="Firstname" required>
        </div><br>
        <div class="form-group">
            <label>Last Name:</label>
            <input class="form-control" type="text" name="lastname" placeholder="Lastname" required>
        </div><br>
        <div class="form-group">
            <label>Email:</label>
            <input class="form-control" type="email" name="email" placeholder="Email" required>
        </div><br>
        <div class="form-group">
            <label>Address:</label>
            <input class="form-control" type="text" name="Address" placeholder="address" required>
        </div><br>
        <div class="form-group">
            <label>Username:</label>
            <input class="form-control" type="text" name="username" placeholder="Username" required>
        </div><br>
        <div class="form-group">
            <label>Password:</label>
            <input class="form-control" name="pass" required="required" type="password" id="password">
        </div><br>
        <div class="form-group">
            <label>Confirm Password:</label>
            <input class="form-control" name="password_confirm" required="required" type="password" id="password_confirm" oninput="check(this)">
    <script language='javascript' type='text/javascript'>
    	function check(input) {
        	if (input.value != document.getElementById('password').value) {
            	input.setCustomValidity('Password Must be Matching.');
        	} else {
            	// input is valid -- reset the error message
            	input.setCustomValidity('');
        	}
    	}
     </script>
        </div><br>
    <button type="submit" class="btn btn-primary"/>Create an account</button>
    </form>

    </body>
</html>