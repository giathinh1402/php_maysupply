<?php
        $conn = mysqli_connect("localhost", "root", "", "php_maysupply");
        $query = " SELECT * FROM categories LIMIT 8";
        $query_run = mysqli_query($conn, $query);
?>
<div class="column-8">
    <div class="content">
        <p>
            <strong>May Supply</strong>
            has a variety of well accessories and pumps and years of experience helping homeowners,
            plumbers and contractors choose the best products for their situations.
        </p>
    </div>

    <div id="p-float">
        <?php
            if (mysqli_num_rows($query_run) > 0) {
                while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
        <div class="p-float">
            <div class="p-float-in">
                <?php echo '<img class="p-img" src="admin-page/upload/'.$row['category_image'].'" alt="Image">'?>
                <a class="p-add"><?php  echo $row['category_name']; ?></a>

            </div>

        </div>
        <?php
                        }  
                    }
                ?>
                
        <!-- <div>
            <div class="p-float">
                <div class="p-float-in">
                    <img class="p-img" src="img/GENERAL-PLUMBING-PRODUCTS-397x320.jpg" />
                    <a class="p-add">General Plumbing Products</a>
                </div>
            </div>
            <div class="p-float">
                <div class="p-float-in">
                    <img class="p-img" src="img/PUMPS-WELL-ACCESSORIES-397x320.jpg" />
                    <a class="p-add">Pumps & Well Accessories</a>
                </div>
            </div>
            <div class="p-float">
                <div class="p-float-in">
                    <img class="p-img" src="img/TOOLS-397x320.jpg" />
                    <a class="p-add">Tools</a>
                </div>
            </div>
            <div class="p-float">
                <div class="p-float-in">
                    <img class="p-img" src="img/RITCHIE-WATERERS-397x320.jpg" />
                    <a class="p-add">Ritchie Waterers</a>
                </div>
            </div>
            <div class="p-float">
                <div class="p-float-in">
                    <img class="p-img" src="img/WASTEWATER-SOLUTIONS-397x320.jpg" />
                    <a class="p-add">Wastewater Solutions</a>
                </div>
            </div>
            <div class="p-float">
                <div class="p-float-in">
                    <img class="p-img" src="img/WATER-treatmeM-syTEMS-397x320.jpg" />
                    <a class="p-add">Water Treatmem Sytems</a>
                </div>
            </div>
            <div class="p-float">
                <div class="p-float-in">
                    <img class="p-img" src="img/HEATING-COOLING-397x320.jpg" />
                    <a class="p-add">Heating & Cooling</a>
                </div>
            </div>
        </div> -->

    </div>
</div>