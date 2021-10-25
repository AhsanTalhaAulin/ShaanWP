<!DOCTYPE html>
<html lang="en">

<?php include "php/head.php" ?>


<body>





    <!-- Messenger -->
    <?php include "php/messenger.php" ?>


    <!-- Start header section -->
    <?php include "php/header.php" ?>




    <?php 
    
    function isMobile() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }
    isMobile(false){
        include "php/home/slider.php"; 
    }
    
    
    ?>






    <!--Start Services section -->
    <?php include "php/home/services.php" ?>



    <!-- Start Counter Section -->
    <?php include "php/home/counter.php" ?>




    <!-- Start Restaurant Menu -->
    <?php include "php/home/menu.php" ?>




    <!-- Start Gallery -->
    <?php include "php/home/gallery.php" ?>


    <!-- Start Client Testimonial section -->
    <?php include "php/home/testimonial.php" ?>
    <?php //include "php/home/testimonial_copy.php" 
    ?>





    <!-- Start Chef Section -->
    <?php // include "php/home/clients.php" 
    ?>


    <!-- Start Latest News -->
    <?php // include "php/home/latest-news.php" 
    ?>


    <!-- Start Contact section -->
    <?php include "php/home/contact.php" ?>


    <!-- Start Map section -->
    <?php include "php/home/map.php" ?>


    <!-- Start Footer -->
    <?php include "php/footer.php" ?>


    <!-- jQuery library -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/bootstrap.js"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/slick.js"></script>
    <!-- Counter -->
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/waypoints.js"></script>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/jquery.counterup.js"></script>
    <!-- Date Picker -->
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/bootstrap-datepicker.js"></script>
    <!-- Mixit slider -->
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/jquery.mixitup.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/jquery.fancybox.pack.js"></script>

    <!-- Custom js -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/custom.js"></script>

</body>

</html>