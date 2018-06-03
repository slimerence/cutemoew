    <!--Topbar-->
    <section class="topbar bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <p class="info"><i class="fa fa-headphones left"></i>+ 00 123 456 7890</p>
                    <p class="info">Ending soon: Save up to $300!<span class="coupon">Code : SHOPMAZ</span></p>
                </div>
                <div class="col-md-6 text-lg-right text-md-left">
                    <ul class="links">
                        <li class="">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user left hidden-md-up"></i><span class="hidden-sm-down">My Account</span></a>
                            <div class="dropdown-menu">
                                <a href="login-register.html" class="dropdown-item">My Account</a>
                                <a href="#" class="dropdown-item">Order History</a>
                                <a href="#" class="dropdown-item">Returns</a>
                                <a href="#" class="dropdown-item">My Wishlist</a>
                                <a href="checkout.html" class="dropdown-item">Checkout</a>
                                <div class="dropdown-divider"></div>
                                <a href="login-register.html" class="dropdown-item">Login</a>
                                <a href="login-register.html" class="dropdown-item">Create an Account</a>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe left hidden-md-up"></i><span class="hidden-sm-down">English</span></a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">USD</a>
                                <a href="#" class="dropdown-item">EUR</a>
                                <a href="#" class="dropdown-item">GBP</a>
                                <a href="#" class="dropdown-item">AUD</a>
                            </div>
                        </li>
                        <li>
                            <a href="#">Shipping</a>
                        </li>
                        <li>
                            <a href="#">Information</a>
                        </li>
                        <li>
                            <a href="login-register.html">Log In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Topbar -->

    <!--Header-->
    <header class="header">
        <div class="container">
            <div class="row">
                <!--Logo-->
                <div class="col-md-6 col-sm-6 col-lg-3 col-6">
                    <a class="logo" href="index.html">
                        <img src="img/logo_dark.png" alt="" />
                    </a>
                </div>

                <!--Search Bar-->
                <div class="col-md-6 col-lg-4 offset-lg-1 hidden-md-down">
                    <form class="search-bar">
                        <input class="search-bar-input form-full" type="search" placeholder="Search..." name="search" />
                        <button class="search-bar-icon"><i class="ti-search"></i></button>
                    </form>
                </div>

                <!--Toolbar Icon-->
                <div class="col-md-6 col-sm-6 col-lg-3 offset-lg-1 col-6 text-right header-toolbar">
                    <ul>
                        <!--Search Tool Icon-->
                        <li class="search-tool" id="search-overlay-menu-btn">
                            <a><i class="ti-search"></i></a>
                        </li>

                        <!--Account Tool Icon-->
                        <li class="account-tool">
                            <a data-toggle="dropdown"><i class="ti-user"></i></a>
                            <!--Dropdown-->
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="login-register.html" class="dropdown-item"><i class="fa fa-sign-in left"></i>Login</a>
                                <a href="login-register.html" class="dropdown-item"><i class="fa fa-user left"></i>Create an Account</a>
                                <div class="dropdown-divider"></div>
                                <a href="login-register.html" class="dropdown-item">My Account</a>
                                <a href="#" class="dropdown-item">Order History</a>
                                <a href="#" class="dropdown-item">Returns</a>
                                <a href="#" class="dropdown-item">My Wishlist</a>
                                <a href="checkout.html" class="dropdown-item">Checkout</a>
                            </div>
                        </li>

                        <!--Cart Tool Icon-->
                        <li id="sidebar_toggle_btn" class="cart-tool">
                            <a><i class="ti-bag"></i><span class="cart-count">2</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div id="sticky_element" class="container-fluid p-0">
            <div class="container">
                <div class="row">
                    <!--Mobile Memu Button-->
                    <div class="menu-mobile-btn col-12"><span><i class="fa fa-bars left"></i>Menu</span></div>

                    <!--Navigation Menu-->
                    <nav class="nav-menu col-md-12 col-sm-12">
                        <ul>
                            <li class="nav-menu-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="shop_grid.html">Electronics</a>
                                <div class="nav-dropdown col2-dropdown">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul>
                                                <li><span class="dropdown-title">Televisions</span></li>
                                                <li><a href="#">Top Selling TVs</a></li>
                                                <li><a href="#">Full HD TVs</a></li>
                                                <li><a href="#">Smart TVs</a></li>
                                                <li><a href="#">Ultra HD TVs</a></li>
                                                <li><a href="#">DTH Services</a></li>
                                                <li><a href="#">Streaming Media Players</a></li>
                                                <li><a href="#">Glinder</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul>
                                                <li><span class="dropdown-title">Speakers</span></li>
                                                <li><a href="#">Home Audio Systems</a></li>
                                                <li><a href="#">Bluetooth Speakers</a></li>
                                                <li><a href="#">2.1 & 2.0 Speakers</a></li>
                                            </ul>
                                            <ul>
                                                <li><span class="dropdown-title">Headphone & Earphones</span></li>
                                                <li><a href="#">Headphones</a></li>
                                                <li><a href="#">Earphones</a></li>
                                                <li><a href="#">Headsets with mic</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </li>

                            <li class="nav-menu-item mega-menu">
                                <a href="shop_list.html">Cloths</a>
                                <div class="nav-dropdown mega-dropdown">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <ul>
                                                <li><span class="dropdown-title">Men's Fashion</span></li>
                                                <li><a href="#">T-Shirts & Polos</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Shirts</a></li>
                                                <li><a href="#">Trousers & Chinos</a></li>
                                                <li><a href="#">Shorts & 3/4th</a></li>
                                                <li><a href="#">Kurta, Pyjama & Sherwanis</a></li>
                                                <li><a href="#">Sportswear</a></li>
                                                <li><a href="#">Innerwear & Sleepwear</a></li>
                                                <li><a href="#">Trackpants & Tracksuits</a></li>
                                                <li><a href="#">Sweaters</a></li>
                                                <li><a href="#">Sweatshirts</a></li>
                                                <li><a href="#">Rainwear</a></li>
                                                <li><a href="#">Suits & Blazers</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul>
                                                <li><span class="dropdown-title">Women's Fashion</span></li>
                                                <li><a href="#">Ethnic Wear</a></li>
                                                <li><a href="#">Sarees</a></li>
                                                <li><a href="#">Dress Material</a></li>
                                                <li><a href="#">Kurtis</a></li>
                                                <li><a href="#">Saree Combo</a></li>
                                                <li><a href="#">Tops & Tunics</a></li>
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Tees & Polo</a></li>
                                                <li><a href="#">Jeans & Jeggings</a></li>
                                                <li><a href="#">Shirts</a></li>
                                                <li><a href="#">Pants & Capris</a></li>
                                                <li><a href="#">Palazzos</a></li>
                                                <li><a href="#">Innerwear</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul>
                                                <li><span class="dropdown-title">Kid's Fashion</span></li>
                                                <li><a href="#">T-shirts</a></li>
                                                <li><a href="#">Kurtas, Pyjamas & Dhotis</a></li>
                                                <li><a href="#">Shorts & Three-Fourths</a></li>
                                                <li><a href="#">Shirts</a></li>
                                                <li><a href="#">Top & Bottom Sets</a></li>
                                                <li><a href="#">Ride On & Scooters</a></li>
                                                <li><a href="#">Electronic Toys</a></li>
                                                <li><a href="#">Soft Toys</a></li>
                                                <li><a href="#">Educational Toys</a></li>
                                                <li><a href="#">Outdoor & Sports</a></li>
                                                <li><a href="#">Musical Toys</a></li>
                                                <li><a href="#">Action  Toys  & Figures</a></li>
                                                <li><a href="#">View All</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul>
                                                <li><span class="dropdown-title">Baby Clothing</span></li>
                                                <li><a href="#">Shirts,</a></li>
                                                <li><a href="#">Frocks</a></li>
                                                <li><a href="#">Rompers & Body Suits</a></li>
                                                <li><a href="#">Dresses & Skirts</a></li>
                                                <li><a href="#">T-Shirts & Tops</a></li>
                                                <li><a href="#">Art & Craft</a></li>
                                                <li><a href="#">Pens & Markers</a></li>
                                                <li><a href="#">Calculators</a></li>
                                                <li><a href="#">Stationery Supplies</a></li>
                                                <li><a href="#">Bicycles</a></li>
                                                <li><a href="#">Baby Bouncers</a></li>
                                                <li><a href="#">Message Kits</a></li>
                                                <li><a href="#">View All</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-menu-item">
                                <a href="shop_grid-no_sidebar.html">Mobile</a>
                                <div class="nav-dropdown">
                                    <ul>
                                        <li class="nav-menu-item">
                                            <a href="#">Samsung</a>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="#">Apple</a>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="#">Microsoft</a>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="#">Sony</a>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="#">Motarola</a>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="#">LG</a>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="#">Submenu Right</a>
                                            <ul class="nav-dropdown-sub">
                                                <li><a href="#">Submenu 1</a></li>
                                                <li><a href="#">Submenu 2</a></li>
                                                <li><a href="#">Submenu 3</a></li>
                                                <li><a href="#">Submenu 4</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="#">Submenu left</a>
                                            <ul class="nav-dropdown-sub left">
                                                <li><a href="#">Submenu 1</a></li>
                                                <li><a href="#">Submenu 2</a></li>
                                                <li><a href="#">Submenu 3</a></li>
                                                <li><a href="#">Submenu 4</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-menu-item">
                                <a href="shop_list-sidebar_right.html">Home & Kitchan</a>
                                <div class="nav-dropdown col3-dropdown">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <ul>
                                                <li><span class="dropdown-title">Kitchen Appliances</span></li>
                                                <li><a href="#">Juicer Mixer Grinders</a></li>
                                                <li><a href="#">Water Purifiers</a></li>
                                                <li><a href="#">Gas Stoves & Hobs</a></li>
                                                <li><a href="#">Chimneys</a></li>
                                                <li><a href="#">Induction Cooktops</a></li>
                                                <li><a href="#">Kettles & Coffee Makers</a></li>
                                                <li><a href="#">Choppers & Blenders</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul>
                                                <li><span class="dropdown-title">Kitchenware</span></li>
                                                <li><a href="#">Cookware & Bakeware</a></li>
                                                <li><a href="#">Kitchen Storage</a></li>
                                                <li><a href="#">Dining & Serving</a></li>
                                                <li><a href="#">Kitchen Tools</a></li>
                                                <li><a href="#">Pressure Cookers</a></li>
                                                <li><a href="#">Water Bottles</a></li>
                                                <li><a href="#">Tea & Coffeeware</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul>
                                                <li><span class="dropdown-title">Home Furnishing</span></li>
                                                <li><a href="#">Bed Linen</a></li>
                                                <li><a href="#">Bath Linen</a></li>
                                                <li><a href="#">Blankets & Quilts</a></li>
                                                <li><a href="#">Curtains & Accessories</a></li>
                                                <li><a href="#">Mattresses</a></li>
                                                <li><a href="#">Sofas</a></li>
                                                <li><a href="#">View All</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-menu-item">
                                <a href="shop_grid-sidebar_right.html">Footware</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="shop_grid.html">General</a>
                                <div class="nav-dropdown col3-dropdown center">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <ul>
                                                <li><a href="#">Refrigerators</a></li>
                                                <li><a href="#">Water Purifiers</a></li>
                                                <li><a href="#">Juicer Mixer Grinders</a></li>
                                                <li><a href="#">Hand Blenders</a></li>
                                                <li><a href="#">Water Bottles</a></li>
                                                <li><a href="#">Ice Trays</a></li>
                                                <li><a href="#">Food Processors</a></li>
                                                <li><a href="#">Air Coolers</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul>
                                                <li><a href="#">Air Conditioners</a></li>
                                                <li><a href="#">Inverters & Stabilizers</a></li>
                                                <li><a href="#">AC Comforters</a></li>
                                                <li><a href="#">Curtains</a></li>
                                                <li><a href="#">Cotton Bedsheets</a></li>
                                                <li><a href="#">Deals of the Day</a></li>
                                                <li><a href="#">Featured Stores</a></li>
                                                <li><a href="#">Wedding Gifting Store</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul>
                                                <li><a href="#">Fitness Store</a></li>
                                                <li><a href="#">Renovate your Bathroom</a></li>
                                                <li><a href="#">DIY Store</a></li>
                                                <li><a href="#">Brands In Focus</a></li>
                                                <li><a href="#">Peter England</a></li>
                                                <li><a href="#">Celio</a></li>
                                                <li><a href="#">Adidas</a></li>
                                                <li><a href="#">Nike</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-menu-item">
                                <a href="shop_grid.html">Brands</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="shop_grid.html">Accessories & Tools</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="#">All Pages</a>
                                <div class="nav-dropdown">
                                    <ul>
                                        <li class="nav-menu-item">
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="shop_grid.html">Shop Grid</a>
                                            <ul class="nav-dropdown-sub left">
                                                <li><a href="shop_grid.html">Sidebar Left</a></li>
                                                <li><a href="shop_grid-sidebar_right.html">Sidebar Right</a></li>
                                                <li><a href="shop_grid-no_sidebar.html">No Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="shop_list.html">Shop List</a>
                                            <ul class="nav-dropdown-sub left">
                                                <li><a href="shop_list.html">Sidebar Left</a></li>
                                                <li><a href="shop_list-sidebar_right.html">Sidebar Right</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="product_detail.html">Product Page</a>
                                            <ul class="nav-dropdown-sub left">
                                                <li><a href="product_detail.html">Default</a></li>
                                                <li><a href="product_detail-with_sidebar.html">With Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="cart.html">Cart Page</a>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="checkout.html">Checkout Page</a>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="login-register.html">Ligin & Register</a>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="portfolio.html">Portfolio</a>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="portfolio-single.html">Portfolio Detail</a>
                                        </li>
                                        <li class="nav-menu-item">
                                            <a href="blog.html">Blog</a>
                                            <ul class="nav-dropdown-sub left">
                                                <li><a href="blog.html">Default</a></li>
                                                <li><a href="blog-with_sidebar.html">With Sidebar</a></li>
                                                <li><a href="blog-single.html">Blog Single</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!--End Navigation Menu-->
                </div>
            </div>
        </div>
        <!-- Navigation -->
    </header>
    <!-- End Header -->