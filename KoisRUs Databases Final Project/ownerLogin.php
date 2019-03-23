<!DOCTYPE html><!--This is the Owner Login page of the Fishing Website-->

<html>
    
    <head>
    
     
        
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Koi's R Us Login</title><!--This will show the title of the tab-->
    </head>
    <body>
        <div class="jumbotron" style="background-color:#F1FFB0">
            <div class="container text-center">
                <link rel="stylesheet" type="text/css" href="style.css">
                    <h1 title="Customer">Owner Login</h1>
                <hr >
            </div>
        </div>
        <p>This is the Owner login page<br>Enter the necessary information below to login.</p>
        <!--Input your Login information here-->
        <form method="POST" action="ownerconfirm.php">
            <!--Put your username here-->
            <label for="usr">Owner Log in:</label><br>
                <input type="text" class="form-control" id="usr" name="username" required><br>
            <label for="pwd">Password:</label><br>
                 <input type="password" class="form-control" id="pwd" name="pass" required><br>
                 <button type="submit" name="submit" class="btn btn-primary active">Log In</button>
        </form>
        <!--go back to the main login page-->
        <a href="login.php">
            <p class = "customerlogin">Login as a customer</p>
        </a>
    </body>

</html>