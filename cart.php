<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "php_maysupply");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
                'item_image'	    =>	$_POST["hidden_image"],
                'item_name'		    =>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
            
            // echo '<script>alert("Item Already Added")</script>';
            
            /**
             * check ton tai cua sp trong cart:
             * 2 situation:
             * 
             *  =>sit1: chua ton tai
             *  ->add vo luon
             * 
             * 
             * 
             *  => sit2: da ton tai trong cart
             *  b1: tim trong sp hien tai trong session;
             *  b2: temp_quantity = session['sp_hien_tai']->quantity + session['sp_hien_tai_moi']->quantity;
             *  b3: update lai cart
             * 
             * ->ok
             *  */ 
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
            'item_image'		=>	$_POST["hidden_image"],
            'item_name'		    =>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}

if(isset($_GET["action"]))
{ 
	if($_GET["action"] == "update_cart")
	{
        $total = 0;
        $total = $total + $values['item_quantity'] *  $values["item_price"];
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/style.js"></script>
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="blogs">
        <div class="hero-banner">
            <div class="hero-image-wrap"><img src="img/Hero-1.jpg">
            </div>
            <div class="hero-title-wrap">
                <div class="hero-title">
                    <h1>Cart</h1>
                </div>
            </div>
        </div>
        <?php
        // var_dump($_SESSION["shopping_cart"]);

        ?>
        <div class="content-cart">
            <form action="" class="cart-form">
                <table>
                    <thead>
                        <tr>
                            <th class="product-remove">&nbsp;</th>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">Product</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
                        <tr>
                            <td class="product-remove"><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>" class="remove">x</a></td>
                            <td class="product-thumbnail"><a href=""><?php echo '<img src="admin-page/upload/' . $values['item_image'] . '" alt="Image">' ?></a></td>
                            <td class="product-name"><a href=""><?php echo $values["item_name"]; ?></a>
                            </td>
                            <td class="product-price"><span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span><?php echo $values["item_price"]; ?></span></td>
                            <td class="product-quantity">
                                <div class="input-group product-quantity">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn-number" data-type="minus" onclick="downNumber()">-</button>
                                    </span>
                                    <input type="number" name="quantity" value="<?php echo $values["item_quantity"]; ?>" class="form-control input-number quantity">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn-number" onclick="upNumber()">+</button>
                                    </span>
                                </div>
                            </td>

                            <td class="product-subtotal"><span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$<?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></span></td>
                        </tr>
                        <?php
                            $flat_rate = 199.00;
                            $total = $total + ($values["item_quantity"] * $values["item_price"]);
                            $subtotal = $total + $flat_rate;
                                }
                        ?>
                        <?php
                            }
                            echo "Continue to shopping <a href=product-list.php>Shop</a>";
                            ?>
                        <tr>
                            <td colspan="6" class="actions">
                                <div class="coupon">
                                    <label for="coupon_code">Coupon:</label> <input type="text" name="coupon_code"
                                        class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                                    <button type="submit" class="button" name="update_cart" value="Update cart"
                                        disabled="">Apply coupon</button>
                                </div>
                                <button id="update-card" type="submit" class="button" name="update_cart"
                                    value="Update cart" >Update cart</button>
                                <input type="hidden" id="_wpnonce" name="_wpnonce" value="b33d9820fb"><input
                                    type="hidden" name="_wp_http_referer" value="/cart/">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>

                    </tbody>
                </table>
            </form>
            <form action="" class="cart-total">
                <h2>Cart totals</h2>
                <table>
                    <tbody>
                        <tr class="cart-subtotal">
                            <th class="subtotal"> Subtotal </th>
                            <td class="product-price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?php echo number_format($total, 2); ?></span> </td>
                        </tr>
                        <tr class="cart-form">
                            <th>Shipping</th>
                            <td> Flat rate: <span class=""><span class="">$</span><?php echo $flat_rate ?></span>

                                <form action="" class="shipping-caculator-form">
                                    <p> <a href="#" onclick="showform()">Calculate shipping</a>
                                        <div id="form-content">
                                            <section class="form">
                                                <p class="shipping-country">
                                                    <select name="" id="">
                                                        <option value="UnitedKingdom(UK)">United Kingdom(UK)</option>
                                                        <option value="VietNam">Việt Nam</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Chinese">Chinese</option>
                                                    </select>
                                                </p>
                                                <p>
                                                    <input type="text" class="input-text" value="" placeholder="County" name="calc_shipping_state" id="calc_shipping_state">
                                                </p>
                                                <p><input type="text" class="input-text" value="" placeholder="Town / City" name="calc_shipping_city" id="calc_shipping_city"></p>
                                                <p><input type="text" class="input-text" value="" placeholder="Postcode" name="calc_shipping_postcode" id="calc_shipping_postcode"></p>
                                                <p><button type="submit" name="calc_shipping" value="1" class="button">Update totals</button></p>
                                            </section>
                                        </div>
                                </form>
                            </td>

                        </tr>
                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?php echo number_format($subtotal, 2); ?></span></strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="wc-proceed-to-checkout">
                    <a href="checkout.php" class="checkout-button button alt wc-forward">
                        Proceed to checkout</a>
                </div>
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script>
        showform();
    </script>

</body>

</html>