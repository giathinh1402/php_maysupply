<?php
    include('admin-page/security.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slick.css">
</head>

<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "php_maysupply");
        $query = " SELECT * FROM slides";
        $query_run = mysqli_query($conn, $query);
    ?>
        <div class="slick-slider single-items">
            <?php
                if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                    <div class="items">
                        <?php echo '<img src="admin-page/upload/'.$row['slide_name'].'" alt="Image">'?>
                    </div>
                    <?php
                    }  
                }
            ?>
        </div>

    

    <div class="text-btn">
        <p>That’s what you had in mind.</p>
        <a href="#" class="button hero-button">Get a Free Quote</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="jquery-3.3.1.js"></script> -->
    <script type="text/javascript" src="js/style.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>
</body>

</html>