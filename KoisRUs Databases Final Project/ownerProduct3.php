<?php
error_reporting(0);
session_start();
echo $_SESSION['username'];
    if(isset($_SESSION['username']) &&  $_SESSION['loggedin'] == true)
        {

?>

<?php
include("config.php");
    include 'ownerheader.php';
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
    

     <a href="homepage.php">
        <p class = "homepage"> </p>
    </a>
    
         
    <! list of product images>
    
    <img src= "https://images-na.ssl-images-amazon.com/images/I/61nqSfM-L5L._UX385_.jpg"
     alt ="banner" class="imgpr1">
   
    <img src= "https://cdn.shopify.com/s/files/1/1649/0641/products/columbia-schooner-bank-cachal-sage_700x.jpg?v=1496850048"
     alt ="banner" class="imgpr2">
   
    <img src= "http://www.shopfishingtackle.com/wp-content/uploads/2014/12/Fishing-Hats-01-Black-W11S35E-0-500x380.jpg"
     alt ="banner" class="imgpr3">
   
    <img src= "http://www.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dweb789292/images/hi-res/81915_FGE_OM1.jpg?sw=750&sh=750&sm=fit&sfrm=png"
     alt ="banner" class="imgpr4">
    
    <img src= "http://www.patagonia.ca/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw98d5ba4f/images/hi-res/89165_RATN_OM1.jpg?sw=750&sh=750&sm=fit&sfrm=png"
     alt ="banner" class="imgpr5">
    
    <img src= "http://www.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dwfb878112/images/hi-res/48365_961_OM6.jpg?sw=750&sh=750&sm=fit&sfrm=png"
     alt ="banner" class="imgpr6">
    
    <img src= "data:image/jpeg;base64,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"
     alt ="banner" class="imgpr7">
    
    <img src= "https://i.pinimg.com/736x/b7/1e/fc/b71efc7f50bcd7bc547b9d44de701e1d--shirt-types-fishing-shirts.jpg"
     alt ="banner" class="imgpr8">
    
     <! add to cart buttons>
    <?php
    $results = mysqli_query($db, "SELECT * FROM products WHERE id_product= 17 OR id_product= 18 OR id_product= 19 OR id_product= 20 OR id_product= 21 OR id_product= 22 OR id_product= 23 OR id_product= 24");
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