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
        <div class="p-float">
            <div class="p-float-in">
                <img class="p-img" src="img/Kitchen-Bath-Design.jpg" />
                <div class="p-add">
                    <a class="grid-item-text">Kitchen & Bath Design</a>
                    <div class="grid-item-description">
                        <p>Don’t make the big box mistake!</p>
                        <p>Bring your plans and ideas to
                            <span style="color: #76bde8;"><strong>May Supply</strong></span>for a free consultation!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-float">
            <div class="p-float-in">
                <img class="p-img" src="img/Alternate-Heat-Design.jpg" />
                <div class="p-add">
                    <a class="grid-item-text">Alternate Heat Design</a>
                    <div class="grid-item-description">
                        <p>Stay warm and go easy on the environment.</p>
                        <p><span style="color: #76bde8;"><strong>May Supply</strong></span> offers the latest
                            alternative, hydronic heating products and services.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-float">
            <div class="p-float-in">
                <img class="p-img" src="img/Plumbing-Solutions-Consulting.jpg" />
                <div class="p-add">
                    <a class="grid-item-text">Plumbing Solutions Consulting</a>
                    <div class="grid-item-description">
                        <p>Not exactly sure what part you need or what type of pipe to use?</p>
                        <p>The experts at <span style="color: #76bde8;"><strong>May Supply</strong></span> are here to
                            help!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-float">
            <div class="p-float-in">
                <img class="p-img" src="img/Water-Testing.jpg" />
                <div class="p-add">
                    <a class="grid-item-text">Water Testing</a>
                    <div class="grid-item-description">
                        <p>What’s in your water? <span style="color: #76bde8;"><strong>May Supply</strong></span> will
                            test your water in our state-certified testing facility, and then help you determine the
                            best treatment options for your home or business.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
