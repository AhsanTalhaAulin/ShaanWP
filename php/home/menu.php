    <!-- Start Restaurant Menu -->

    <?php
    $categories = get_categories(
        array('parent' => 3)
    );
    echo '<pre> ';
    // var_dump($categories);
    
    // foreach($categories as $category){
        
    //     var_dump($category->term_id);
    //     var_dump($category->cat_term_id);
    //     var_dump($category->cat_id);

    // }
    echo '</pre>';

    ?>


    <section id="sm-restaurant-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sm-restaurant-menu-area">
                        <div class="sm-title">
                            <span class="sm-subtitle">Discover</span>
                            <h2>OUR MENU</h2>
                            <i class="fa fa-spoon"></i>
                            <span class="sm-title-bar"></span>
                        </div>

                        <div class="sm-restaurant-menu-content">
                            <ul class="nav nav-tabs sm-restaurant-menu">

                                <?php foreach ($categories as $category) {
                                    
                                ?>
                                    $categoryName = <?php echo $categoryName; ?>;
                                    <li class=" <?php echo  $categoryName == 'Rice' ? 'active' : ''; ?>"><a href="#<?php echo $categoryName; ?>" data-toggle="tab"><?php echo $categoryName; ?></a></li>
                                <?php } ?>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <?php foreach ($categories as $category) { ?>

                                    <div class="tab-pane fade in <?php echo  $category->name == 'Rice' ? 'active' : ''; ?>" id="<?php echo $category->name; ?>">
                                        <div class="sm-tab-content-area">
                                            <div class="row">
                                                <?php global $post;
                                                $myposts = get_posts(array(
                                                    'posts_per_page' => 6,
                                                    'order'          => 'ASC',
                                                    'category'       => $category->term_id
                                                ));
                                                if ($myposts) {
                                                    foreach ($myposts as $post) :
                                                        setup_postdata($post); ?>
                                                        <div class="col-md-6 ">
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
                                                                                <h4 class="media-heading"><?php the_title(); ?></h4>
                                                                                <span class="sm-menu-price"><?php the_secondary_title(); ?></span>
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
                                <?php } ?>
 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Restaurant Menu -->