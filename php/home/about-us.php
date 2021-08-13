    <!-- Start About us -->
    <section id="sm-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sm-about-us-area">
                        <div class="sm-title">
                            <span class="sm-subtitle">Discover</span>
                            <h2>ABOUT US</h2>
                            <i class="fa fa-spoon"></i>
                            <span class="sm-title-bar"></span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="sm-about-us-left">
                                    <p>Old Dhaka based Very Authentic Catering Service provides food for any kind of Office or Home program </p>
                                    <ul>
                                        <li>Picnic,</li>
                                        <li>Wedding</li>
                                        <li>Anniversary</li>
                                        <li>Birthday</li>
                                        <li>Annual General Meeting </li>
                                    </ul>
                                    <p></p>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="sm-about-us-right">
                                    <ul class="sm-abtus-slider">
                                        <li class="sm-abtus-sliderimg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/adf/chicken grill.png" alt="img"></li>
                                        <li class="sm-abtus-sliderimg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/adf/chicken rezala.png" alt="img"></li>
                                        <li class="sm-abtus-sliderimg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/adf/chicken roast.png" alt="img"></li>
                                        <li class="sm-abtus-sliderimg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/adf/cup firni.png" alt="img"></li>

                                    
                                    
                                    </ul>
                                </div>
                            </div> -->

                            <div class="col-md-6">
                                <div class="sm-about-us-right">
                                    <h2 class="quotes">first quote</h2>
                                    <h2 class="quotes">second quote</h2>
                                    <h2 class="quotes">3rd quote</h2>
                                    <h2 class="quotes">4th quote</h2>
                                    <h2 class="quotes">5th quote</h2>
                                    <h2 class="quotes">6th quote</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        (function() {

            var quotes = $(".quotes");
            var quoteIndex = -1;

            function showNextQuote() {
                ++quoteIndex;
                quotes.eq(quoteIndex % quotes.length)
                    .fadeIn(2000)
                    .delay(2000)
                    .fadeOut(2000, showNextQuote);
            }

            showNextQuote();

        })();
    </script>
    <!-- End About us -->