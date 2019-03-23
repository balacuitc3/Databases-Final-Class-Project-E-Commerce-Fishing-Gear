<?php 
session_start();
    include_once('config.php');
    include "ownerheader.php";
    
     if(isset($_SESSION['username']) &&  $_SESSION['loggedin'] == true)
        {
?>

<html>
	<head>
	    <title>Add Product</title>
	</head>
	<body>
	    <table>
	        <thead>
	            <tr>
	                <td>| Quantity |</td>
	                <td>| Product Name |</td>
	                <td>| Product Number |</td>
	                <td>| Update |</td>
	            </tr>
	        </thead>
	        <tbody>
            <?php 
	            $results = mysqli_query($db, "SELECT * FROM products");
                while($row = mysqli_fetch_array($results)) 
                    {
            ?>
                    <tr>
                        <form method="POST" action="productConfirm.php">
                            <td><?php echo $row['p_quantity']?></td>
                            <td><?php echo $row['p_name']?></td>
                            <td><?php echo $row['p_code']?></td>
                			<td><input type="text" class="form-control" id="qty" name="p_quantity" required></td>
                			<input type="hidden" name="id_product" value="<?php echo $row['id_product']?>"/>
                			<td><button type="submit" name="submit" class="btn btn-primary active">Update</button></td>
            			</form>
                    </tr>
                <?php
                    }
                ?>
	        </tbody>
	    </table>
	 </body>
	 <?php
        }
	 ?>
</html>