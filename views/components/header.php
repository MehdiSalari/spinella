<!-- header begin -->
<header class="header_center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="<?= $_ENV['BASE_PATH'] ?>">
                                <img class="logo logo_dark_bg" src="<?= assets('images/logo.png') ?>" alt="">
                                <img class="logo logo_light_bg" src="<?= assets('images/logo.png') ?>" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <!-- <li><a href="index.php">Home</a></li> -->
                                <li><a href="blog">Blog</a></li>
                                <li><a href="products">Products</a></li>
                                <!-- <li><a href="booking.html">Booking</a></li> -->
                                <li><a href="about-us">About</a>
                                    <!-- <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="contact-us">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
            <!-- Language Menu -->
            <div class="lang" id="lang">
                <img src="<?= assets('images/language.png') ?>" style="width: 30px; height: 30px">
                <div class="lang-dropdown">
                    <a href="index.php">English</a>
                    <a href="fa">فارسی</a>
                </div>
            </div>
        </header>
        <input type="hidden" id="base_path" value="<?= $_ENV['BASE_PATH'] ?>">
        <!-- header close -->
<?php
$sql = 'SELECT * FROM settings WHERE page = "home" LIMIT 1';
$result = $conn->query($sql)->fetch_assoc();
$content = json_decode($result['json'], true);
?>