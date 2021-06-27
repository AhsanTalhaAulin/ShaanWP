<!DOCTYPE html>
<html lang="en">

<?php include "php/head.php" ?>


<body>
    <!-- Pre Loader -->
    <!-- <?php include "php/preloader.php" ?> -->


    <!--START SCROLL TOP BUTTON -->

    <?php include "php/scrolltop.php" ?>


    <!-- Start header section -->
    <?php include "php/header.php" ?>



    <!-- Start slider  -->
    <?php include "php/home/slider.php" ?>


    <!-- Start About us -->
    <?php include "php/home/about-us.php" ?>


    <!-- Start Counter Section -->
    <?php include "php/home/counter.php" ?>


    <!--Start Services section -->
  <section id="sm-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="service-area">
                    <div class="sm-title">
                        <span class="sm-subtitle">Discover</span>
                        <h2>OUR SERVICES</h2>
                        <i class="fa fa-spoon"></i>
                        <span class="sm-title-bar"></span>
                    </div>

                    <div class="content">
                        <div class="abc">
                        <div class="sm-tab-content-area">
                                        <div class="row">
                                            <?php  global $post;
              $myposts = get_posts( array(
              'posts_per_page' => 6,
              'order'          => 'ASC',
               'category'       => 2
            ) );
            if ( $myposts ) {
              foreach ( $myposts as $post ) :
              setup_postdata( $post ); ?>
                                            <div class="col-md-6">
                                                <div class="sm-tab-content-left">
                                                    <ul class="sm-menu-item-nav">
                                                        
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <?php the_post_thumbnail();  ?>
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><?php the_title();?></h4>
                                                                    
                                                                    <p><?php the_excerpt(); ?></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                           <?php
            endforeach;
            wp_reset_postdata();
            }   ?>
                                        </div>
                                    </div>
                        </div>
                    </div>


                </div>


            </div>





        </div>
    </div>



</section>


    <!-- Start Restaurant Menu -->
    <?php include "php/home/menu.php" ?>




    <!-- Start Gallery -->
    <?php include "php/home/gallery.php" ?>


    <!-- Start Client Testimonial section -->
    <?php include "php/home/testimonial.php" ?>




    <!-- Start Chef Section -->
    <?php include "php/home/clients.php" ?>


    <!-- Start Latest News -->
    <?php include "php/home/latest-news.php" ?>


    <!-- Start Contact section -->
    <?php include "php/home/contact.php" ?>


    <!-- Start Map section -->
    <?php include "php/home/map.php" ?>


    <!-- Start Footer -->
    <?php include "php/footer.php" ?>


    <!-- jQuery library -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/bootstrap.js"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/slick.js"></script>
    <!-- Counter -->
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/waypoints.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.counterup.js"></script>
    <!-- Date Picker -->
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/bootstrap-datepicker.js"></script>
    <!-- Mixit slider -->
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.mixitup.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.fancybox.pack.js"></script>

    <!-- Custom js -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/custom.js"></script>

</body>

</html>