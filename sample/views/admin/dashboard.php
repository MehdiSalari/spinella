<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php include 'layout/head.php' ?>
</head>

<body>
    <!-- Start Side Bar -->
    <?php include 'components/sidebar.php' ?>
    <!-- End Side Bar -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro" style="background-color: transparent">
                        <a href="<?= $_ENV['BASE_PATH'] ?>"><img class="main-logo" src="<?= assets('images/logo.png') ?>" alt="" style="margin-top: 60px" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Header Area -->
        <?php include 'components/header.php' ?>
        <!-- End Header Area -->
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <a href="<?= url('product-list') ?>">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Products</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label style="font-size:15px" class="label bg-green">See Details</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">6</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                        <a href="<?= url('product-list') ?>">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Blogs</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label style="font-size:15px" class="label bg-red">See Details</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">4</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                        <a href="<?= url('product-list') ?>">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Tickets</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label style="font-size:15px" class="label bg-blue">See Details</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">0</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                        <a href="<?= url('product-list') ?>">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Settings</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label style="font-size:15px" class="label bg-purple">See Details</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"> </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer area-->
        <?php include 'components/footer.php' ?>
        <!-- End Footer area-->
    </div>
    <?php include 'layout/scripts.php' ?>
</body>

</html>