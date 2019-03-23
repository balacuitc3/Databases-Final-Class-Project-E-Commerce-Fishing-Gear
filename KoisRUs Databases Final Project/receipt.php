<?php
error_reporting(0);
session_start();
echo $_SESSION['username'];
if(isset($_SESSION['username']) &&  $_SESSION['loggedin'] == true)
        {

?>

<?php 
    include'config.php';
    include "customerheader.php";
    $username = $_SESSION['username'];

?>

<html>
	<head>
	    <title>Receipt</title>
	</head>
	<body>
	    <table>
	        <thead>
	            <tr>
	                <td>| Receipt Number |</td>
	                <td>| Username|</td>
	                 <td>| Product Name |</td>
	                <td>| Total |</td>
	            </tr>
	        </thead>
	        <tbody>
	            <?php 
	            $results = mysqli_query($db, "SELECT * FROM receipt WHERE receiptnumber = (SELECT MAX(receiptnumber) FROM receipt)");
                while($row = mysqli_fetch_array($results)) 
                    {
                ?>
                <tr>
                    <td><?php echo $row['receiptnumber']?></td>
                    <td><?php echo $row['r_username']?></td>
                    <td><?php echo $row['rp_name']?></td>
                    <td><?php echo $row['amountpaid']?></td>
                </tr>
            <?php   }   ?>
	        </tbody>
	    </table>
	</body>
</html>
<?php
}
else
{
print '<script>window.location.assign("login.php");</script>'; 
}
?>