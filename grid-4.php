<?php
        $conn = mysqli_connect("localhost", "root", "", "php_maysupply");
        $query = " SELECT * FROM categories LIMIT 4";
        $query_run = mysqli_query($conn, $query);
?>
<div class="column-4">
    <div class="content">
        <h2 class="section-title">“Great Company, Great People, Great Experience.”</h2>
        <h4 class="section-sub-title">Ken Kraynak</h4>
    </div>

    
    
    <div id="p-float">
    <?php
            $conn = mysqli_connect("localhost", "root", "", "php_maysupply");
            $query = " SELECT * FROM post WHERE category_name = 'About Us' ";  
            $query_run = mysqli_query($conn, $query);
            ?>
        <?php
        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
        <div class="p-float">
            
            <div class="p-float-in">
                    <?php echo '<img class="p-img" src="admin-page/upload/'.$row['image_name'].'" alt="Image">'?>
                    <div class="p-add">
                        <a class="grid-item-text"><?php  echo $row['post_title']; ?></a>
                        <div class="grid-item-description">
                            <?php  echo $row['post_content']; ?>
                        </div>
        
                    </div>
            </div>
        
        </div>
        <?php
                }
            } else {
                echo "No Record Found";
            }
        ?>
        
    </div>
</div>
