<?php
include('admin-page/security.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php include 'menu.php'; ?>

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
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "php_maysupply");
                    $query = " SELECT * FROM categories";
                    $query_run = mysqli_query($conn, $query);
                    ?>
                    <?php
                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>

                            <li><a class="tablinks" onclick="openCategory(event, '<?php echo $row['category_name']; ?>')" id="defaultOpen"><?php echo $row['category_name']; ?></a></li>
                    <!-- <div>
                        <li><a class="tablinks" onclick="openCategory(event, 'General Plumbing Products')">General Plumbing Products</a></li>
                        <li><a class="tablinks" onclick="openCategory(event, 'Pumps & Well Accessories')" id="">Pumps & Well Accessories</a></li>
                        <li><a class="tablinks" onclick="openCategory(event, 'Tools')" id="">Tools</a></li>
                        <li><a class="tablinks" onclick="openCategory(event, 'Ritchie Waterers')" id="">Ritchie Waterers</a></li>
                        <li><a class="tablinks" onclick="openCategory(event, 'Wastewater Solutions')">Wastewater Solutions</a></li>
                        <li><a class="tablinks" onclick="openCategory(event, 'Water Treatmem Sytems')">Water Treatmem Sytems</a></li>
                        <li><a class="tablinks" onclick="openCategory(event, 'Heating & Cooling')">Heating &Cooling</a></li>
                    </div> -->

                    <?php
                        }
                    } else {
                        echo "No Record Found";
                    }
                    ?>
                </ul>
            </div>

            

            <div class="tabcontent-products">
                <div id="Kitchen & Bath" class="tabcontent">
                    <ul class="product-columns-3">
                        <div class="message"></div>
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "php_maysupply");
                        $query = " SELECT * FROM products WHERE category_name = 'Kitchen & Bath'";
                        $query_run = mysqli_query($conn, $query);
                        ?>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                        <li class="post" >
                            <form class="form-submit" action="cart.php?action=add&id=<?php echo $row["products_id"] ?>" method="post">   
                                
                                <a href="product-details.php?action=detail&id=<?php echo $row['products_id']; ?>" ><?php echo '<img src="admin-page/upload/' . $row['image_name'] . '" alt="Image">' ?></a>
                                <h2 class=""><?php echo $row['products_name']; ?></h2>
                                <span class="price"><span class="price">$</span><?php echo $row['price']; ?></span></span>
                                <p class="product-excerpt"><?php echo $row['description']; ?></p>
                                <div class="input-group product-quantity">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn-number" data-type="minus" onclick="downNumber()">
                                            - </button>
                                    </span>
                                    <input type="number" name="quantity" value="1" class="form-control input-number quantity">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn-number" data-type="plus" onclick="upNumber()"> +
                                        </button>
                                    </span>
                                    <input type="hidden" name="status" value="list"> 
                                    <input type="hidden" name="hidden_id" value="<?php echo $row["products_id"]; ?>"> 
                                    <input type="hidden" name="hidden_name" value="<?php echo $row["products_name"]; ?>">
                                    <input type="hidden" name="hidden_image" value="<?php echo $row["image_name"]; ?>">
                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                        
                                </div>
                                 
                                <div class="add-to-card-button">
                                    <input type="submit" name="add_to_cart" value="Add to Cart" >
                                </div>
                            </form>
                      </li>  
                            
                            <?php
                            }
                        } else {
                            echo "No Record Found";
                        }
                            ?>
                        

                    </ul>
                </div>
                <div id="General Plumbing Products" class="tabcontent">
                    <ul class="product-columns-3">
                        <div class="message"></div>
                        <?php
                            $conn = mysqli_connect("localhost", "root", "", "php_maysupply");
                            $query = " SELECT * FROM products WHERE category_name = 'General Plumbing Products'";
                            $query_run = mysqli_query($conn, $query);
                        ?>
                        <?php
                            if (mysqli_num_rows($query_run) > 0) {
                                while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                        <li class="post" >
                            <form class="form-submit" action="cart.php?action=add&id=<?php echo $row["products_id"] ?>" method="post">   
                                
                                <a href="product-details.php?action=detail&id=<?php echo $row['products_id']; ?>" ><?php echo '<img src="admin-page/upload/' . $row['image_name'] . '" alt="Image">' ?></a>
                                <h2 class=""><?php echo $row['products_name']; ?></h2>
                                <span class="price"><span class="price">$</span><?php echo $row['price']; ?></span></span>
                                <p class="product-excerpt"><?php echo $row['description']; ?></p>
                                <div class="input-group product-quantity">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn-number" data-type="minus" onclick="downNumber()">
                                            - </button>
                                    </span>
                                    <input type="number" name="quantity" value="1" class="form-control input-number quantity">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn-number" data-type="plus" onclick="upNumber()"> +
                                        </button>
                                    </span>
                                    <input type="hidden" name="hidden_id" value="<?php echo $row["products_id"]; ?>"> 
                                    <input type="hidden" name="hidden_name" value="<?php echo $row["products_name"]; ?>">
                                    <input type="hidden" name="hidden_image" value="<?php echo $row["image_name"]; ?>">
                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                        
                                </div>
                                 
                                <div class="add-to-card-button">                        
                                    <input type="submit" name="add_to_cart" value="Add to Cart" >
                                </div>
                            </form>
                      </li>  
                            <?php
                            }
                        } else {
                            echo "No Record Found";
                        }
                            ?>
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

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/style.js"></script>
    
</body>

</html>