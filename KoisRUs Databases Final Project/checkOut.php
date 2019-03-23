<?php
error_reporting(0);
session_start();
$_SESSION['username'];
include 'config.php';


$productname = mysqli_real_escape_string($db, $_POST['p_name']);
$cost = mysqli_real_escape_string($db, $_POST['p_price']);
$total = mysqli_real_escape_string($db, $_POST['total']);
$username = mysqli_real_escape_string($db, $_POST['username']);

    
    
    foreach($_SESSION["cart"] as $keys => $values)
        { 
            $quantity = $values['p_quantity'];
            $itemID = $values['id_product'];
            $query=mysqli_query($db, "UPDATE products SET p_quantity= p_quantity- '$quantity' WHERE id_product= '$itemID'");
        }
        
        mysqli_query($db, "INSERT INTO `receipt` (price, rp_name, amountpaid, r_username) VALUES
('$cost', '$productname',  '$total', '$username')");
                    
    unset($_SESSION['cart']);
    
    print '<script>alert("Successfully checked out!");</script>';
    print '<script>window.location.assign("receipt.php");</script>';
?>