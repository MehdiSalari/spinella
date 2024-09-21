<!doctype html>
<html class="no-js" lang="en">
<?php
$sql = 'SELECT 
            post.*, 
            admin.fname AS admin_name
        FROM post 
        INNER JOIN admin
        ON post.author = admin.id';
$result = mysqli_query($conn, $sql);
$posts = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $posts[] = $row;
    }
}

if (mysqli_errno( $conn)) {
    echo 'Error: '. mysqli_error( $conn );die;
}

// $sql = 'SELECT * FROM category';
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         $categories[] = $row;
//     }
// }
?>
<head>
    <?php include 'layout/head.php'; ?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Left menu area -->
    <?php include 'components/sidebar.php' ?>
    <!-- End Left menu area -->

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <!-- Start Header Area -->
        <?php include 'components/header.php' ?>;
        <!-- End Header Area -->
        <div class="blog-area mg-tb-15" style="margin-top: 60px">
            <div class="container-fluid">
                <div class="row">
                    <!------------------->
                    
                    <!------------------->

                    <!------------------->
                    <?php foreach ($posts as $post) : ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <a href="#">
                        <div class="hpanel blog-box responsive-mg-b-30">
                            <div class="panel-heading custom-blog-hd">
                                <div class="media clearfix">
                                    <!-- <a class="" href="blog_details.html"> -->
											<img style="width: 100%; height: 150px" src="<?= assets('images/blog/'.$post['image']) ?>" alt="profile-picture">
										<!-- </a> -->
                                </div>
                            </div>
                            <div class="panel-body blog-pra">
                                <!-- <a href="blog_details.html"> -->
                                    <h4><?= substr($post['title'], 0, 20) ?>...</h4>
                                <!-- </a> -->
                                <p>
                                    <?= substr($post['text'], 0, 125) ?>...
                                </p>
                            </div>
                            <div class="panel-footer">
                                <span class="pull-right"><i class="fa fa-calendar-o"> </i> <?= date('d.m.Y', strtotime($post['date'])) ?></span>
                                <i class="fa fa-user"> </i> Created by: <span class="font-bold"><?= $post['admin_name'] ?></span>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php endforeach ?>
                    <!------------------->
                    <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel blog-box responsive-mg-b-30">
                            <div class="panel-heading custom-blog-hd">
                                <div class="media clearfix">
                                    <a class="pull-left">
											<img class="img-circle" src="img/contact/1.jpg" alt="profile-picture">
										</a>
                                    <div class="media-body blog-std">
                                        <p>Created by: <span class="font-bold">Smith</span> </p>
                                        <p class="text-muted">21.03.2015</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body blog-pra">
                                <a href="blog_details.html">
                                    <h4>TIPS FOR BEAUTY</h4>
                                </a>
                                <p>
                                    There are many variations of the passages of Lorem Ipsum onece available, but the majority have suffered alteration in some form, by injected humour...
                                </p>
                            </div>
                            <div class="panel-footer">
                                <span class="pull-right"><i class="fa fa-comments-o"> </i> 22 comments</span>
                                <i class="fa fa-eye"> </i> 142 views
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel blog-box responsive-mg-b-30">
                            <div class="panel-heading custom-blog-hd">
                                <div class="media clearfix">
                                    <a class="pull-left">
											<img class="img-circle" src="img/contact/3.jpg" alt="profile-picture">
										</a>
                                    <div class="media-body blog-std">
                                        <p>Created by: <span class="font-bold">Smith</span> </p>
                                        <p class="text-muted">21.03.2015</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body blog-pra">
                                <a href="blog_details.html">
                                    <h4>TIPS FOR BEAUTY</h4>
                                </a>
                                <p>
                                    There are many variations of the passages of Lorem Ipsum onece available, but the majority have suffered alteration in some form, by injected humour...
                                </p>
                            </div>
                            <div class="panel-footer">
                                <span class="pull-right"><i class="fa fa-comments-o"> </i> 22 comments</span>
                                <i class="fa fa-eye"> </i> 142 views
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel blog-box">
                            <div class="panel-heading custom-blog-hd">
                                <div class="media clearfix">
                                    <a class="pull-left">
											<img class="img-circle" src="img/contact/4.jpg" alt="profile-picture">
										</a>
                                    <div class="media-body blog-std">
                                        <p>Created by: <span class="font-bold">Smith</span> </p>
                                        <p class="text-muted">21.03.2015</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body blog-pra">
                                <a href="blog_details.html">
                                    <h4>TIPS FOR BEAUTY</h4>
                                </a>
                                <p>
                                    There are many variations of the passages of Lorem Ipsum onece available, but the majority have suffered alteration in some form, by injected humour...
                                </p>
                            </div>
                            <div class="panel-footer">
                                <span class="pull-right"><i class="fa fa-comments-o"> </i> 22 comments</span>
                                <i class="fa fa-eye"> </i> 142 views
                            </div>
                        </div>
                    </div>
                 </div>
                <div class="row"> 
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel blog-box mg-t-30">
                            <div class="panel-heading custom-blog-hd">
                                <div class="media clearfix">
                                    <a class="pull-left">
											<img class="img-circle" src="img/contact/1.jpg" alt="profile-picture">
										</a>
                                    <div class="media-body blog-std">
                                        <p>Created by: <span class="font-bold">Smith</span> </p>
                                        <p class="text-muted">21.03.2015</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body blog-pra">
                                <div class="blog-img">
                                    <img src="img/cropper/1.jpg" alt="" />
                                    <a href="blog_details.html">
                                        <h4>TIPS FOR BEAUTY</h4>
                                    </a>
                                </div>
                                <p>
                                    There are many variations of the passages of Lorem Ipsum onece available, but the majority have suffered alteration in some form, by injected humour...
                                </p>
                            </div>
                            <div class="panel-footer">
                                <span class="pull-right"><i class="fa fa-comments-o"> </i> 22 comments</span>
                                <i class="fa fa-eye"> </i> 142 views
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel blog-box mg-t-30 responsive-mg-b-0">
                            <div class="panel-heading custom-blog-hd">
                                <div class="media clearfix">
                                    <a class="pull-left">
											<img class="img-circle" src="img/contact/2.jpg" alt="profile-picture">
										</a>
                                    <div class="media-body blog-std">
                                        <p>Created by: <span class="font-bold">Smith</span> </p>
                                        <p class="text-muted">21.03.2015</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body blog-pra">
                                <div class="blog-img">
                                    <img src="img/cropper/1.jpg" alt="" />
                                    <a href="blog_details.html">
                                        <h4>TIPS FOR BEAUTY</h4>
                                    </a>
                                </div>
                                <p>
                                    There are many variations of the passages of Lorem Ipsum onece available, but the majority have suffered alteration in some form, by injected humour...
                                </p>
                            </div>
                            <div class="panel-footer">
                                <span class="pull-right"><i class="fa fa-comments-o"> </i> 22 comments</span>
                                <i class="fa fa-eye"> </i> 142 views
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel blog-box mg-t-30 responsive-mg-b-0">
                            <div class="panel-heading custom-blog-hd">
                                <div class="media clearfix">
                                    <a class="pull-left">
											<img class="img-circle" src="img/contact/3.jpg" alt="profile-picture">
										</a>
                                    <div class="media-body blog-std">
                                        <p>Created by: <span class="font-bold">Smith</span> </p>
                                        <p class="text-muted">21.03.2015</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body blog-pra">
                                <div class="blog-img">
                                    <img src="img/cropper/1.jpg" alt="" />
                                    <a href="blog_details.html">
                                        <h4>TIPS FOR BEAUTY</h4>
                                    </a>
                                </div>
                                <p>
                                    There are many variations of the passages of Lorem Ipsum onece available, but the majority have suffered alteration in some form, by injected humour...
                                </p>
                            </div>
                            <div class="panel-footer">
                                <span class="pull-right"><i class="fa fa-comments-o"> </i> 22 comments</span>
                                <i class="fa fa-eye"> </i> 142 views
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel blog-box mg-t-30">
                            <div class="panel-heading custom-blog-hd">
                                <div class="media clearfix">
                                    <a class="pull-left">
											<img class="img-circle" src="img/contact/4.jpg" alt="profile-picture">
										</a>
                                    <div class="media-body blog-std">
                                        <p>Created by: <span class="font-bold">Smith</span> </p>
                                        <p class="text-muted">21.03.2015</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body blog-pra">
                                <div class="blog-img">
                                    <img src="img/cropper/1.jpg" alt="" />
                                    <a href="blog_details.html">
                                        <h4>TIPS FOR BEAUTY</h4>
                                    </a>
                                </div>
                                <p>
                                    There are many variations of the passages of Lorem Ipsum onece available, but the majority have suffered alteration in some form, by injected humour...
                                </p>
                            </div>
                            <div class="panel-footer">
                                <span class="pull-right"><i class="fa fa-comments-o"> </i> 22 comments</span>
                                <i class="fa fa-eye"> </i> 142 views
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Start Footer area-->
        <?php include 'components/footer.php' ?>
        <!-- End Footer area-->
    </div>

    <!-- Start Scripts -->
    <?php include 'layout/scripts.php' ?>
    <!-- End Scripts -->
</body>

</html>