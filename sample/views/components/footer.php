<!-- footer begin -->
<footer>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 sm-text-center">
                <h3>Our Location</h3>
                <?= $content['footer']['contact']['address'] ?><br>
                TEL: <a href= "tel:<?= $content['footer']['contact']['phone'] ?>"><?= $content['footer']['contact']['phone'] ?></a><br>
                E-Mail: <a href="mailto:<?= $content['footer']['contact']['email'] ?>"> <?= $content['footer']['contact']['email'] ?></a><br>
            </div>
            <div class="footer-line quick-links"></div>
            <div class="col-lg-3 sm-text-center quick-links">
                <h3>Quick Links</h3>
                <a href="blog.php">Blog</a><br>
                <a href="products.php">Products</a><br>
                <a href="about.php">About Us</a><br>
            </div>
            <div class="footer-line"></div>
            <div class="col-lg-3 sm-text-center">
                <h3>Subscribe to the newsletter</h3>
                <input type="text" class="form-control mb-2" placeholder="Enter your email">
                <input type="submit" value="Subscribe" class="btn-custom">
            </div>
            <div class="footer-line"></div>
            <div class="col-lg-3 text-center">
                <img class="logo mb-0" src="<?= assets('images/footer-logo1.png') ?>" alt="Logo">
                <p class="footer-text"><?= $content['footer']['info']['desc'] ?></p>
                <div class="social-icons mt-0">
                    <a target="_blank" href="<?= $content['footer']['social']['fb'] ?>"><i class="fa fa-facebook fa-lg"></i></a>
                    <a target="_blank" href="<?= $content['footer']['social']['ig'] ?>"><i class="fa fa-instagram fa-lg"></i></a>
                    <a target="_blank" href="<?= $content['footer']['social']['wa'] ?>"><i class="fa fa-whatsapp fa-lg"></i></a>
                    <a target="_blank" href="<?= $content['footer']['social']['tg'] ?>"><i class="fa fa-telegram fa-lg"></i></a>
                    <a target="_blank" href="<?= $content['footer']['social']['sk'] ?>"><i class="fa fa-skype fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer close -->
