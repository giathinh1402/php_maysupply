<?php
$conn = mysqli_connect("localhost", "root", "", "php_maysupply");
    if(isset($_POST['checkout_place_order'])){
        $first_name = $_POST['billing_first_name'];
        $last_name = $_POST['billing_last_name'];
        $company_name = $_POST['billing_company_name'];
        $orderby = $_POST['orderby'];
        $street_address = $_POST['billing_street_address']. $_POST['billing_apartment_address'];
        $town_city = $_POST['billing_town_city'];
        $post_code = $_POST['billing_postcode'];
        $phone = $_POST['billing_phone'];
        $email = $_POST['billing_email'];
        $payment_info = $_POST['payment_info'];        
        
        $sql = "INSERT INTO orders (first_name, last_name, company_name, country, street_address, town_city, post_code, phone, email,  payment_infor) 
                        VALUES ('$first_name','$last_name','$company_name','$orderby','$street_address','$town_city','$post_code','$phone','$email','$payment_info')";
        $query_run = mysqli_query($conn, $sql);
    }else{
        echo " not add";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/style.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>

<body>
    <div class="blogs">
        <div class="hero-banner">
            <div class="hero-image-wrap"><img src="img/blog-hero.jpg">
            </div>
            <div class="hero-title-wrap">
                <div class="hero-title">
                    <h1>Checkout</h1>
                </div>
            </div>
        </div>

        <div class="content-one-column">
            <div class="content-info"><i class="far fa-calendar"></i> Have a coupon?
                <a href="#" onclick="showform()" class="showcoupon">Click here to enter your code</a></div>
            <div class="coupon" id="form-content">
                <label for="coupon_code"></label> <input type="text" name="coupon_code" class="input-text"
                    id="coupon_code" value="" placeholder="Coupon code">
                <button type="submit" class="button" name="update_cart" value="Update cart" disabled="">Apply
                    coupon</button>
            </div>
        </div>
        <form action="" method="POST" class="data-form">
            <div class="col2-set">
                <div class="col-1">
                    <div class="billing-fields">
                        <h3>Billing details</h3>
                        <div class="field-wrapper">
                            <div class="input-name">
                                <p class="first-name">
                                    <label for="bill-first-name">First name </label>
                                    <abbr class="required" title="required">*</abbr>
                                    <input type="text" class="input-text " name="billing_first_name"
                                        id="billing_first_name" autocomplete="given-name"
                                        autofocus="autofocus">
                                </p>
                                <p class="last-name">
                                    <label for="bill-last-name">Last name </label>
                                    <abbr class="required" title="required">*</abbr>
                                    <input type="text" class="input-text " name="billing_last_name"
                                        id="billing_last_name" autocomplete="given-name"
                                        autofocus="autofocus">
                                </p>
                            </div>
                            <p class="long-info">
                                <label for="bill-company-name">Company name </label>
                                <input type="text" class="input-text " name="billing_company_name"
                                    id="billing_company_name" placeholder="" value="" autocomplete="given-name"
                                    autofocus="autofocus">
                            </p>
                            <p class="long-info">
                                <label for="bill-company-name">Country </label>
                                <abbr class="required" title="required">*</abbr>
                                <select name="orderby" class="orderby">
                                    <option value="UnitedKingdom(UK)">United Kingdom(UK)</option>
                                    <option value="VietNam">Việt Nam</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Chinese">Chinese</option>
                                </select>
                                <input type="hidden" name="paged" value="1">
                                </form>
                            </p>
                            <p class="long-info long-info-padding">
                                <label for="bill-street-address">Street address</label>
                                <input type="text" class="input-text " name="billing_street_address"
                                    id="billing_street_address" placeholder="House number and street name" value=""
                                    autocomplete="given-name" autofocus="autofocus" onfocus="this.placeholder=''"
                                    onblur="this.placeholder='House number and street name'">
                            </p>
                            <p class="long-info long-info-padding">
                                <input type="text" class="input-text " name="billing_apartment_address"
                                    id="billing_street_address" placeholder="Apartment, suite, unit etc. (optional)"
                                    value="" autocomplete="given-name" autofocus="autofocus"
                                    onfocus="this.placeholder=''"
                                    onblur="this.placeholder='Apartment, suite, unit etc. (optional)'">
                            </p>
                            <p class="long-info">
                                <label for="bill-town-city">Town / City </label>
                                <abbr class="required" title="required">*</abbr>
                                <input type="text" class="input-text " name="billing_town_city" id="billing_town_city"
                                    placeholder="" value="" autocomplete="given-name" autofocus="autofocus">
                            </p>
                            <p class="long-info">
                                <label for="bill-postcode">Postcode</label>
                                <abbr class="required" title="required">*</abbr>
                                <input type="text" class="input-text " name="billing_postcode" id="billing_postcode"
                                    placeholder="" value="" autocomplete="given-name" autofocus="autofocus">
                            </p>
                            <p class="long-info">
                                <label for="bill-phone ">Phone </label>
                                <abbr class="required" title="required">*</abbr>
                                <input type="text" class="input-text " name="billing_phone" id="billing_phone "
                                    placeholder="" value="" autocomplete="given-name" autofocus="autofocus">
                            </p>
                            <p class="long-info">
                                <label for="bill-email">Email address </label>
                                <abbr class="required" title="required">*</abbr>
                                <input type="text" class="input-text " name="billing_email" id="billing_email"
                                    placeholder="" value="" autocomplete="given-name" autofocus="autofocus">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <h3 id="ship-to-different-address">
                        <label class="checkbox">
                            <input id="ship-to-different-address-checkbox" onclick="showform2()"
                                class="form__input form__input-checkbox input-checkbox" type="checkbox"
                                name="ship_to_different_address" value="1"> <span>Ship to a different
                                address?</span>
                        </label>
                    </h3>
                    <div class="ship_to_different_address" id="form-content2">
                        <div class="shipping-address">
                            <div class="shipping-address-wrapper">
                                <div class="input-shipping-name">
                                    <p class="shipping-first-name">
                                        <label for="shipping-first-name">First name</label>
                                        <abbr class="required" title="required">*</abbr>
                                        <input type="text" class="input-text " name="shipping_first_name"
                                            id="shipping_first_name" placeholder="" value="" autocomplete="given-name"
                                            autofocus="autofocus">
                                    </p>
                                    <p class="shipping-last-name">
                                        <label for="shipping-last-name">Last name </label>
                                        <abbr class="required" title="required">*</abbr>
                                        <input type="text" class="input-text " name="shipping_first_name"
                                            id="shipping_last_name" placeholder="" value="" autocomplete="given-name"
                                            autofocus="autofocus">
                                    </p>
                                </div>
                                <p class="long-info">
                                    <label for="bill-company-name">Country </label>
                                    <abbr class="required" title="required">*</abbr>
                                    <select name="orderby" class="orderby">
                                        <option value="UnitedKingdom(UK)">United Kingdom(UK)</option>
                                        <option value="VietNam">Việt Nam</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Chinese">Chinese</option>
                                    </select>
                                    <input type="hidden" name="paged" value="1">
                                    </form>
                                </p>
                                <p class="long-info long-info-padding">
                                    <label for="bill-street-address">Street address</label>
                                    <input type="text" class="shipping-input-text " name="billing_street_address"
                                        id="billing_street_address" placeholder="House number and street name" value=""
                                        autocomplete="given-name" autofocus="autofocus" onfocus="this.placeholder=''"
                                        onblur="this.placeholder='House number and street name'">
                                </p>
                                <p class="long-info long-info-padding">
                                    <input type="text" class="input-text " name="billing_street_address"
                                        id="billing_street_address" placeholder="Apartment, suite, unit etc. (optional)"
                                        value="" autocomplete="given-name" autofocus="autofocus"
                                        onfocus="this.placeholder=''"
                                        onblur="this.placeholder='Apartment, suite, unit etc. (optional)'">
                                </p>
                                <p class="long-info">
                                    <label for="bill-town-city">Town / City </label>
                                    <abbr class="required" title="required">*</abbr>
                                    <input type="text" class="input-text " name="billing_town_city"
                                        id="billing_town_city" placeholder="" value="" autocomplete="given-name"
                                        autofocus="autofocus">
                                </p>
                                <p class="long-info">
                                    <label for="bill-county">County </label>
                                    <abbr class="required" title="required">*</abbr>
                                    <input type="text" class="input-text " name="billing_county" id="billing_county"
                                        placeholder="" value="" autocomplete="given-name" autofocus="autofocus">
                                </p>
                                <p class="long-info">
                                    <label for="bill-postcode">Postcode</label>
                                    <abbr class="required" title="required">*</abbr>
                                    <input type="text" class="input-text " name="billing_postcode" id="billing_postcode"
                                        placeholder="" value="" autocomplete="given-name" autofocus="autofocus">
                                </p>
                                <p class="long-info">
                                    <label for="bill-phone ">Phone </label>
                                    <abbr class="required" title="required">*</abbr>
                                    <input type="text" class="input-text " name="billing_phone" id="billing_phone "
                                        placeholder="" value="" autocomplete="given-name" autofocus="autofocus">
                                </p>
                                <p class="long-info">
                                    <label for="bill-email">Email address </label>
                                    <abbr class="required" title="required">*</abbr>
                                    <input type="text" class="input-text " name="billing_email" id="billing_email"
                                        placeholder="" value="" autocomplete="given-name" autofocus="autofocus">
                                </p>


                            </div>
                        </div>
                    </div>
                    <p class="form-row notes" id="order_comments_field" data-priority=""><label for="order_comments"
                            class="">Order notes</label>
                        <textarea name="order_comments" class="input-text " id="order_comments"
                            placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"
                            autofocus="autofocus" onfocus="this.placeholder=''"
                            onblur="this.placeholder='Notes about your order, e.g. special notes for delivery.'"></textarea>
                    </p>
                </div>
            </div>
            <div class="your-order">
                <h3 id="order_review_heading">Your order</h3>
                <div class="order-review">
                    <table class="order-review-table">
                        <thead>
                            <tr>
                                <th class="product-name">Product</th>
                                <th class="product-total">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="cart_item">
                                <td class="product-name">
                                    Heritage Single Control Gooseneck Bar Sink Faucet&nbsp; <strong
                                        class="product-quantity">× 1</strong> </td>
                                        
                                <td class="product-total">
                                    <span class="Price-amount amount"><span
                                            class="Price-currencySymbol">$</span>299.00</span> </td>
                            </tr>
                            
                        </tbody>
                        <tfoot>
                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td><span class="Price-amount amount"><span
                                            class="Price-currencySymbol">$</span>299.00</span></td>
                            </tr>
                            <tr class="shipping">
                                <th>Shipping</th>
                                <td data-title="Shipping">
                                    Flat rate: <span class="Price-amount amount"><span
                                            class="Price-currencySymbol">$</span>30.00</span> <input type="hidden"
                                        name="shipping_method[0]" data-index="0" id="shipping_method_0"
                                        value="flat_rate:1" class="shipping_method">
                                </td>
                            </tr>
                            <tr class="order-total">
                                <th>Total</th>
                                <td><strong><span class="Price-amount amount"><span
                                                class="Price-currencySymbol">$</span>329.00</span></strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
            <div class="payment-padding">
                <div class="payment" name="payment_info">
                    <ul>
                        <label>
                            <input type="radio" name="colorRadio" value="cash-on-delivery">Cash on delivery </label>
                        <div class="cash-on-delivery select">
                            Pay with cash upon delivery.
                        </div>
                    </ul>
                    <ul>
                        <label>
                            <input type="radio" name="colorRadio" value="paypal">PayPal
                            <img src="img/paypal.png" alt=""></label>
                        <a href="">What is Paypal?</a>
                        <div class="paypal select">
                            Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                            SANDBOX
                            ENABLED. You can use sandbox testing accounts only. See the PayPal Sandbox Testing Guide for
                            more details.
                        </div>

                    </ul>
                    
                </div>
            </div>
            <div class="form-row place-order">
                        <a href=""><input type="submit" class="button alt" name="checkout_place_order" value="Place order"></a>

                        <!-- <input type="hidden" id="_wpnonce" name="_wpnonce" value="4bacb6d411"><input type="hidden"
                            name="_wp_http_referer" value="/?wc-ajax=update_order_review"> -->

                        <!-- <button type="submit" class="button alt" name="checkout_proceed_to_payPal"
                            id="proceed_to_payPal" value="Proceed to PayPal" data-value="Proceed to PayPal">Proceed to
                            PayPal</button> -->

                        <!-- <input type="hidden" id="_wpnonce" name="_wpnonce" value="4bacb6d411"><input type="hidden"
                            name="_wp_http_referer" value="/?wc-ajax=update_order_review"> -->

                            
            </div>
        </form>
        
        
    </div>

    <?php include 'footer.php';?>
</body>

<script type="text/javascript">
$(document).ready(function() {
    $('input[type="radio"]').click(function() {
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".select").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>

<script>
showform();
showform2();
</script>

</html>