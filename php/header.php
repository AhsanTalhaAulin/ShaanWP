    <!-- Start header section -->
    <header id="sm-header">

        <nav class="navbar navbar-default sm-main-navbar" role="navigation">

            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <a class="navbar-brand" href="#sm-services"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo_Shaan.png" alt="Logo img"></a>

                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right sm-main-nav">
                        <li><a href="#sm-slider">HOME</a></li>
                        <li><a href="#sm-services">OUR SERVICES</a></li>
            
                        <li><a href="#sm-restaurant-menu">PRICING</a></li>
                        <!-- <li><a href="#sm-reservation">RESERVATION</a></li> -->
                        <li><a href="#sm-gallery">GALLERY</a></li>
                        <li><a id="faq-btn" >FAQ</a></li>
                        <!-- <li><a href="#sm-latest-news">BLOG</a></li> -->
                        <li><a href="#sm-contact">CONTACT</a></li>
                        <!-- <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">PAGE <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="blog-archive.html">BLOG</a></li>
                                <li><a href="blog-single.html">BLOG DETAILS</a></li>
                                <li><a href="404.html">404 PAGE</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>

        <?php include "faq.php" ?>

    </header>

    
    <!-- End header section -->
