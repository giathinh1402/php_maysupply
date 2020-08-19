<?php

include('./security.php');
include('./include/header.php');
include('./include/navbar.php');
include('./include/topbar.php');
?>

<div class="modal-header">
    <div class="container-fluid">
        <!-- Data table example  -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Admin Profile
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                        Add Admin Profile
                    </button>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <!-- <span aria-hidden="true">&times;</span> -->
                    </button>
                </h6>
            </div>
            <div class="card-body">
                <?php
                    if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                    {
                        echo '<h2> ' .$_SESSION['success'] .'</h2>';
                        unset($_SESSION['success']);
                    }

                    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                    {
                        echo '<h2 class="text-secondary"> ' .$_SESSION['status'] .'</h2>';
                        unset($_SESSION['status']);
                    }
                ?>
                <div class="table-responsive">

                    <?php
                        $conn = mysqli_connect("localhost","root","","php_maysupply");
                        $query = " SELECT * FROM admin";
                        $query_run = mysqli_query($conn, $query);
                    ?>
                    <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <!-- <th>Password</th> -->
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                if(mysqli_num_rows($query_run) > 0)        
                                {
                                    while($row = mysqli_fetch_assoc($query_run))
                                    {
                                    ?>
                                        <tr>
                                            <td><?php  echo $row['id']; ?></td>
                                            <td><?php  echo $row['username']; ?></td>
                                            <td><?php  echo $row['email']; ?></td>
                                            
                                            <td>
                                                <form action="edit_register.php" method="post">
                                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                                    <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="register_code.php" method="post">
                                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                    <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                                </form>
                                            </td>
                                        </tr>
                                                    <?php
                                    } 
                                }
                                else {
                                    echo "No Record Found";
                                }
                                ?>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" action="register_code.php" method="POST">
                            <div class="form-group">

                                <input type="text" class="form-control form-control-user" name="username"
                                    id="exampleFirstName" placeholder="User Name">
                            </div>
                            <div class="form-group">

                                <input type="email" class="form-control form-control-user" name="email"
                                    id="exampleInputEmail" placeholder="Email Address">
                            </div>
                            <div class="form-group ">

                                <input type="password" class="form-control form-control-user" name="password"
                                    id="exampleInputPassword" placeholder="Password">
                            </div>
                            <div class="form-group ">

                                <input type="password" class="form-control form-control-user" name="confirmpassword"
                                    id="exampleRepeatPassword" placeholder="Repeat Password">
                            </div>
                            <button type="submit" name="registerbtn"
                                class="btn btn-primary btn-user btn-block">Register</button>
                            <hr>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="login.html">Already have an account? Login!</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include('include/script.php');
?>