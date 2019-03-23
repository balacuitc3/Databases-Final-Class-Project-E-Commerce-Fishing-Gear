<!DOCTYPE html><!--This is the Login page of the Fishing Website-->

<html>
    
    <head>
    
     
        
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Koi's R Us Login</title><!--This will show the title of the tab-->
    </head>
    <body>
        <div class="jumbotron" style="background-color:#F1FFB0">
            <div class="container text-center">
                <link rel="stylesheet" type="text/css" href="style.css">
                    <h1 title="Employee">Employee Login</h1>
                <hr >
            </div>
        </div>
        <p>This is the employee login page<br>You can create an account or use an existing account</p>
        <!--Input your Login information here-->
        <form method="POST" action="employeeconfirm.php">
            <!--Put your username here-->
            <label for="usr">Employee Log in:</label><br>
                <input type="text" class="form-control" id="usr" name="username" required><br>
            <label for="pwd">Password:</label><br>
                 <input type="password" class="form-control" id="pwd" name="pass" required><br>
                 <button type="submit" name="submit" class="btn btn-primary active">Log In</button>
        </form>
        <!--Create an account by going to the link-->
        <a href="employeesignup.php">
            <p class = "employeeregistration">Create an account</p>
        </a>
        <a href="login.php">
            <p class = "customerlogin">Login as a customer</p>
        </a>
    </body>

</html>