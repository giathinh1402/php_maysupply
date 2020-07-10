<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/style.js"></script>
</head>

<body>
    <?php include 'menu.php';?>

    <div class="blogs">
        <div class="hero-banner">
            <div class="hero-image-wrap"><img src="img/blog-hero.jpg">
            </div>
            <div class="hero-title-wrap">
                <div class="hero-title">
                    <h1>Blogs</h1>
                </div>
            </div>
        </div>

        <div class="product-category">

            <div class="filter">
                <p> 12 Product (s)</p>
                <form class="woocommerce-ordering" method="get">
                    <select name="orderby" class="orderby">
                        <option value="menu_order" selected="selected">Default sorting</option>
                        <option value="popularity">Sort by popularity</option>
                        <option value="rating">Sort by average rating</option>
                        <option value="date">Sort by newness</option>
                        <option value="price">Sort by price: low to high</option>
                        <option value="price-desc">Sort by price: high to low</option>
                    </select>
                    <input type="hidden" name="paged" value="1">
                </form>
            </div>

            <div class="tab">
                <h3>SUBCATEGORY</h3>
                <ul>
                    <li type=""><b><a class="tablinks" onclick="openCategory(event, 'Kitchen & Bath')" id="defaultOpen">Kitchen
                                &
                                Bath</a><b></li>
                    <li><a class="tablinks" onclick="openCategory(event, 'General Plumbing Products')">General
                            Plumbing
                            Products</a></li>
                    <li><a class="tablinks" onclick="openCategory(event, 'Pumps & Well Accessories')" id="">Pumps &
                            Well
                            Accessories</a></li>
                    <li><a class="tablinks" onclick="openCategory(event, 'Tools')" id="">Tools</a></li>
                    <li><a class="tablinks" onclick="openCategory(event, 'Ritchie Waterers')" id="">Ritchie
                            Waterers</a></li>
                    <li><a class="tablinks" onclick="openCategory(event, 'Wastewater Solutions')">Wastewater
                            Solutions</a></li>
                    <li><a class="tablinks" onclick="openCategory(event, 'Water Treatmem Sytems')">Water Treatmem
                            Sytems</a></li>
                    <li><a class="tablinks" onclick="openCategory(event, 'Heating & Cooling')">Heating &
                            Cooling</a>
                    </li>
                </ul>
            </div>

            <div class="tabcontent-products">
                <div id="Kitchen & Bath" class="tabcontent">
                    <ul class="product-columns-3">
                        <li class="post"> <a href="product-details.php">
                                <img src="img/image5.jpg" alt="">
                                <h2 class="">Heritage Single Control Gooseneck Bar Sink
                                    Faucet</h2>
                                <span class="price">
                                    <span class="price">$</span>299.00</span></span>
                                <p class="product-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut</p>
                                <div class="input-group product-quantity">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn-number" data-type="minus"
                                            data-field="quant[574]">
                                            -
                                        </button>
                                    </span>
                                    <input name="quant[574]" step="1" min="1" max="99999" value="1"
                                        class="form-control input-number quantity">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn-number" data-type="plus"
                                            data-field="quant[574]">
                                            +
                                        </button>
                                    </span>
                                </div>
                                <div class="add-to-card-button">
                                    <a href="cart.php">Add to card</a>
                                </div>
                            </a></li>

                    </ul>
                </div>

                <div id="General Plumbing Products" class="tabcontent">
                    <ul class="product-columns-3">
                        <li class="post"> <a href="">
                                <img src="img/image5.jpg" alt="">
                                <h2 class="">Heritage Single Control Gooseneck Bar Sink
                                    Faucet</h2>
                                <span class="price">
                                    <span class="price">$</span>299.00</span></span>
                                <p class="product-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut</p>
                                <div class="input-group product-quantity">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn-number" data-type="minus"
                                            data-field="quant[574]">
                                            -
                                        </button>
                                    </span>
                                    <input name="quant[574]" step="1" min="1" max="99999" value="1"
                                        class="form-control input-number quantity">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn-number" data-type="plus"
                                            data-field="quant[574]">
                                            +
                                        </button>
                                    </span>
                                </div>
                                <div class="add-to-card-button">
                                    <a href="">Add to card</a>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <ul class="product-columns-3">
                        <li class="post"> <a href="">
                                <img src="img/image5.jpg" alt="">
                                <h2 class="">Heritage Single Control Gooseneck Bar Sink
                                    Faucet</h2>
                                <span class="price">
                                    <span class="price">$</span>299.00</span></span>
                                <p class="product-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut</p>
                                <div class="input-group product-quantity">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn-number" data-type="minus"
                                            data-field="quant[574]">
                                            -
                                        </button>
                                    </span>
                                    <input name="quant[574]" step="1" min="1" max="99999" value="1"
                                        class="form-control input-number quantity">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn-number" data-type="plus"
                                            data-field="quant[574]">
                                            +
                                        </button>
                                    </span>
                                </div>
                                <div class="add-to-card-button">
                                    <a href="">Add to card</a>
                                </div>
                            </a></li>
                    </ul>
                </div>

                <div id="Pumps & Well Accessories" class="tabcontent">
                    <h3>Pumps & Well Accessories</h3>
                    <p>Pumps & Well Accessories</p>
                </div>

                <div id="Tools" class="tabcontent">
                    <h3>Tools</h3>
                    <p>Tools.</p>
                </div>

                <div id="Ritchie Waterers" class="tabcontent">
                    <h3>Ritchie Waterers</h3>
                    <p>Ritchie Waterers.</p>
                </div>

                <div id="Wastewater Solutions" class="tabcontent">
                    <h3>Wastewater Solutions</h3>
                    <p>Wastewater Solutions.</p>
                </div>

                <div id="Water Treatmem Sytems" class="tabcontent">
                    <h3>Water Treatmem Sytems</h3>
                    <p>Water Treatmem Sytems.</p>
                </div>

                <div id="Heating & Cooling" class="tabcontent">
                    <h3>Heating & Cooling</h3>
                    <p>Heating & Cooling.</p>
                </div>
            </div>

        </div>
    </div>

    <?php include 'footer.php';?>

    <script>
        openCategory();
    </script>
</body>

</html>