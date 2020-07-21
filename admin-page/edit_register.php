<?php
session_start();
include('include/header.php');
include('include/navbar.php');
include('include/topbar.php');
?>

<div class="container-fluid">
    <!-- Data table example  -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Admin Profile
            </h6>
        </div>
        <div class="card-body">
            <?php
                $conn = mysqli_connect("localhost","root","","php_maysupply");

                if(isset($_POST['edit_btn'])){

                    $id= $_POST['edit_id'];
                    $query = "SELECT * FROM admin WHERE id = '$id' ";
                    $query_run = mysqli_query($conn, $query);

                    foreach($query_run as $row)
                    {
                        ?>
                        <form action="register_code.php" method="POST">
                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $row['username']?>"
                                    name="edit_username" id="exampleFirstName" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" value="<?php echo $row['email']?>"
                                    name="edit_email" id="exampleInputEmail" placeholder="Email Address">
                            </div>
                            <div class="form-group ">
                                <input type="password" class="form-control form-control-user" value="<?php echo $row['password']?>"
                                    name="edit_password" id="exampleInputPassword" placeholder="Password">
                            </div>
                            <a href="register.php" class="btn btn-danger"> CANCEL</a>
                            <button class="btn btn-primary" name="updatebtn">Update</button>
                        </form>

                    <?php
                            }
                        }
                    ?>


        </div>
    </div>
</div>






<?php
    include('include/script.php');
?>