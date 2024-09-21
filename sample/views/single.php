<!DOCTYPE html>
<html lang="en">

<?php include 'layout/head.php'; ?>

<body class="page-menu">

    <div id="wrapper">
        <!-- header begin -->
        <?php include 'components/header.php'; ?>
        <!-- header close -->

    <!-- subheader -->
    <section id="subheader" class="jarallax text-light">
        <img src="<?= assets('images/background/bg-7.jpg') ?>" class="jarallax-img" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center wow fadeInUp">
                        <h2 class="s1 mb-40">Spinnela</h2>
                        <h2 class="s2">Show Product</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="products.php">Products</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Show</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content" class="no-bottom no-top">
        <!-- section begin -->
        <section>
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <h2>How It Begins</h2>
                        <div class="spacer-half"></div>
                        <p class="lead">At "Baresto," we believe in the power of good coffee and warm hospitality. Our journey began with a simple vision: to create a welcoming space where friends, families, and strangers alike could come together to enjoy delicious beverages, homemade treats, and meaningful connections.</p>

                        <p>Nestled in the heart of our community, "Baresto" is more than just a café; it's a gathering place, a refuge from the chaos of everyday life, and a beacon of positivity and warmth. From the moment you walk through our doors, you're greeted with the inviting aroma of freshly brewed coffee and the friendly smiles of our dedicated team. Our menu is a reflection of our commitment to quality and creativity. We source the finest beans from around the world and carefully craft each cup with precision and care. Whether you're craving a classic espresso, a creamy latte, or a refreshing iced tea, we have something to delight every palate.</p>

                        <p>As a proud member of the community, we're committed to giving back and making a positive impact wherever we can. From supporting local artisans and farmers to hosting events that celebrate diversity and inclusion, we believe in using our platform to spread joy and goodwill in our neighborhood and beyond.</p>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?= assets('images/misc/1.jpg') ?>" class="img-fluid rounded-20 wow zoomIn" alt="">
                                <div class="de_count wow fadeInUp">
                                    <h3><span class="timer" data-to="750" data-speed="3000"></span>+</h3>
                                    <h4>Positive feedbacks</h4>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="de_count wow fadeInUp">
                                    <h3><span class="timer" data-to="50" data-speed="3000"></span>%</h3>
                                    <h4>Turnover increased</h4>
                                </div>
                                <div class="spacer-10"></div>
                                <img src="<?= assets('images/misc/2.jpg') ?>" class="img-fluid rounded-20 wow zoomIn" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-title-1" class="text-light jarallax">
            <img src="<?= assets('images/background/bg-2.jpg') ?>" class="jarallax-img" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2 class="s1 id-color-2 mb-40 wow fadeInUp">Recently Products</h2>
                            <h2 class="s2 wow fadeInUp">Saffron</h2>
                            <div class="spacer-double"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <section aria-label="section">
            <div class="container">
                <div id="gallery" class="row g-4">
                    <!-- Item -->
                    <div class="col-lg-4 item">
                        <div style="border-radius:1rem">
                            <figure class="hover-zoom position-relative rounded-20 overflow-hidden">
                                <a>
                                    <img src="<?= assets('images/gallery/1.jpg') ?>" alt="">
                                </a>
                            </figure>
                            <div class="mt-3 px-2 rounded-20">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus, assumenda cum
                                    dolorem eaque </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-danger m-0">$12000</p>
                                    <a href="single.php" class="btn btn-danger">Show</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col-lg-4 item">
                        <div style="border-radius:1rem">
                            <figure class="hover-zoom position-relative rounded-20 overflow-hidden">
                                <a>
                                    <img src="<?= assets('images/gallery/1.jpg') ?>" alt="">
                                </a>
                            </figure>
                            <div class="mt-3 px-2 rounded-20">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus, assumenda cum
                                    dolorem eaque </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-danger m-0">$12000</p>
                                    <a href="single.php" class="btn btn-danger">Show</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col-lg-4 item">
                        <div style="border-radius:1rem">
                            <figure class="hover-zoom position-relative rounded-20 overflow-hidden">
                                <a>
                                    <img src="<?= assets('images/gallery/1.jpg') ?>" alt="">
                                </a>
                            </figure>
                            <div class="mt-3 px-2 rounded-20">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus, assumenda cum
                                    dolorem eaque </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-danger m-0">$12000</p>
                                    <a href="single.php" class="btn btn-danger">Show</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4 item">
                         <figure class="hover-zoom position-relative rounded-20 overflow-hidden">
                             <a href="<?= assets('images/gallery/2.jpg') ?>">
                                 <span class="d-hover">
                                     <span class="d-text">
                                         <span class="d-cap">View</span>
                                     </span>
                                 </span>
                                 <img src="<?= assets('images/gallery/2.jpg') ?>" alt="" >
                             </a>
                         </figure>
                     </div>-->

                </div>

            </div>
        </section>

    </div>

    <!-- footer begin -->
    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 sm-text-center">
                    <h3>Our Location</h3>
                    Collins Street West, Victoria 8007 Australia<br>
                    T. (208) 333 9296<br>
                    E. contact@baresto.com<br>
                </div>
                <div class="col-lg-4 text-center">
                    <img class="logo" src="<?= assets('images/logo.png') ?>" alt="">
                </div>
                <div class="col-lg-4 text-lg-end text-center">
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                        <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer close -->

    <div id="preloader">
        <div class="preloader1"></div>
    </div>
</div>



<!-- Javascript Files
================================================== -->
<script src="<?= assets('js/plugins.js') ?>"></script>
<script src="<?= assets('js/designesia.js') ?>"></script>

</body>

</html>