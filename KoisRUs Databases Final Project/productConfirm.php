<?php
    session_start();
    include 'config.php';
    include 'ownerheader.php';
    $quantity = mysqli_real_escape_string($db, $_POST['p_quantity']);
    $id = mysqli_real_escape_string($db, $_POST['id_product']);
    $query=mysqli_query($db, "UPDATE products SET p_quantity= p_quantity+ '$quantity' WHERE id_product= '$id'");
  print '<script>window.location.assign("addProduct.php");</script>'; 
?>