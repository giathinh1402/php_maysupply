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


    <div class="product-details">
        <div class="product-gallery">
            <div class="list-image">
                <section>
                    <ul class="slider-text slider-nav">
                        <li><a href="#"><img src="img/image3-120x120.jpg" alt=""></a></li>
                        <li><a href="#"><img src="img/image4-120x120.jpg" alt=""></a></li>
                        <li><a href="#"><img src="img/image5-120x120.jpg" alt=""></a></li>
                        <li><a href="#"><img src="img/image3-120x120.jpg" alt=""></a></li>
                        <li><a href="#"><img src="img/image4-120x120.jpg" alt=""></a></li>
                        <li><a href="#"><img src="img/image5-120x120.jpg" alt=""></a></li>
                    </ul>

                    <div class="slider-image slider-for">
                        <div>
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

    </div>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/slick.js"></script>
    <!-- <script type="text/javascript" src="js/style.js"></script> -->


    <script type="text/javascript">
    //slick slide for detail product
    $(document).on('ready', function() {

        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });

        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            centerMode: true,
            focusOnSelect: true
        });

    });
    </script>
</body>

</html>