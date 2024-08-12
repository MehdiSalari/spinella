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
            <img src="<?= assets('images/background/bg-9.jpg') ?>" class="jarallax-img" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center wow fadeInUp">
                            <h2 class="s1 mb-40">Get In</h2>
                            <h2 class="s2">Touch</h2>
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
			
			
			<section>
				<div class="container">
                    <div class="row">
                        <div class="col-lg-4 sm-text-center">
                            <h3>Our Location</h3>
                            No. 88, Moalem Blvd., Mashhad<br>
                            TEL: <a href= "tel:+989123456789">+989123456789</a><br>
                            E-Mail: <a href="mailto: info@sepidargroup.com"> info@sepidargroup.com</a><br>
                        </div>

                        <div class="col-lg-8">
                            <form name="contactForm" id="contact_form" class="position-relative z1000" method="post" action="#">
                                <div class="row gx-4">
                                    <div class="col-lg-6 col-md-6 mb10">
                                        <div class="field-set">
                                            <input type="text" name="Name" id="name" class="form-control" placeholder="Your Name" required>
                                        </div>

                                        <div class="field-set">
                                            <input type="text" name="Email" id="email" class="form-control" placeholder="Your Email" required>
                                        </div>

                                        <div class="field-set">
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="field-set mb20">
                                            <textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                    
                                
                                <!-- <div class="g-recaptcha" data-sitekey="insert-your-sitekey-here"></div> -->
                                <div id='submit' class="mt20">
                                    <input type='submit' id='send_message' value='Send Message' class="btn-custom">
                                </div>

                                <div id="success_message" class='success'>
                                    Your message has been sent successfully. Refresh this page if you want to send more messages.
                                </div>
                                <div id="error_message" class='error'>
                                    Sorry there was an error sending your form.
                                </div>
                            </form>

                            </div>
                    </div>                    			
				</div>
			</section>

        </div>

        <!-- footer begin -->
        <?php include 'components/footer.php'; ?>
        <!-- footer close -->
		
		<div id="preloader">
            <div class="preloader1"></div>
        </div>
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="<?= assets('js/plugins.js') ?>"></script>
    <script src="<?= assets('js/designesia.js') ?>"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <script src="<?= assets('js/form.js') ?>"></script>    

</body>

</html>