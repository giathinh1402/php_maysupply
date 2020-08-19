<?php
include('security.php');
include('include/header.php');
include('include/navbar.php');
include('include/topbar.php');
?>

<div class="modal-header">
    <div class="container-fluid">
        <!-- Data table example  -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Posts
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addproducts">
                        Add Posts </button>
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
                        $query = " SELECT * FROM post";
                        $query_run = mysqli_query($conn, $query);
                    ?>
                    <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Post id</th>
                                <th>Image Name</th>
                                <th>Category</th>
                                <th>Post Title</th>
                                <th>Post Content</th>
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
                                <td><?php  echo $row['post_id']; ?></td>
                                <td class="pro_image_admin"><?php echo '<img src="upload/'.$row['image_name'].'" alt="Image">'?>
                                </td>
                                <td><?php  echo $row['category_name']; ?></td>
                                <td><?php  echo $row['post_title']; ?></td>
                                <td><?php  echo $row['post_content']; ?></td>
                                <td>
                                    <form action="post_update.php" method="post">
                                        <input type="hidden" name="edit_id_post"
                                            value="<?php echo $row['post_id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="post_code.php" method="post">
                                        <input type="hidden" name="delete_post_id"
                                            value="<?php echo $row['post_id']; ?>">
                                        <button type="submit" name="delete-btn" class="btn btn-danger"> DELETE</button>
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

<div class="modal fade" id="addproducts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Add Post!</h1>
                    </div>
                    <form class="user" action="post_code.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for=""> Add Image</label>
                            <input id="filebutton" name="image_name" class="form-control" type="file">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="category" id=""
                                placeholder="Category">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="post_title" id=""
                                placeholder="Post Title">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="post_content" id=""
                                placeholder="Post Content">
                        </div>
                        <button type="submit" name="addbtn" class="btn btn-primary btn-user btn-block">Add</button>
                        <button type="button" class="btn btn-secondary btn-user btn-block"
                            data-dismiss="modal">Close</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <?php
    include('include/script.php');
?>