<!DOCTYPE html>
<html lang="fa">

<?php include 'layout/head.php'; ?>

<body class="page-menu rtl">

    <div id="wrapper">
        <!-- شروع هدر -->
        <?php include 'components/header.php'; ?>
        <!-- پایان هدر -->

        <!-- زیرهدر -->
        <section id="subheader" class="jarallax text-light">
            <img src="images/background/bg-9.jpg" class="jarallax-img" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center wow fadeInUp">
                            <h2 class="s1 mb-10">تماس</h2>
                            <h2 class="s2">با ما</h2>
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.php">خانه</a></li>
                              <li class="breadcrumb-item active" aria-current="page">تماس</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- پایان زیرهدر -->

        <!-- شروع محتوا -->
        <div id="content" class="no-bottom no-top">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 sm-text-center">
                            <h3>آدرس ما</h3>
                            <strong>دفتر مشهد:</strong> نبش آبکوه ۲۳، پلاک ۵۸۵، ساختمان کیانا، واحد ۶<br><br>
<strong>دفتر تهران: </strong>قیطریه، پورحسدری، خیابان روشنایی، خیابان شهاب، کوچه مهرداد غزبی، پلاک ۳، طبقه <br><br>
<strong>دفتر دبی:</strong> ساختمان شوپا ایوری یک ، آفیس شماره ۳۰۱، بیزینس بی <br><br>
تلفن: <a style="direction: ltr" href="tel:+989006890084">84 900 68 900 98+</a><br>
                            ایمیل: <a href="mailto:info@spinellasaffron.com"> info@spinellasaffron.com</a><br>
                        </div>

                        <div class="col-lg-8">
                            <form name="contactForm" id="contact_form" class="position-relative z1000" method="post" action="#">
                                <div class="row gx-4">
                                    <div class="col-lg-6 col-md-6 mb10">
                                        <div class="field-set">
                                            <input type="text" name="Name" id="name" class="form-control" placeholder="نام شما" required>
                                        </div>

                                        <div class="field-set">
                                            <input type="text" name="Email" id="email" class="form-control" placeholder="ایمیل شما" required>
                                        </div>

                                        <div class="field-set">
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="شماره تلفن شما" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="field-set mb20">
                                            <textarea name="message" id="message" class="form-control" placeholder="پیام شما" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                    
                                
                                <!-- <div class="g-recaptcha" data-sitekey="insert-your-sitekey-here"></div> -->
                                <div id='submit' class="mt20">
                                    <input type='submit' id='send_message' value='ارسال پیام' class="btn-custom">
                                </div>

                                <div id="success_message" class='success'>
                                    پیام شما با موفقیت ارسال شد. اگر می‌خواهید پیام‌های بیشتری ارسال کنید، این صفحه را رفرش کنید.
                                </div>
                                <div id="error_message" class='error'>
                                    متاسفانه در ارسال فرم شما خطایی رخ داده است.
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- پایان محتوا -->

        <!-- شروع فوتر -->
        <?php include 'components/footer.php'; ?>
        <!-- پایان فوتر -->
		
		<div id="preloader">
            <div class="preloader1"></div>
        </div>
    </div>

    <!-- فایل‌های جاوااسکریپت
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <script src="form.js"></script>    

</body>

</html>
