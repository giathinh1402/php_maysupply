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
    <?php include 'menu.php';?>
    <div class="blogs">
        <div class="hero-banner">
            <div class="hero-image-wrap"><img src="img/Hero-1.jpg">
            </div>
            <div class="hero-title-wrap">
                <div class="hero-title">
                    <h1>Carts</h1>
                </div>
            </div>
        </div>

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
                        <tr>
                            <td class="product-remove"><a href="" class="remove">x</a></td>
                            <td class="product-thumbnail"><a href=""><img src="img/image5.jpg" alt=""></a></td>
                            <td class="product-name"><a href="">Heritage Single Control Gooseneck Bar Sink Faucet</a>
                            </td>
                            <td class="product-price"><span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>299.00</span></td>
                            <td class="product-quantity">
                                <div class="input-group product-quantity">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn-number" data-type="minus"
                                            data-field="quant[574]">
                                            -
                                        </button>
                                    </span>
                                    <input name="quant[574]" step="1" min="1" max="99999" value="2"
                                        class="form-control input-number quantity">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn-number" data-type="plus"
                                            data-field="quant[574]">
                                            +
                                        </button>
                                    </span>
                                </div>
                            </td>
                            <td class="product-subtotal"><span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>598.00</span></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="actions">
                                <div class="coupon">
                                    <label for="coupon_code">Coupon:</label> <input type="text" name="coupon_code"
                                        class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                                    <button type="submit" class="button" name="update_cart" value="Update cart"
                                        disabled="">Apply coupon</button>
                                </div>
                                <button id="update-card" type="submit" class="button" name="update_cart"
                                    value="Update cart" disabled="">Update cart</button>
                                <input type="hidden" id="_wpnonce" name="_wpnonce" value="b33d9820fb"><input
                                    type="hidden" name="_wp_http_referer" value="/cart/">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <form action="" class="cart-total">
                <h2>Cart totals</h2>
                <table>
                    <tbody>
                        <tr class="cart-subtotal">
                            <th class="subtotal"> Subtotal </th>
                            <td class="product-price"> <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>299.00</span> </td>
                        </tr>
                        <tr class="cart-form">
                            <th>Shipping</th>
                            <td> Flat rate: <span class=""><span class="">$</span>299.00</span>

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
                                                    <input type="text" class="input-text" value="" placeholder="County"
                                                        name="calc_shipping_state" id="calc_shipping_state">
                                                </p>
                                                <p><input type="text" class="input-text" value=""
                                                        placeholder="Town / City" name="calc_shipping_city"
                                                        id="calc_shipping_city"></p>
                                                <p><input type="text" class="input-text" value="" placeholder="Postcode"
                                                        name="calc_shipping_postcode" id="calc_shipping_postcode"></p>
                                                <p><button type="submit" name="calc_shipping" value="1"
                                                        class="button">Update totals</button></p>
                                            </section>
                                        </div>
                                </form>
                            </td>

                        </tr>
                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>329.00</span></strong>
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
    <?php include 'footer.php';?>
    <script>
       showform();
    </script>

</body>

</html>