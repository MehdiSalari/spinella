<!DOCTYPE html>
<html lang="en">

<?php view('layout/head'); ?>
<head>
    <link rel="stylesheet" href="<?= $_ENV['BASE_PATH'] ?>/views/fa/stylefa.css">
</head>
<style>
    footer {
        margin-bottom: -27px;
    }
</style>

<body class="farsi">

    <div id="wrapper">

        <!-- header begin -->
        <?php require 'components/header.php'; ?>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <!-- بخش پارالاکس -->
            <section id="section-slider" class="fullwidthbanner-container" aria-label="بخش-اسلایدر">
                <div id="revolution-slider">
                    <ul>
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                            <!-- تصویر پس‌زمینه -->
                            <img src="<?= assets('images/slider/slide-1.jpg') ?>" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">

                            <div style="letter-spacing: normal;" class="tp-caption big-s1 custom-header-title"
                                data-x="center" data-y="220" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <span class="id-color-2">اسپینلا</span>
                            </div>

                            <div style="letter-spacing: normal;"
                                class="tp-caption very-big-white custom-header-subtitle" data-x="center" data-y="300"
                                data-width="none" data-height="none" data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                زعفران
                            </div>

                            <div class="rtl tp-caption text-center custom-header-text" data-x="center" data-y="380"
                                data-width="450" data-height="none" data-whitespace="wrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                                تجربه خلوص با اسپینلا؛ جایی که صالت و کیفیت در هر رشته زعفران به هم می‌رسند.
                            </div>

                            <div class="tp-caption" data-x="center" data-y="450" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                                <a href="#" style="letter-spacing: 0;" class="btn-slider">مشاهده محصولات</a>
                            </div>
                        </li>

                        <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                            <!-- تصویر پس‌زمینه -->
                            <img src="<?= assets('images/slider/slide-2.jpg') ?>" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">

                            <div class="tp-caption big-s1 custom-header-title" data-x="center" data-y="220"
                                data-width="none" data-height="none" data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <span class="id-color-2">اسپینلا</span>
                            </div>

                            <div style="letter-spacing: normal;"
                                class="tp-caption very-big-white custom-header-subtitle" data-x="center" data-y="300"
                                data-width="none" data-height="none" data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                زعفران
                            </div>

                            <div class="rtl tp-caption text-center custom-header-text" data-x="center" data-y="380"
                                data-width="450" data-height="none" data-whitespace="wrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                                تجربه خلوص با اسپینلا؛ جایی که صالت و کیفیت در هر رشته زعفران به هم می‌رسند.
                            </div>

                            <div class="tp-caption" data-x="center" data-y="450" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                                <a href="#" style="letter-spacing: 0;" class="btn-slider">مشاهده محصولات</a>
                            </div>
                        </li>

                        <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                            <!-- تصویر پس‌زمینه -->
                            <img src="<?= assets('images/slider/slide-3.jpg') ?>" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">

                            <div class="tp-caption big-s1 custom-header-title" data-x="center" data-y="220"
                                data-width="none" data-height="none" data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <span class="id-color-2">اسپینلا</span>
                            </div>

                            <div style="letter-spacing: normal;"
                                class="tp-caption very-big-white custom-header-subtitle" data-x="center" data-y="300"
                                data-width="none" data-height="none" data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                زعفران
                            </div>

                            <div class="rtl tp-caption text-center custom-header-text" data-x="center" data-y="380"
                                data-width="450" data-height="none" data-whitespace="wrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                                تجربه خلوص با اسپینلا؛ جایی که صالت و کیفیت در هر رشته زعفران به هم می‌رسند.
                            </div>

                            <div class="tp-caption" data-x="center" data-y="450" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                                <a href="#" style="letter-spacing: 0;" class="btn-slider">مشاهده محصولات</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- بخش پارالاکس پایان -->


            <!-- شروع بخش -->
            <section class="rtl">
                <div class="container">
                    <div class="row aligns-item-center">
                        <div class="col-lg-6">
                            <div class="text-center">
                                <h2 class="s1 id-color-2 mb-7 wow fadeInUp">بخوانید</h2>
                                <h2 class="s2 wow fadeInUp">داستان ما</h2>
                                <div class="spacer-single"></div>
                            </div>
                            <p class="lead">سپینلا ریشه لاتین کلمه اسپینل به معنی یاقوت سرخ است. دلیل این نامگذاری گذشته
                                از رنگ، شباهت ارزشمندی یاقوت و زعفران به عنوان گرانترین ادویه جهان و نیز خواص فراوان
                                درمانی زعفران و یاقوت که از دیرباز در تاریخ و فرهنگ ما شناخته شده است می باشد.</p>
                        </div>
                        <div class="col-md-6 first-img">
                            <img src="<?= assets('images/background/bg-1.jpg') ?>" alt="" class="rounded-20 img-gall">
                        </div>
                    </div>
                </div>
            </section>
            <!-- پایان بخش -->

            <!-- شروع بخش -->
            <section class="no-top">
                <div class="container">
                    <div class="row bb gx-5 text-center">

                        <div class="rtl col-lg-3 wow fadeInRight">
                            <img src="<?= assets('images/misc/icon-4.png') ?>" alt="">
                            <div class="spacer-single"></div>
                            <h3>محصول با برند شما</h3>
                            <p>در صورت درخواست شما، این توانمندی را داریم که کلیه محصولاتمان را با برند ه خود شما بسته
                                بندی و به شما ارائه کنیم.</p>
                            <a href="about.php" class="btn-custom">بیشتر بخوانید</a>
                        </div>

                        <div class="rtl col-lg-3 wow fadeInRight" data-wow-delay=".1s">
                            <img src="<?= assets('images/misc/icon-1.png') ?>" alt="">
                            <div class="spacer-single"></div>
                            <h3>بسته‌بندی منحصربه‌فرد</h3>
                            <p>بسته‌بندی منحصربه‌فرد ما، تازگی و کیفیت محصولاتمان را حفظ می‌کند و تجربه‌ای استثنایی از
                                اولین نگاه تا آخرین طعم را تضمین می‌کند.</p>
                            <a href="about.php" class="btn-custom">بیشتر بخوانید</a>
                        </div>

                        <div class="rtl col-lg-3 wow fadeInRight" data-wow-delay=".2s">
                            <img src="<?= assets('images/misc/icon-3.png') ?>" alt="">
                            <div class="spacer-single"></div>
                            <h3>کیفیت برتر</h3>
                            <p>محصولات با کیفیت برتر ما با بالاترین استانداردها ساخته شده‌اند و طعمی بی‌نظیر و برتری در
                                هر جزئیات را ارائه می‌دهند.</p>
                            <a href="about.php" class="btn-custom">بیشتر بخوانید</a>
                        </div>

                        <div class="rtl col-lg-3 wow fadeInRight" data-wow-delay=".3s">
                            <img src="<?= assets('images/misc/icon-2.png') ?>" alt="">
                            <div class="spacer-single"></div>
                            <h3>زعفران اصلی</h3>
                            <p>
                                زعفران پس از برداشت از مزارع تمامی آزمایشات کیفی را در آزمایشگاه ما میگذراند و اصالت و
                                تازگی آن تضمین می شود.
                            </p>
                            <a href="about.php" class="btn-custom">بیشتر بخوانید</a>
                        </div>

                    </div>
                </div>
            </section>
            <!-- پایان بخش -->



            <!-- شروع بخش -->
            <section id="section-title-1" class="text-light jarallax">
                <img src="<?= assets('images/background/bg-2.jpg') ?>" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h2 class="s1 id-color-2 mb-7 wow fadeInUp">برتر</h2>
                                <h2 class="s2 wow fadeInUp">زعفران</h2>
                                <div class="spacer-double"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- پایان بخش -->


            <!-- شروع بخش -->
            <section class="jarallax" aria-label="section">
                <img src="<?= assets('images/background/bg-3.jpg') ?>" class="jarallax-img" alt="">
                <div class="container">
                    <div class="rtl row wow fadeInLeft" style="flex-direction: row-reverse">
                    <div class="col-lg-6">
                            <div class="menu-item thead">
                                <div class="c1">انواع زعفران</div>
                            </div>


                            <div class="menu-item">
                                <div class="c1">زعفران نگین
                                    <span>این نوع زعفران از نظر میزان خامه همراه با آن مشابه
