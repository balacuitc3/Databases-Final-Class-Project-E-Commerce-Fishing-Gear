    <?php
error_reporting(0);
session_start();
echo $_SESSION['username'];
if(isset($_SESSION['username']) &&  $_SESSION['loggedin'] == true)
        {

?>
<!DOCTYPE html>
<html>
<head>
    
   <?php
   

    include 'customerheader.php';
?>
 <style>
    body{
        background-image:url(wallhaven-273685.jpg);
        opacity: 1.9;
        
    }
    
    </style>
   <!links to stylesheet> 
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
 
	

        

    <!names under the images>
<body>
    <p class = "title">KOI'S R'US </p>
    <p class = "rodsandlines"> Fishing Poles and Lines</p>
    <p class = "baitsandhooks"> Baits and Hooks</p>
    <p class = "Apparel"> Apparel</p>
    <p class = "Books"> Books</p>
  
    <! images for homepage>
    <a href="productlist1.php">
    <img src= "https://www.fieldandstream.com/sites/fieldandstream.com/files/styles/1000_1x_/public/import/2016/RealPoles.jpg?itok=22IxAoWi"
        alt ="rodsandlines" class="image1">
    </a> 
       
    <a href="productlist2.php">
     <img src= "http://swimbaitcity.com/finalgraphics/2014/rwrb.jpg"
        alt ="baitsandhooks" class="image2">
    
    </a>  
     <a href="productlist3.php"> 
    <img src= "https://images-na.ssl-images-amazon.com/images/I/41KILPxI9jL.jpg"
        alt ="Apparel" class="image3">
    
    </a>
          
    <a href="productlist4.php">
    <img src= "https://s3media.247sports.com/Uploads/Assets/26/733/7733026.jpg"
        alt ="Books" class="image4">
    </a>
 <! add to cart buttons>
    <?php
    $results = mysqli_query($db, "SELECT * FROM products WHERE id_product= 1 OR id_product= 2 OR id_product= 3 OR id_product= 4 OR id_product= 5 OR id_product= 6 OR id_product= 7 OR id_product= 8");
    while($row = mysqli_fetch_array($results))
    {
    ?>
         <tr>
             <br><br><br><br><br><br><br><br><br><br>
            <form method="POST"  action="viewcart.php">
                <td><?php echo $row['p_quantity']?></td>
                <td><?php echo $row['p_name']?></td>
                <td><?php echo $row['p_code']?></td>
                <td><?php echo $row['p_price']?></td>
                <td><input type="text"size="8" id="qty" name="p_quantity" required></td>
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
                                             <td><?php echo $values["img"]; ?></td>
                                            <td><?php echo number_format($values["p_quantity"] * $values["p_price"], 2); ?></td>
                                            <input type="hidden" name="id_product" value="<?php echo $values['img']?>"/>
                                             <input type="hidden" name="img" value="<?php echo $values['img']?>"/>
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
     <?php
    $results = mysqli_query($db, "SELECT * FROM products WHERE id_product= 2");
    while($row = mysqli_fetch_array($results))
    {
    ?>
        <form 
        <td><button type="submit" name="submit" class="btn btn-primary active">Add to cart</button></td>
        </form>

    <?php
    }
    ?> 
    </head>
</html>
<?php
}
else
{
print '<script>window.location.assign("login.php");</script>'; 
}
?>