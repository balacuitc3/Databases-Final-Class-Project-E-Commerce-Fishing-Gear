<?php
error_reporting(0);
session_start();
echo $_SESSION['username'];
if(isset($_SESSION['username']) &&  $_SESSION['loggedin'] == true)
        {

?>
<?php
include "config.php";
    include "customerheader.php";
 ?>  


<html>
    <head>
        <title>Cart</title>
    </head>
    <body>
        <div style="clear:both"></div>
        <h1>Your Cart</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price Details</th>
                        <th>Order Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
            <?php
        	    if(!empty($_SESSION["cart"]))
        	        {
                	    $total = 0;
                	    foreach($_SESSION["cart"] as $keys => $values)
                		    { 
                		    ?>
                    		    <tbody>
                                    <tr>
                                            <form method="POST" action="viewcart.php">
                                                <td><?php echo $values["p_name"]; ?></td>
                                                <td><?php echo $values['p_quantity'] ?></td>
                                                <td><?php echo $values["p_price"]; ?></td>
                                                <td><?php echo number_format($values['p_quantity'] * $values["p_price"], 2); ?></td>
                                                <input type="hidden" name="product_id" value="<?php echo $values['id_product']?>"/>
                                                <input type="hidden" name="action" value="delete"/>
                                                <td><button type="submit" name="submit" class="btn btn-primary active">Remove</button></td>
                                            </form>
                                    </tr>
                        <?php 
                    			$total = $total + ($values["p_quantity"] * $values["p_price"]);
                		    } ?>
                                    <tr>
                                        <td colspan="3" align="right">Total</td>
                                        <td align="right">$ <?php echo number_format($total, 2); ?></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                                <form method="POST" action="checkOut.php">
                                    <input type="hidden" name="address" value="<?php echo $_SESSION['address']?>"/>
                                    <input type="hidden" name="username" value="<?php echo $_SESSION['username']?>"/>
                                    <input type="hidden" name="total" value="<?php echo $total?>"/>
                                    <input type="hidden" name="p_price" value="<?php echo $values['p_price']?>"/>
                                    <input type="hidden" name="p_name" value="<?php echo $values['p_name']?>"/>
                                    <button type="submit" name="submit" class="btn btn-primary active">Proceed to check out</button>
                                </form>
                <?php 
        	        } 
                mysqli_close($db);?>
            </table>
        </div>
	</body>
</html>

                </tbody>
                
        </table>
    </div>
</main>

<?php
}
else
{
print '<script>window.location.assign("login.php");</script>'; 
}
?>