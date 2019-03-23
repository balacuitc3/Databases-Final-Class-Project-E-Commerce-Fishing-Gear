
<?php
error_reporting(0);
session_start();
echo $_SESSION['username'];
include 'config.php';
    include 'adminheader.php';
    if(isset($_SESSION['username']) &&  $_SESSION['loggedin'] == true)
        {

?>
<html>
<head>
    
    <style>
    body{
        background-color: #FFF9F4  ;
        opacity: 1.9;
    }
    
    </style>
     
    <!links to stylesheet> 
<link rel="stylesheet" type="text/css" href="stylesheet.css">

     
     <! LINK TO cart PAGE>
    
    <a href="cart.php">
  
    
    <! LINK TO HOME PAGE>
     <a href="adminHome.php">
        <p class = "homepage"> HOME</p>
    </a>
    

    
         
    <! list of product images>
    
    <img src= "data:image/jpeg;base64,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"
     alt ="banner" class="imgpr1">
   
    <img src= "http://www.gofishingtips.com/images/Bass%20Fishing%20Exposed.jpg"
     alt ="banner" class="imgpr2">
   
    <img src= "https://i.pinimg.com/736x/f8/16/66/f81666c7e9379914f72a42be434170f3--fishing-magazines-fishing-books.jpg"
     alt ="banner" class="imgpr3">
   
    <img src= "https://images-na.ssl-images-amazon.com/images/I/7129C826W8L.gif"
     alt ="banner" class="imgpr4">
    
    <img src= "http://www.riverthoughtfulfishingbooks.co.uk/admin/images/Fly_Fishing_Tactics_For_Brown_Trout_58031.jpeg"
     alt ="banner" class="imgpr5">
    
    <img src= "https://images-na.ssl-images-amazon.com/images/I/51d2JhAOWtL._SX258_BO1,204,203,200_.jpg"
     alt ="banner" class="imgpr6">
    
    <img src= "https://images-na.ssl-images-amazon.com/images/I/51zoVs98P8L.jpg"
     alt ="banner" class="imgpr7">
    
    <img src= "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBK4zMKyaE-ruXN039NSB-c4StL_KuDwuCEzQWPCHNRGjeo24U"
     alt ="banner" class="imgpr8">
    
    <! add to cart buttons>
        <?php
    $results = mysqli_query($db, "SELECT * FROM products WHERE id_product= 25 OR id_product= 26 OR id_product= 27 OR id_product= 28 OR id_product= 29 OR id_product= 30 OR id_product= 31 OR id_product= 32");
    while($row = mysqli_fetch_array($results))
    {
    ?>
         <tr>
            <br><br><br><br><br><br><br><br><br><br>
            <form method="POST" action="viewcart.php">
                <td><?php echo $row['p_quantity']?></td>
                <td><?php echo $row['p_name']?></td>
                <td><?php echo $row['p_code']?></td>
                <td><?php echo $row['p_price']?></td>
                <td><input type="text" size="8" id="qty" name="p_quantity" required></td>
                <input type="hidden" name="id_product" value="<?php echo $row['id_product']?>"/>
                <input type="hidden" name="p_name" value="<?php echo $row['p_name']?>"/>
                <input type="hidden" name="p_price" value="<?php echo $row['p_price']?>"/>
                <input type="hidden" name="action" value="add"/>
                <td><button type="submit" name="submit" class="btn btn-primary active">Add to Cart</button></td>
                 <br><br><br>
            </form>
        </tr>
    <?php
    }
    ?>        
    
	    <div style="clear:both"></div>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <?php
        	    if(!empty($_SESSION["cart"]))
        	        {
            		    $total = 0;
            		    foreach($_SESSION["cart"] as $keys => $values)
                		    { ?>
                    		    <tbody>
                                    <tr>
                                        <form method="POST" action="viewcart.php">
                                            <td><?php echo $values["p_name"]; ?></td>
                                            <td><?php echo $values["p_quantity"] ?></td>
                                            <td><?php echo $values["p_price"]; ?></td>
                                            <td><?php echo number_format($values["p_quantity"] * $values["p_price"], 2); ?></td>
                                            <input type="hidden" name="id_product" value="<?php echo $values['id_product']?>"/>
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
            <?php   } mysqli_close($db); ?>

    
    </head>
</html>
<?php
}
else
{
print '<script>window.location.assign("login.php");</script>'; 
}
?>