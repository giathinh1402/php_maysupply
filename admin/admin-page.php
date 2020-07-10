<?php
    session_start();

    if(!isset($_SESSION['LoginUser'])){
        header('location: ../home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
<div >
    
        <h1>Welcome <?php echo $_SESSION['LoginUser'];?></h1>
        
</div>

    <script type="text/javascript" src="js.jquery.min.js"></script>
    <script type="text/javascript" src="js.bootstrap.min.js"></script>
</body>

</html>