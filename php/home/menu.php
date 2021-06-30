    <!-- Start Restaurant Menu -->

    <?php
    $categories = get_categories(
        array('parent' => 3)
    );
    echo '<pre> ';
    // var_dump($categories);
    foreach($categories as $category){
        
        var_dump($category->cat_name);
        var_dump($category->name);

    }
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
                                    var_dump($category['name']);
                                ?>
                                    
                                    <li class=" <?php echo  $category['name'] == 'Rice' ? 'active' : ''; ?>"><a href="#<?php echo $category['name']; ?>" data-toggle="tab"><?php echo $category['name']; ?></a></li>
                                <?php } ?>

                                <!-- <li class="active"><a href="#Rice" data-toggle="tab">Rice</a></li>
                                <li><a href="#Curry" data-toggle="tab">Curry</a></li>
                                <li><a href="#Sides" data-toggle="tab">Sides</a></li>
                                <li><a href="#desserts" data-toggle="tab">Desserts</a></li> -->
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <?php foreach ($categories as $category) { ?>

                                    <div class="tab-pane fade in <?php echo  $category['name'] == 'Rice' ? 'active' : ''; ?>" id="<?php echo $category['name']; ?>">
                                        <div class="sm-tab-content-area">
                                            <div class="row">
                                                <?php global $post;
                                                $myposts = get_posts(array(
                                                    'posts_per_page' => 6,
                                                    'order'          => 'ASC',
                                                    'category'       => $category['term_id']
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
                                <!-- <div class="tab-pane fade " id="Curry">
                                    <div class="sm-tab-content-area">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="sm-tab-content-left">
                                                    <ul class="sm-menu-item-nav">
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/chicken-rezala.png" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#"> Chicken Rezala </a></h4>
                                                                    <span class="sm-menu-price">৳360 per chicken</span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/beef-rezala.png" alt="img">
                                                                        array('position' => 1,'title'=>'Rice','category_id'=>4),         </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Beef Rezala / (Kala) Bhuna / Curry (Bone-in)</a></h4>
                                                                    <span class="sm-menu-price">৳800 Per Kg</span>
                                                                    <p>165 gm (4-5 pcs) beef</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/mutton-rezala.png" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Mutton Rezala / Bhuna</a></h4>
                                                                    <span class="sm-menu-price">৳1050 Per Kg</span>
                                                                    <p>140 gm (3-4 pcs) mutton</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="sm-tab-content-right">
                                                    <ul class="sm-menu-item-nav">
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/chicken-roast.png" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Chicken Roast (Cock / Sonali)</a></h4>
                                                                    <span class="sm-menu-price">৳100-৳120 per serve</span>
                                                                    <p>1/4 of ~800 gm Roast chicken</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/chicken-full-roast.png" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Chicken full roast</a></h4>
                                                                    <span class="sm-menu-price">৳400 per chicken</span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media vanish">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/item-4.jpg" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Indian Rice</a></h4>
                                                                    <span class="sm-menu-price"></span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="Sides">
                                    <div class="sm-tab-content-area">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="sm-tab-content-left">
                                                    <ul class="sm-menu-item-nav">
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/kabab.png" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Jali/Shami/Nargis Kebab</a></h4>
                                                                    <span class="sm-menu-price">৳50 per piece</span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/chicken-grill.png" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Grill Chicken</a></h4>
                                                                    <span class="sm-menu-price">৳100 per serve</span>
                                                                    <p>Quarter of chicken</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/rui-fish-fry.png" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Rui fish fry</a></h4>
                                                                    <span class="sm-menu-price">৳80 per piece</span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="sm-tab-content-right">
                                                    <ul class="sm-menu-item-nav">
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/prawn-stick.png" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Prawn Stick Masala</a></h4>
                                                                    <span class="sm-menu-price">৳100/৳120/৳150</span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/vegetable-curry.png" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Vegetable Deshi</a></h4>
                                                                    <span class="sm-menu-price">৳35 per serve</span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/vegetable-chinese.png" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Vegetable Chinese</a></h4>
                                                                    <span class="sm-menu-price">৳50 per serve</span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="desserts">
                                    <div class="sm-tab-content-area">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="sm-tab-content-left">
                                                    <ul class="sm-menu-item-nav">
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/jorda-cup.png" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Jorda</a></h4>
                                                                    <span class="sm-menu-price">৳25 per serve</span>
                                                                   <p>per person</p> 
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/jorda-basmati-rice.png" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Jorda (Basmati Rice)</a></h4>
                                                                    <span class="sm-menu-price">৳1500 per Kg</span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/baby-sweets.png" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Baby Sweets</a></h4>
                                                                    <span class="sm-menu-price">৳300 per Kg</span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="sm-tab-content-right">
                                                    <ul class="sm-menu-item-nav">
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/cup-firni.png" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Jafrani Firni</a></h4>
                                                                    <span class="sm-menu-price">৳50 per Cup</span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/borhani.png" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Borhani</a></h4>
                                                                    <span class="sm-menu-price">৳45 per glass </span>
                                                                    <p>(250 ml)</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media vanish">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/item-8.jpg" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Indian Rice</a></h4>
                                                                    <span class="sm-menu-price"></span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="drinks">
                                    <div class="sm-tab-content-area">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="sm-tab-content-left">
                                                    <ul class="sm-menu-item-nav">
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/item-9.jpg" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">English Rice</a></h4>
                                                                    <span class="sm-menu-price"></span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/item-10.jpg" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Chines Rice</a></h4>
                                                                    <span class="sm-menu-price"></span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/item-9.jpg" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Indian Rice</a></h4>
                                                                    <span class="sm-menu-price"></span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="sm-tab-content-right">
                                                    <ul class="sm-menu-item-nav">
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/item-9.jpg" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">English Rice</a></h4>
                                                                    <span class="sm-menu-price"></span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/item-10.jpg" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Chines Rice</a></h4>
                                                                    <span class="sm-menu-price"></span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu/item-9.jpg" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><a href="#">Indian Rice</a></h4>
                                                                    <span class="sm-menu-price"></span>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Restaurant Menu -->