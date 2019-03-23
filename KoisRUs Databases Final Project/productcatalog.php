<?php
 session_start();
 include 'config.php';
 
$product_array = $db_handle->runQuery("SELECT * FROM products ORDER BY id_product ASC");
if (!empty($product_array)) { 
foreach($product_array as $key=>$value){
?>

<div class="product-item">
	<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["p_code"]; ?>">
	<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
	<div><strong><?php echo $product_array[$key]["p_name"]; ?></strong></div>
	<div class="product-price"><?php echo "$".$product_array[$key]["p_price"]; ?></div>
	<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
	</form>
</div>


<?php

case "add":
	if(!empty($_POST["quantity"])) {
		$productByCode = $db_handle->runQuery("SELECT * FROM products WHERE p_code='" . $_GET["p_code"] . "'");
		$itemArray = array($productByCode[0]["p_code"]=>array('p_name'=>$productByCode[0]["p_name"], 'p_code'=>$productByCode[0]["p_code"], 'p_quantity'=>$_POST["p_quantity"], 'p_price'=>$productByCode[0]["p_price"]));
		
		if(!empty($_SESSION["cart_item"])) {
			if(in_array($productByCode[0]["p_code"],array_keys($_SESSION["cart_item"]))) {
				foreach($_SESSION["cart_item"] as $k => $v) {
						if($productByCode[0]["p_code"] == $k) {
							if(empty($_SESSION["cart_item"][$k]["p_quantity"])) {
								$_SESSION["cart_item"][$k]["p_quantity"] = 0;
							}
							$_SESSION["cart_item"][$k]["p_quantity"] += $_POST["p_quantity"];
						}
				}
			} else {
				$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
			}
		} else {
			$_SESSION["cart_item"] = $itemArray;
		}
	}
break;
case "remove":
	if(!empty($_SESSION["cart_item"])) {
		foreach($_SESSION["cart_item"] as $k => $v) {
			if($_GET["code"] == $k)	unset($_SESSION["cart_item"][$k]);				
			if(empty($_SESSION["cart_item"])) unset($_SESSION["cart_item"]);
		}
	}
break;
case "empty":
	unset($_SESSION["cart_item"]);
break;

?>