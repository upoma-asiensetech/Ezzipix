<!--
 * Project  : ezeepix
 * File     : about.php
 * Author   : Abu Bakar Siddique
 * Email    : absiddique.live@gmail.com
 * Date     : 11/3/15 - 12:28 PM
 -->
<!DOCTYPE html>
<html class="frontend">
<link rel="stylesheet" href="<?php echo $this->baseUrl . 'html_template/dist/plugins/magnific/css/magnific.css'; ?>">
<link rel="stylesheet" href="<?php echo $this->baseUrl . 'html_template/dist/plugins/owl/css/owl-carousel.css'; ?>">
<?php include_once 'partial/head.php' ?>
<body>
<?php include_once 'partial/menu.php'; ?>

<section id="main" role="main">
    <section class="section bgcolor-white cstm-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-11 col-md-offset-5 my-photo-header photo-header no-padding">
                    <h3>About Us</h3>
                </div>
            </div>
            <div class="row" id="shuffle-grid">
                <p class="text-justify">
                    <?php echo $text ?>
                </p>
            </div>
        </div>
    </section>
    <!--/ END Portfolio Content -->

    <!-- START Featured Portfolio -->

    <!--/ END Featured Portfolio -->

    <!-- START To Top Scroller -->
    <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
    <!--/ END To Top Scroller -->
</section>
<?php include_once 'partial/footer.php' ?>
<?php include_once 'partial/core_script.php' ?>

<!-- Plugins and page level script : optional -->
<script type="text/javascript" src="<?php echo $this->baseUrl . 'html_template/dist/plugins/smoothscroll/js/smoothscroll.js'; ?>"></script>
<script type="text/javascript" src="<?php echo $this->baseUrl . 'html_template/dist/plugins/magnific/js/jquery.magnific-popup.js'; ?>"></script>
<script type="text/javascript" src="<?php echo $this->baseUrl . 'html_template/dist/plugins/owl/js/owl.carousel.js'; ?>"></script>
<script type="text/javascript" src="<?php echo $this->baseUrl . 'html_template/dist/plugins/shuffle/js/jquery.shuffle.js'; ?>"></script>

</body>
</html>