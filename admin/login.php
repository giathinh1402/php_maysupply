<!--
Into this file, we create a layout for login page.
-->

<?php
include_once('header.php');
include_once('link.php');
include('login_code.php');
?>

<div id="frmRegistration">
    <form class="form-horizontal" method="POST" action="login_code.php">
        <h1>User Login</h1>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="user_password">Password:</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password" id="user_password"
                    placeholder="Enter password">
            </div>
        </div>
        <p class="text-center" style="color: red"> <?php echo $message; ?></p>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="btnlogin" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
</div>