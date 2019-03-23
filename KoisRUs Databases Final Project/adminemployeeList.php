<?php 
session_start();
    include "config.php";
    include "adminheader.php";
    if(isset($_SESSION['username']) &&  $_SESSION['loggedin'] == true)
        {
?>
<html>
	<head>
	    <title>Employees</title>
	</head>
	<body>
	    <table>
	        <thead>
	            <tr>
	                <td>| Employee Username |</td>
	                <td>| First Name |</td>
	                <td>| Last Name |</td>
	            </tr>
	        </thead>
	        <tbody>
	            <form method =  'POST' action ='deleteEmployee.php'>
    	            <?php 
    	            $results = mysqli_query($db, "SELECT * FROM Employee");
                    while($row = mysqli_fetch_array($results)) 
                        {
                        ?>
                            <tr>
                                <td><?php echo $row['e_username']?></td>
                                <td><?php echo $row['e_Fname']?></td>
                                <td><?php echo $row['e_Lname']?></td>
                                
                                <td><input type="checkbox" name=employee id='employee' value=<?php echo $row['e_id']?>> </td>
                            </tr>
                <?php   } ?>
                      <input type="submit" name ='Delete' value='Delete Employee'id='DELETE' class="btn btn-primary active">
                </form>
                <form action = 'employeeCreateAccount.php'>
        		    <input type = "submit" value ="Create Employee"></button>
        		    </form>
        		    <form action = 'updateUser.php'>
        		    <input type = "submit" value ="Update Employee"></button>
        		</form>
	        </tbody>
	    </table>
	</body>
<?php
}
else
{
print '<script>window.location.assign("login.php");</script>'; 
}
?>
</html>