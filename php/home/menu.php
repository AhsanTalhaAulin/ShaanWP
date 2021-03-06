    <!-- Start Restaurant Menu -->

    <?php
    $categories = get_categories(
        array('parent' => 3)
    );
    $columns = array_column($categories, "name");
    // var_dump($columns);

    array_multisort( array_column($categories, "term_id"), SORT_ASC, $categories );

    $columns = array_column($categories, "name");
    // var_dump($columns);

   
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

                                    
                                    <li class=" <?php echo  $category->name == 'Rice' ? 'active' : ''; ?>"><a href="#<?php echo $category->name; ?>" data-toggle="tab"><?php echo $category->name; ?></a></li>
                                <?php } ?>
                                <!-- <li class="active"><a href="#Rice" data-toggle="tab">Rice</a></li>
                                <li><a href="#Curry" data-toggle="tab">Curry</a></li>
                                <li><a href="#Sides" data-toggle="tab">Sides</a></li>
                                <li><a href="#desserts" data-toggle="tab">Desserts</a></li> -->
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