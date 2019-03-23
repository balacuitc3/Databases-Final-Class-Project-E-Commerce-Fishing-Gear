<?php
session_start();
include 'config.php';
$itemID = mysqli_real_escape_string($db, $_POST['id_product']);
$itemName = mysqli_real_escape_string($db, $_POST['p_name']);
$price = mysqli_real_escape_string($db, $_POST['p_price']);
$quantity = mysqli_real_escape_string($db, $_POST['p_quantity']);
$action = mysqli_real_escape_string($db, $_POST['action']);
$query = mysqli_query($db, "SELECT p_quantity FROM products WHERE id_product= '$itemID'");
$row = mysqli_fetch_array($query);
$stock = $row['p_quantity'];
if($action == 'add')
    {
        if($quantity > 0 && $quantity <= $stock)
            {
                if(isset($_SESSION["cart"]))
                    {
        	            $item_array_id = array_column($_SESSION["cart"], 'id_product');
        	            if(!in_array($itemID, $item_array_id))
            	            {
            		            $count = count($_SESSION["cart"]);
                		        $item_array = array('id_product' => $itemID,
                                        		    'p_name' => $itemName,
                                    	        	'p_price' => $price,
                                        	    	'p_quantity' => $quantity);
            		                        
                	        	$_SESSION["cart"][$count] = $item_array;
            	               	echo '<script>alert("Product added to cart")</script>';
            	            	echo '<script>window.location="cart.php"</script>';
                	        }
                	
        	           else
                	        {
            	    	        $key = array_search($itemID, $_SESSION["cart"]);
            	    	        $item_array = array('id_product' => $itemID,
                                        		    'p_name' => $itemName,
                                    	        	'p_price' => $price,
                                        	    	'p_quantity' => $quantity);
                                	    	
                                $_SESSION["cart"][$key] = $item_array;
            	    	        echo '<script>alert("Product Quantity Updated")</script>';
            		            echo '<script>window.location="cart.php"</script>';
            	            }
                    }
    
                else
                    {
            	        $item_array = array('id_product' => $itemID,
                                            'p_name' => $itemName,
                                            'p_price' => $price,
                                            'p_quantity' => $quantity);
                                    
                        $_SESSION["cart"][0] = $item_array;
                        echo '<script>window.location="cart.php"</script>';
                    }
            }
        else if($quantity > 0)
            {
                echo '<script>alert("We Don\'t Have That Much!")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        else
            {
                echo '<script>alert("Nah Fam.")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
    }
    
if($action == 'delete')
    {
    	foreach($_SESSION["cart"] as $keys => $values)
        	{
        		if($values["id_product"] == $itemID)
            		{
            			unset($_SESSION["cart"][$keys]);
            			echo '<script>alert("Product has been removed")</script>';
            			echo '<script>window.location="cart.php"</script>';
            		}
        	}
    }
?>