زعفرانپوشال معمولی است و لیکن ضخیم ثر از پوشال
معمولی است. از قدرت رنگی و عطر بالائی برخوردار
است و از نظر حجم و زیبایی بسیار فوق العاده می باشد.</span></div>
                            </div>


                            <div class="menu-item">
                                <div class="c1">زعفران سرگل
                                    <span>این نوع زعفران کاملا خالص بوده و همان رشته بریده
زعفران بدون خامه می باشد. قدرت رنگی این نوع از
زعفران نیز بسیار بالا است و شکستگی در بین رشته ها
دیده می شود.</span></div>
                            </div>

                            <div class="menu-item">
                                <div class="c1">زعفران پوشال
                                    <span>این نوع زعفران شامل رشته هایی است که با ۲-۲
میلی متر خامه همراه است. به علت وجود خامه
(قسمت سفید زعفران) از عطر بالاتی برخوردار است.</span>
                                </div>
                            </div>


                            <div class="menu-item">
                                <div class="c1">زعفران دسته
                                    <span>این نوع زعفران شامل تمام رشته یا فیلامیت زعفران است.
این نوع زعفران شامل کلاله های همراه با خامه است.
بخش قرمز رنگ زعفران (کلاله) همراه با دسته بصورت
مرتب روی هم قرار گرفته اند و به کمک نخ بصورت
دسته پیچیده شده اند.</span></div>
                            </div>


                            <div class="menu-item">
                                <div class="c1">کنج یا سفید
                                    <span>زمانیکه زعفران سر گل را از زعفران دسته ای جدا می کنیم
                                    قسمت ريشه يا سفید باقیمانده کنج نامیده می شود.</span></div>
                            </div>

                            <div class="spacer-single"></div>

                            <a href="#" class="btn-custom">View All Products</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- پایان بخش -->


            <!-- شروع بخش -->
            <section id="section-title-2" class="text-light jarallax">
                <img src="<?= assets('images/background/bg-4.jpg') ?>" class="jarallax-img" alt="">
                <div class="container">
                    <div class="rtl row wow fadeInLeft">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h2 class="s1 id-color-2 mb-7 wow fadeInUp">اسپینلا</h2>
                                <h2 class="s2 wow fadeInUp">از مـزارع مـا تـا سفـره شمـا</h2>
                                <div class="spacer-double"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- پایان بخش -->



            <!-- شروع بخش -->
            <section class="jarallax rtl" aria-label="section">
                <div class="jarallax-img cij p-4" style="background-image: url(<?= assets('images/background/bg-5.jpg') ?>)"></div>
                <div class="container">
                    <div class="row wow fadeInRight">
                        <div class="col-lg-6 offset-lg-6">
                            <div style="max-width: 1200px; text-align: justify" class="menu-item thead">
                                <div style="font-size: 25px; letter-spacing: normal;" class="c1 custom-desc">اسپینلا یک
                                    شرکت پیشرو است که در تولید و صادرات محصولات کشاورزی برتر، از جمله زعفران، میوه‌های
                                    خشک، ادویه‌جات و آجیل تخصص دارد. نام ما، که از کلمه لاتین "spinel" به معنی یاقوت
                                    گرفته شده، رنگ غنی و ارزش بالای محصولات ما را بازتاب می‌دهد. با استفاده از روش‌های
                                    تولید و بسته‌بندی عالی، ما محصولات با کیفیت بالا را به بازارهای جهانی ارائه می‌دهیم
                                    و در عین حال به پایداری و احترام به محیط زیست پایبندیم. در اسپینلا، تیم متعهد و
                                    باتجربه ما به ارائه محصولات و خدمات استثنایی برای جلب اعتماد و رضایت مشتریان خود
                                    متعهد است.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- پایان بخش -->


            <!-- شروع بخش -->
            <section id="section-gallery" aria-label="section-gallery" class="no-top">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="gallery" class="gallery zoom-gallery gallery-6-cols wow fadeInUp"
                                data-wow-delay=".3s">

                                <!-- آیتم گالری -->
                                <div class="item">
                                    <figure class="position-relative">
                                        <a href="<?= assets('images/menu/view/pf%20(1).jpg') ?>" title="زعفران و گل">
                                            <span class="d-hover">
                                                <span class="d-text">
                                                    <span class="d-cap">مشاهده</span>
                                                </span>
                                            </span>
                                            <img class="img-gall" src="<?= assets('images/menu/view/pf%20(1).jpg') ?>" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <!-- پایان آیتم گالری -->

                                <!-- آیتم گالری -->
                                <div class="item">
                                    <figure class="position-relative">
                                        <a href="<?= assets('images/menu/view/pf%20(2).jpg') ?>" title="زعفران در قاشق">
                                            <span class="d-hover">
                                                <span class="d-text">
                                                    <span class="d-cap">مشاهده</span>
                                                </span>
                                            </span>
                                            <img class="img-gall" src="<?= assets('images/menu/view/pf%20(2).jpg') ?>" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <!-- پایان آیتم گالری -->

                                <!-- آیتم گالری -->
                                <div class="item">
                                    <figure class="position-relative">
                                        <a href="<?= assets('images/menu/view/pf%20(3).jpg') ?>" title="زعفران در جعبه">
                                            <span class="d-hover">
                                                <span class="d-text">
                                                    <span class="d-cap">مشاهده</span>
                                                </span>
                                            </span>
                                            <img class="img-gall" src="<?= assets('images/menu/view/pf%20(3).jpg') ?>" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <!-- پایان آیتم گالری -->

                                <!-- آیتم گالری -->
                                <div class="item">
                                    <figure class="position-relative">
                                        <a href="<?= assets('images/menu/view/pf%20(4).jpg') ?>" title="زعفران در قاشق چوبی">
                                            <span class="d-hover">
                                                <span class="d-text">
                                                    <span class="d-cap">مشاهده</span>
                                                </span>
                                            </span>
                                            <img class="img-gall" src="<?= assets('images/menu/view/pf%20(4).jpg') ?>" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <!-- پایان آیتم گالری -->

                                <!-- آیتم گالری -->
                                <div class="item">
                                    <figure class="position-relative">
                                        <a href="<?= assets('images/menu/view/pf%20(5).jpg') ?>" title="زعفران در قاشق های چوبی">
                                            <span class="d-hover">
                                                <span class="d-text">
                                                    <span class="d-cap">مشاهده</span>
                                                </span>
                                            </span>
                                            <img class="img-gall" src="<?= assets('images/menu/view/pf%20(5).jpg') ?>" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <!-- پایان آیتم گالری -->

                                <!-- آیتم گالری -->
                                <div class="item">
                                    <figure class="position-relative">
                                        <a href="<?= assets('images/menu/view/pf%20(6).jpg') ?>" title="زعفران در جعبه فلزی">
                                            <span class="d-hover">
                                                <span class="d-text">
                                                    <span class="d-cap">مشاهده</span>
                                                </span>
                                            </span>
                                            <img class="img-gall" src="<?= assets('images/menu/view/pf%20(6).jpg') ?>" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <!-- پایان آیتم گالری -->
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- پایان بخش -->



            <section class="side-bg no-top no-bottom text-light bg-color" aria-label="section">
                <div class="col-lg-6 pull-right image-container jarallax">
                    <img src="<?= assets('images/background/bg-side-1.jpg') ?>" class="jarallax-img" alt="">
                </div>

                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="col-lg-6 offset-lg-6 wow fadeInRight">
                            <div class="padding80 custom-quote">
                                <div class="text-center">
                                    <h2 class="s1 id-color-2 mb-7 wow fadeInUp">دستور پخت</h2>
                                    <h2 class="s2 wow fadeInUp">غذاها با زعفران</h2>
                                    <div class="spacer-single"></div>
                                </div>
                                <blockquote style="direction:rtl">
                                    در این بخش دستور پخت چند غذا با زعفران آموزش داده شده است. جهت مشاهده این دستورات
                                    پخت کلیک کنید.
                                </blockquote>
                                <a href="#" style="background-color: #f5f5f5;color: #9c1126" class="btn-custom">مشاهده
                                    دستورات پخت</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- شروع بخش -->
            <section id="cta" aria-label="cta" class="call-to-action">
                <div class="container">
                    <div class="row text-center">
                        <div class="rtl col-lg-13 text-lg-center text-sm-center">
                            <h3>اسپینلا محصولات اصلی و با کیفیت برتر ارائه میکند.</h3>
                        </div>

                        <!-- <div class="col-lg-3 text-lg-end text-sm-center">
                <a href="tel:+989123456789" class="btn-line-black">همین حالا تماس بگیرید</a>
            </div> -->
                    </div>
                </div>
            </section>
            <!-- پایان بخش -->

        </div>


        <!-- footer begin -->
        <?php require 'components/footer.php' ?>;
        <!-- footer close -->

        <div id="preloader">
            <div class="preloader1"></div>
        </div>
    </div>


    <!-- Javascript Files
    ================================================== -->
    <?php view('layout/scripts') ?>

</body>

</html>