
<div class="column-3">
    <div class="content">
        <h2 class="section-title">RECENT ARTICLES</h2>
    </div>

    <div id="p-float">
    <?php
            $conn = mysqli_connect("localhost", "root", "", "php_maysupply");
            $query = " SELECT * FROM post WHERE category_name = 'Content Update' ";  
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
                    <div class="blog-detail">
                        <h5 class="blog-title"><a href="#"
                                title="<?php  echo $row['post_title']; ?>"><?php  echo $row['post_title']; ?></a></h5>
                        <div class="blog-excerpt">
                            <p><span style="font-weight: 400;"><?php  echo $row['post_content']; ?> </span></p>
                        </div>
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

    <div class="content2">
        <h2 class="section-title">Read More</h2>
    </div>

    <section id="newsletter" class="page-section section_default section_default_layout_text" >
        <div class="section-inner auto-height" >
            <div class="section-content-wrapper">
                <div class="section-content">
                    <h2 class="section-title">JOIN OUR E-NEWSLETTER</h2>
                    <div class="section-body">
                        <div role="form" class="wpcf7" id="wpcf7-f397-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="/#wpcf7-f397-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="397">
                                    <input type="hidden" name="_wpcf7_version" value="5.0.1">
                                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f397-o1">
                                    <input type="hidden" name="_wpcf7_container_post" value="0">
                                </div>
                                <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name"
                                        value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                        aria-required="true" aria-invalid="false" placeholder="Your Name"></span><span
                                    class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email"
                                        value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                        aria-required="true" aria-invalid="false" placeholder="Your Email"></span><input
                                    type="submit" value="Subscribe" class="wpcf7-form-control wpcf7-submit"><span
                                    class="ajax-loader"></span>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

