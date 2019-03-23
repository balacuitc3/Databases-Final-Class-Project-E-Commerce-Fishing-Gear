<?php
    //this sends the user back to the login page
	session_start();
	session_destroy();
	header("Location: login.php");
?>