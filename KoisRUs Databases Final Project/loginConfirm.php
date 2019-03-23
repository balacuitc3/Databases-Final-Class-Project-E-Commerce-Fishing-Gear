<?php
    // connects to the database
    session_start();
    include 'config.php';
    global $db;
    
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['pass']);
    $query = mysqli_query($db, "SELECT * FROM Customer WHERE username='$username'"); //check the customer table
    
    $exist = mysqli_num_rows($query);
    $table_username = "";
    $table_password = "";
    //encrypts the password
    $password = hash('sha256',$password);                 
    
    if($exist > 0)
        {
            while($row = mysqli_fetch_assoc($query))
                {
                    // the first username row is passed on to $table_username and so on until the query is finished
                    $table_username = $row['username'];
                    $table_password = $row['password'];
                   
                }
                
            // checks to see if the username is in the Database
            if($username == $table_username)
                {
                    // verifies the password entered matches the hashed password in the database
                       $password = hash('sha256',$password);      
                    
                    // if the password matches the username in the database
                    if($password)
                        {
                            $_SESSION['loggedin'] = true;
                            $_SESSION['username'] = $table_username;
                            
                            print '<script>window.location.assign("homepage.php");</script>'; 
                        }
                    
                    // password does not match the password associated with the username
                    else
                        {
                            print '<script>alert("Incorrect Password!");</script>';
                            print '<script>window.location.assign("login.php");</script>'; 
                        }
                }
                
            else
                {
                    print '<script>alert("Incorrect Usernam!");</script>';
                    print '<script>window.location.assign("login.php");</script>'; 
                }
           
        }
    
    // if their is nothing in the database/the username doesn't exist then it prompts the user that there is an incorrect username and refreshes the page.
    else
        {
            print '<script>alert("Incorrect Username!");</script>';
            print '<script>window.location.assign("login.php");</script>'; //redirects to login.php
        }
?>