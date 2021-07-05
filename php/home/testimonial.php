    <!-- Start Client Testimonial section -->
    <section id="sm-client-testimonial">
        <div class="sm-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sm-client-testimonial-area">
                            <div class="sm-title">
                                <span class="sm-subtitle">Testimonials</span>
                                <h2>What Customers Say</h2>
                                <i class="fa fa-spoon"></i>
                                <span class="sm-title-bar"></span>
                            </div>
                            <!-- testimonial content -->
                            <div class="sm-testimonial-content">
                                <!-- testimonial slider -->
                                <ul class="sm-testimonial-slider">


                                <?php global $post;
                                    $myposts = get_posts(array(
                                        'posts_per_page' => 3,
                                        'order'          => 'ASC',
                                        'category'       => 24
                                    ));
                                    if ($myposts) {
                                        foreach ($myposts as $post) :
                                            setup_postdata($post); ?>
                                    <li>
                                        <div class="sm-testimonial-single">
                                            <div class="sm-testimonial-info">
                                                <p><?php the_excerpt(); ?></p>
                                            </div>
                                            <div class="sm-testimonial-bio">
                                                <p><?php the_title(); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                        endforeach;
                                        wp_reset_postdata();
                                    }   ?>



                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Client Testimonial section -->
