<?php
error_reporting(0);
session_start();
echo $_SESSION['username'];
include("config.php");
    include 'employeeheader.php';
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


    
     <p class ="title1">QUALITY FISHING RODS </p>
    
    
    <! LINK TO cart PAGE>
    
 
       

    
    <! LINK TO HOME PAGE>
     <a href="employeeHome.php">
        <p class = "homepage"> HOME</p>
    </a>
    
   
    
    


         
    <! list of product images>
    
    <img src= "http://assets.academy.com/mgen/66/10761266.jpg?is=500,500"
     alt ="banner" class="imgpr1">
   
    <img src= "http://basspro.scene7.com/is/image/BassPro/2385870_181849_is"
     alt ="banner" class="imgpr2">
   
    <img src= "https://images-na.ssl-images-amazon.com/images/I/31gWUFLzaHL.jpg"
     alt ="banner" class="imgpr3">
   
    <img src= "http://b2b.maurice.net/B2BIMAGES/LARGE/00022677223865-L.JPG"
     alt ="banner" class="imgpr4">
    
    <img src= "https://s7d2.scene7.com/is/image/dkscdn/16LEWAMCH7FTMHBCCCOM_is/"
     alt ="banner" class="imgpr5">
    
    <img src= "http://www.northeasttackle.co.uk/images/products/medium/1329482156-51437700.jpg"
     alt ="banner" class="imgpr6">
    
    <img src= "http://i.ebayimg.com/00/s/MTYwMFgxNjAw/z/UcoAAOSwQTVV-~X7/$_32.JPG"
     alt ="banner" class="imgpr7">
    
    <img src= "https://kayakguru.com/wp-content/uploads/2017/02/Sunline-Super-FC-Sniper-Fluorocarbon-Fishing-Line.jpg"
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