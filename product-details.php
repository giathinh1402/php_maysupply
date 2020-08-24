<?php
    $conn = mysqli_connect("localhost", "root", "", "php_maysupply");
    $image = [];
    $product=[];
    if(isset($_GET["action"]))
    {
        if($_GET["action"] == "detail")
        {
            $id = $_GET["id"];
            $sql = "SELECT image_name from image where products_id =" . $id . ";";
            $sql1 = "SELECT products_name, price, description from products where products_id =" . $id . ";";
            $result = $conn->query($sql)->fetch_all();
            $result1 = $conn->query($sql1)->fetch_all();
            for ($i = 0; $i < count($result); $i++) {
                array_push($image, $result[$i][0]);
            }
            for ($i = 0; $i < count($result1); $i++) {
                array_push($product, $result1[$i][0]);
                array_push($product, $result1[$i][1]);
                array_push($product, $result1[$i][2]);
            }
        }
    }

?>
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
    <?php include 'menu.php'; ?>
    <div class="product-details-body">
        <div class="product-details">
            <div class="product-gallery">
                <div class="list-image">
                    <section class="move-top">
                        <ul class="slider-text slider-nav slick-list draggable">
                            <?php  for ($i = 0; $i < count($image); $i++) {?>
                            <li onclick="changeValueImage(<?php echo $i?>)"><a href="#"><?php echo '<img src="img/' . $image[$i] . '" alt="Image">' ?></a></a></li>
                            <?php  }?>
                        </ul>

                        <div class="slider-image slider-for">
                            <?php  for ($i = 0; $i < count($image); $i++) {?>
                            <div class="">
                                <?php echo '<img src="img/' . $image[$i] . '" alt="Image">' ?>
                            </div>
                            <?php  }?>
                        </div>

                    </section>
                </div>
            </div>
            <div class="product-infor">
            <form class="form-submit" action="cart.php?action=add&id=<?php echo $id ?>" method="post">
                <div class="summary entry-summary">
                    <h1 class="product_title entry-title"><?php echo $product[0]?></h1>
                    <p class="price"><span class="amount"><span>$</span><?php echo $product[1]?></span></p>
                    <div class="description">
                        <p><?php echo $product[2]?></p>
                    </div>
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
                        <input type="hidden" name="status" value="detail"> 
                        <input type="hidden" name="hidden_id" value="<?php echo $id; ?>"> 
                        <input type="hidden" name="hidden_name" value="<?php echo $product[0]; ?>">
                        <input type="hidden" name="hidden_image" id= "image" value="0">
                        <input type="hidden" name="hidden_price" value="<?php echo $product[1]; ?>">
                            
                    </div>
                    <div class="add-to-card-button">                                          
                        <input type="submit" name="add_to_cart" value="Add to Cart" >
                    </div>
            </form>
            
                    <div class="share-icon">
                        <span>Share</span>
                        <a href=""><i class="fab fa-facebook-square"></i></a>
                        <a href=""><i class="fab fa-google-plus-g"></i></a>
                        <a href=""><i class="fab fa-pinterest"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </form>
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
        function changeValueImage(id){
            var image = document.getElementById('image');
            image.value=id;
            console.log(image.value);
        }
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