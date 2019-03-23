
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
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

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
    
    <img src= "https://basspro.scene7.com/is/image/BassPro/2449609_100049557_is?$Prod_PLPThumb$"
     alt ="banner" class="imgpr1">
   
    <img src= "http://images.cabelas.com/is/image/cabelas/s7_116607_imageset_01?wid=300&hei=230&op_sharpen=1"
     alt ="banner" class="imgpr2">
   
    <img src= "http://purefishing.scene7.com/is/image/purefishing/Berkley_Fusion19_Colored_Octopus_Hooks_Chart_1_2017_alt1?wid=400&hei=400&fmt=jpeg&qlt=85,1&op_sharpen=0&resMode=sharp2&op_usm=1,1,6,0&iccEmbed=0&printRes=72"
     alt ="banner" class="imgpr3">
   
    <img src= "http://images.cabelas.com/is/image/cabelas/s7_312359_imageset_05?wid=300&hei=230&op_sharpen=1"
     alt ="banner" class="imgpr4">
    
    <img src= "http://cdn.shopify.com/s/files/1/2163/2847/products/fishingworld-store-barbed-hook-100pcs-black-nickel-crank-fishing-hooks-worm-sharp-barbed-hooks-texas-tackle-fishhooks-japan-31285364107_1024x1024.jpg?v=1507547826"
     alt ="banner" class="imgpr5">
    
    <img src= "http://www.gameandfishmag.com/files/2015/04/prespawn_bass_jerkbait.jpg"
     alt ="banner" class="imgpr6">
    
    <img src= "https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRo5VpjC5VhUOYQxF7jLr8l3Rlj4Y3jSAAHuLniOwW7guP2lYxB7vUiy12_81w&usqp=CAE"
     alt ="banner" class="imgpr7">
    
    <img src= "https://ae01.alicdn.com/kf/HTB19VPNJFXXXXX_XpXXq6xXFXXXm/Hot-Brand-Soft-Baits-Saltwater-Freshwater-Bass-Fishing-lures-Silicone-Artificial-Fish-Bait-for-Fishing-Tackle.jpg_640x640.jpg"
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