<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Details</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slick.css">

</head>

<body>
    <?php include 'menu.php';?>
    <div class="product-details-body">
        <div class="product-details">
            <div class="product-gallery">
                <div class="list-image">
                    <section class="move-top">
                        <ul class="slider-text slider-nav slick-list draggable">
                            <li><a href="#"><img src="img/image3-120x120.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/image4-120x120.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/image5-120x120.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/image3-120x120.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/image4-120x120.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/image5-120x120.jpg" alt=""></a></li>
                        </ul>

                        <div class="slider-image slider-for">
                            <div class="">
                                <img src="img/image3.jpg">
                            </div>
                            <div>
                                <img src="img/image4.jpg">
                            </div>
                            <div>
                                <img src="img/image5.jpg">
                            </div>
                            <div>
                                <img src="img/image3.jpg">
                            </div>
                            <div>
                                <img src="img/image4.jpg">
                            </div>
                            <div>
                                <img src="img/image5.jpg">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="product-infor">
                <div class="summary entry-summary">
                    <h1 class="product_title entry-title">Heritage Single Control Gooseneck Bar Sink Faucet</h1>
                    <p class="price"><span class="amount"><span>$</span>299.00</span></p>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                    <div class="input-group product-quantity">
                        <span class="input-group-btn">
                            <button type="button" class="btn-number" data-type="minus" data-field="quant[574]">
                                -
                            </button>
                        </span>
                        <input name="quant[574]" step="1" min="1" max="99999" value="1"
                            class="form-control input-number quantity">
                        <span class="input-group-btn">
                            <button type="button" class="btn-number" data-type="plus" data-field="quant[574]">
                                +
                            </button>
                        </span>
                    </div>
                    <div class="add-to-cart-button">
                        <a href="cart.php">Add to cart</a>
                    </div>
                    <div class="share-icon">
                        <span>Share</span>
                        <a href=""><i class="fab fa-facebook-square"></i></a>
                        <a href=""><i class="fab fa-google-plus-g"></i></a>
                        <a href=""><i class="fab fa-pinterest"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="tablink">
                <ul>
                    <li><a class= "tablinks" href="#tab-description" onclick="openPage(event, 'FEATURES')" id="defaultOpen">FEATURES</a></li>
                    <li><a class= "tablinks" href="#tab-specifications" onclick="openPage(event, 'Specifications&Support')" >Specifications & Support</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div id="FEATURES" class="tabcontents">
                    <p>Donec rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada feugiat. Curabitur
                        non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta
                        dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna
                        justo, lacinia eget consectetur sed, convallis at tellus. Curabitur arcu erat, accumsan id
                        imperdiet et, porttitor at sem. Cras ultricies ligula sed magna dictum porta. Pellentesque in
                        ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                        posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet
                        ligula.</p>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec
                        velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin
                        molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Quisque velit nisi, pretium ut
                        lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet
                        quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at
                        tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac
                        diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget
                        consectetur sed, convallis at tellus.</p>
                    <p>Sed porttitor lectus nibh. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in,
                        elementum id enim. Nulla porttitor accumsan tincidunt. Vivamus magna justo, lacinia eget
                        consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed,
                        convallis at tellus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus
                        magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget
                        felis porttitor volutpat. Sed porttitor lectus nibh.</p>
                </div>

                <div id="Specifications&Support" class="tabcontents">
                    <p>Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id
                        enim. Nulla porttitor accumsan tincidunt. Proin eget tortor risus. Vestibulum ante ipsum primis
                        in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet
                        aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci
                        porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                        Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur
                        non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                    <p>Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                        Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                        posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet
                        ligula. Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada. Nulla porttitor
                        accumsan tincidunt. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla
                        porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                    <p>Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh. Curabitur arcu
                        erat, accumsan id imperdiet et, porttitor at sem. Quisque velit nisi, pretium ut lacinia in,
                        elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec
                        sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at
                        tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum
                        congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/slick.js"></script>
    <script type="text/javascript" src="js/style.js"></script>
    <!-- <script type="text/javascript" src="js/style.js"></script> -->

    <script>
        openPage(evt, pageName);
    </script>

    <script type="text/javascript">
    //slick slide for detail product
    $(document).on('ready', function() {

        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: false,
            asNavFor: '.slider-nav'

        });

        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            arrows: false,
            vertical: true
        });

    });
    </script>

</body>

</html>