
    <?php include 'menu.php';?>
    <div class="hero-banner">
        <div class="hero-image-wrap"><img src="img/blog-hero.jpg">
        </div>
        <div class="hero-title-wrap">
            <div class="hero-title">
                <h1>Blog</h1>
            </div>
        </div>
    </div>

    <div class="product-category-page">

        <div class="filter">
            <p> 12 Product (s)</p>
            <form class="woocommerce-ordering" method="get">
                <select name="orderby" class="orderby">
                    <option value="menu_order" selected="selected">Default sorting</option>
                    <option value="popularity">Sort by popularity</option>
                    <option value="rating">Sort by average rating</option>
                    <option value="date">Sort by newness</option>
                    <option value="price">Sort by price: low to high</option>
                    <option value="price-desc">Sort by price: high to low</option>
                </select>
                <input type="hidden" name="paged" value="1">
            </form>
        </div>

        <div class="tab">
            <h1>Subcategory</h1>
            <ul>
                <li><button class="tablinks" onclick="openCity(event, 'Kitchen & Bath')" id="defaultOpen">Kitchen &
                        Bath</button></li>
                <li><button class="tablinks" onclick="openCity(event, 'General Plumbing Products')">General Plumbing
                        Products</button></li>
                <li><button class="tablinks" onclick="openCity(event, 'Pumps & Well Accessories')" id="">Pumps & Well
                        Accessories</button></li>
                <li><button class="tablinks" onclick="openCity(event, 'Tools')" id="">Tools</button></li>
                <li><button class="tablinks" onclick="openCity(event, 'Ritchie Waterers')" id="">Ritchie
                        Waterers</button></li>
                <li><button class="tablinks" onclick="openCity(event, 'Wastewater Solutions')">Wastewater
                        Solutions</button></li>
                <li><button class="tablinks" onclick="openCity(event, 'Water Treatmem Sytems')">Water Treatmem
                        Sytems</button></li>
                <li><button class="tablinks" onclick="openCity(event, 'Heating & Cooling')">Heating & Cooling</button>
                </li>
            </ul>
        </div>

        <div class="tabcontent-products">
            <div id="Kitchen & Bath" class="tabcontent">
                <h3>Kitchen & Bath</h3>
                <p>Kitchen & Bath.</p>
            </div>

            <div id="General Plumbing Products" class="tabcontent">
                <h3>General Plumbing Products</h3>
                <p>General Plumbing Products.</p>
            </div>

            <div id="Pumps & Well Accessories" class="tabcontent">
                <h3>Pumps & Well Accessories</h3>
                <p>Pumps & Well Accessories</p>
            </div>

            <div id="Tools" class="tabcontent">
                <h3>Tools</h3>
                <p>Tools.</p>
            </div>

            <div id="Ritchie Waterers" class="tabcontent">
                <h3>Ritchie Waterers</h3>
                <p>Ritchie Waterers.</p>
            </div>

            <div id="Wastewater Solutions" class="tabcontent">
                <h3>Wastewater Solutions</h3>
                <p>Wastewater Solutions.</p>
            </div>

            <div id="Water Treatmem Sytems" class="tabcontent">
                <h3>Water Treatmem Sytems</h3>
                <p>Water Treatmem Sytems.</p>
            </div>

            <div id="Heating & Cooling" class="tabcontent">
                <h3>Heating & Cooling</h3>
                <p>Heating & Cooling.</p>
            </div>
        </div>

    </div>


    <script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
