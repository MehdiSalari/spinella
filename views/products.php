<!DOCTYPE html>
<html lang="en">

<?php include 'layout/head.php' ?>

<body class="page-menu">

<div id="wrapper">
    <!-- header begin -->
    <?php include 'components/header.php' ?>
    <!-- header close -->

    <!-- subheader -->
    <section id="subheader" class="jarallax text-light">
        <img src="<?= assets('images/background/bg-10.jpg') ?>" class="jarallax-img" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center wow fadeInUp">
                        <h2 class="s1 mb-40">Spinnela</h2>
                        <h2 class="s2">Products</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->


    <!-- content begin -->
    <div id="content" class="no-bottom no-top">
        <section aria-label="section">
            <div class="container">
                <div class="col-md-12">
                    <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                        <li><a href="#" data-filter="*" class="selected">All</a></li>
                        <li><a href="#" data-filter=".coffee">Saffron</a></li>
                        <li><a href="#" data-filter=".non-coffee">Pistachio</a></li>
                        <li><a href="#" data-filter=".main-dishes">Nuts</a></li>
                        <li><a href="#" data-filter=".breads">Dried Fruits</a></li>
                    </ul>
                    <div class="spacer-single"></div>
                </div>
            </div>

            <div class="container">
                <div id="gallery" class="row g-4">
                    <!-- Item -->
                    <div class="col-lg-4 item coffee">
                        <div class="pb-3 shadow">
                            <div style="border-radius:1rem">
                                <figure class="hover-zoom position-relative rounded-20 overflow-hidden">
                                    <a>
                                        <img src="<?= assets('images/gallery/1.jpg') ?>" alt="">
                                    </a>
                                </figure>
                                <div class="mt-3 px-3 rounded-20">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus, assumenda
                                        cum
                                        dolorem eaque </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-danger m-0">$12000</p>
                                        <a href="single.php" class="px-3 py-1 rounded-1 btn-danger">Show</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 item non-coffee">
                        <div class="pb-3 shadow">
                            <div style="border-radius:1rem">
                                <figure class="hover-zoom position-relative rounded-20 overflow-hidden">
                                    <a>
                                        <img src="<?= assets('images/gallery/2.jpg') ?>" alt="">
                                    </a>
                                </figure>
                                <div class="mt-3 px-3 rounded-20">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus, assumenda
                                        cum
                                        dolorem eaque </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-danger m-0">$12000</p>
                                        <a href="single.php" class="px-3 py-1 rounded-1 btn-danger">Show</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 item non-coffee">
                        <div class="pb-3 shadow">
                            <div style="border-radius:1rem">
                                <figure class="hover-zoom position-relative rounded-20 overflow-hidden">
                                    <a>
                                        <img src="<?= assets('images/gallery/3.jpg') ?>" alt="">
                                    </a>
                                </figure>
                                <div class="mt-3 px-3 rounded-20">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus, assumenda
                                        cum
                                        dolorem eaque </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-danger m-0">$12000</p>
                                        <a href="single.php" class="px-3 py-1 rounded-1 btn-danger">Show</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 item coffee">
                        <div class="pb-3 shadow">
                            <div style="border-radius:1rem">
                                <figure class="hover-zoom position-relative rounded-20 overflow-hidden">
                                    <a>
                                        <img src="<?= assets('images/gallery/4.jpg') ?>" alt="">
                                    </a>
                                </figure>
                                <div class="mt-3 px-3 rounded-20">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus, assumenda
                                        cum
                                        dolorem eaque </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-danger m-0">$12000</p>
                                        <a href="single.php" class="px-3 py-1 rounded-1 btn-danger">Show</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 item main-dishes">
                        <div class="pb-3 shadow">
                            <div style="border-radius:1rem">
                                <figure class="hover-zoom position-relative rounded-20 overflow-hidden">
                                    <a>
                                        <img src="<?= assets('images/gallery/5.jpg') ?>" alt="">
                                    </a>
                                </figure>
                                <div class="mt-3 px-3 rounded-20">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus, assumenda
                                        cum
                                        dolorem eaque </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-danger m-0">$12000</p>
                                        <a href="single.php" class="px-3 py-1 rounded-1 btn-danger">Show</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 item breads">
                        <div class="pb-3 shadow">
                            <div style="border-radius:1rem">
                                <figure class="hover-zoom position-relative rounded-20 overflow-hidden">
                                    <a>
                                        <img src="<?= assets('images/gallery/6.jpg') ?>" alt="">
                                    </a>
                                </figure>
                                <div class="mt-3 px-3 rounded-20">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus, assumenda
                                        cum
                                        dolorem eaque </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-danger m-0">$12000</p>
                                        <a href="single.php" class="px-3 py-1 rounded-1 btn-danger">Show</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </div>

</div>

<!-- footer begin -->
<?php include 'components/footer.php' ?>
<!-- footer close -->

<div id="preloader">
    <div class="preloader1"></div>
</div>


<!-- Javascript Files
================================================== -->
<script src="<?= assets('js/plugins.js') ?>"></script>
<script src="<?= assets('js/designesia.js') ?>"></script>
</body>

</html>