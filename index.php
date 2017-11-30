<?php get_header(); ?>
<!-- BEGIN INTRO SECTION -->
<section id="intro">
    <div id="carousel-example-generic" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner text-uppercase" role="listbox">
            <!-- First slide -->
            <div class="item carousel-item-one active">
                <div class="container">
                    <h3 class="carousel-position-one animate-delay carousel-title-v1" data-animation="animated fadeInDown">
                        The New Way
                    </h3>
                    <p class="carousel-position-two animate-delay carousel-subtitle-v1" data-animation="animated fadeInDown">
                        To Manage Your <br> Small to Enterprise Business
                    </p>
                    <a href="#" class="carousel-position-three animate-delay btn-brd-white" data-animation="animated fadeInUp">Learn More</a>
                </div>
            </div>

            <!-- Second slide -->
            <div class="item carousel-item-two">
                <div class="container">
                    <h3 class="carousel-position-one animate-delay carousel-title-v2" data-animation="animated fadeInDown">
                        Ultimate Apps <br> for Business
                    </h3>
                    <p class="carousel-position-three animate-delay carousel-subtitle-v2" data-animation="animated fadeInDown">
                        Available in: Android &amp; IOS
                    </p>
                </div>
            </div>

            <!-- Third slide -->
            <div class="item carousel-item-three">
                <div class="center-block">
                    <div class="center-block-wrap">
                        <div class="center-block-body">
                            <h3 class="margin-bottom-20 animate-delay carousel-title-v1" data-animation="animated fadeInDown">
                                Let us show you
                            </h3>
                            <p class="margin-bottom-20 animate-delay carousel-title-v3" data-animation="animated fadeInDown">
                                A few things
                            </p>
                            <a href="#" class="animate-delay btn-brd-white" data-animation="animated fadeInUp">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END INTRO SECTION -->

<!-- BEGIN MAIN LAYOUT -->
<div class="page-content">

    <!-- BEGIN ABOUT SECTION -->
    <section id="about">
        <!-- Services BEGIN -->
        <div class="container service-bg">
            <div class="row">
                <div class="col-sm-4">
                    <div class="services sm-margin-bottom-100">
                        <div class="services-wrap">
                            <div class="service-body">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/onepage2/img/widgets/icon1.png" alt="">
                            </div>
                        </div>
                        <h2>Metronic is time saver</h2>
                        <p>Lorem ipsum dolor consetuer <br> erat votpat dolore</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="services sm-margin-bottom-100">
                        <div class="services-wrap">
                            <div class="service-body">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/onepage2/img/widgets/icon2.png" alt="">
                            </div>
                        </div>
                        <h2>Created for all type Devices</h2>
                        <p>Lorem ipsum dolor consetuer <br> erat votpat dolore</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="services">
                        <div class="services-wrap">
                            <div class="service-body">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/onepage2/img/widgets/icon3.png" alt="">
                            </div>
                        </div>
                        <h2>Great individual Design</h2>
                        <p>Lorem ipsum dolor consetuer <br> erat votpat dolore</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services END -->
    </section>
    <!-- END ABOUT SECTION -->

    <!-- BEGIN FEATURES SECTION -->
    <section id="features">
        <!-- Features BEGIN -->
        <div class="features-bg">
            <div class="container">
                <div class="heading">
                    <h2><strong>业 务</strong> 范 围</h2>
                    <p></p>
                </div><!-- //end heading -->
                <!-- Features -->
                <div class="row margin-bottom-70">
                    <?php
                    $latest_cat_post = new WP_Query(array('category_name' => 'jiaoyu02-yewufanwei', 'posts_per_page' => 6));
                    if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                            ?>
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                            <div class="col-md-6 md-margin-bottom-70">
                                <div class="features">
                                    <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="" />
                                    <div class="features-in">
                                        <h3><a href="#"><?php the_title(); ?></a></h3>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div><!-- //end row -->
                <div class="row margin-bottom-80">
                    <?php
                    $latest_cat_post = new WP_Query(array('category_name' => 'jiaoyu02-yewufanwei80', 'posts_per_page' => 6));
                    if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                            ?>
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                            <div class="col-md-6 md-margin-bottom-70">
                                <div class="features">
                                    <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="" />
                                    <div class="features-in">
                                        <h3><a href="#"><?php the_title(); ?></a></h3>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    ?>  
                </div><!-- //end row -->
                <!-- End Features -->
                <center><a href="#" class="btn-brd-danger">Try it for free</a></center>
            </div>
        </div>
        <!-- Features END -->
    </section>
    <!-- END FEATURES SECTION -->


    <!-- BEGIN TEAM SECTION -->
    <section id="team">
        <!-- Team BEGIN -->
        <div class="team-bg parallax">
            <div class="container">
                <div class="heading-light">
                    <h2>师 资 <strong> 团 队</strong></h2>
                </div><!-- //end heading -->

                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <?php
                            $latest_cat_post = new WP_Query(array('category_name' => 'jiaoyu02-jiaoshi', 'tag' => ''));
                            if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                                    ?>
                                    <?php if (has_post_thumbnail($post->ID)): ?>
                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                        <div class="col-sm-4">
                                            <div class="team-members">
                                                <div class="team-avatar">
                                                    <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="" />
                                                </div>
                                                <div class="team-desc">
                                                    <div class="team-details">
                                                        <h4><?php the_title(); ?></h4>
                                                        <span><?php the_excerpt(); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endif; ?>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div><!-- //end row -->

                    </div>
                    <div class="col-md-4">
                        <div class="team-about">
                            <h3>Built with bootstrap</h3>
                            <p>Lorem niam ipsum dolor sit ammet adipiscing et suitem elit et nonuy nibh elit niam dolor suit elit amet nonummy nibh dolore onec placerat interdum purus.</p>
                            <div class="margin-bottom-40"></div>
                            <h3>AngularJS Support</h3>
                            <p>Etiam aliquam ex pulvinar odio dictum commodo. Nulla dui risus, egestas sit amet nisi et, eleifend cursus odio.</p>
                            <div class="margin-bottom-40"></div>
                            <h3>and WOW Features</h3>
                            <p>Donec placerat interdum purus, at finibus enim aliquam non. Etiam congue fringilla pharetra. Vestibulum facilisis lectus eros. Etiam congue fringilla pharetra. Lorem niam ipsum dolor sit ammet adipiscing e</p>
                        </div>
                    </div>
                </div><!-- //end row -->
            </div>
        </div>
        <!-- Team END -->
    </section>
    <!-- END TEAM SECTION -->

    <!-- BEGIN CLIENTS SECTION -->
    <section id="clients">
        <div class="clients">
            <div class="clients-bg">
                <div class="container">
                    <div class="heading-blue">
                        <h2>合 作 <strong>机 构</strong></h2>
                        <p></p>
                    </div><!-- //end heading -->

                    <!-- Owl Carousel -->
                    <div class="owl-carousel">
                        <?php
                        $latest_cat_post = new WP_Query(array('category_name' => 'jiaoyu02-parner', 'tag' => ''));
                        if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                                ?>
                                <?php if (has_post_thumbnail($post->ID)): ?>
                                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                    <div class="item" data-quote="#paner-<?php the_ID(); ?>">
                                        <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="" />
                                    </div>
                                <?php endif; ?>
                                <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <!-- End Owl Carousel -->
                </div>
            </div>

            <!-- Clients Quotes -->
            <div class="clients-quotes">
                <div class="container">

                    <?php
                    $latest_cat_post = new WP_Query(array('category_name' => 'jiaoyu02-parner', 'tag' => ''));
                    if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                            ?>
                            <?php if (has_post_thumbnail($post->ID)): ?>
                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                <div class="client-quote" id="paner-<?php the_ID(); ?>">
                                    <p><?php the_content(); ?></p>
                                    <h4><?php the_title(); ?></h4>
                                    <span><?php the_excerpt(); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php
                        endwhile;
                    endif;
                    ?>



                </div>
            </div>
            <!-- End Clients Quotes -->
        </div>
    </section>
    <!-- END CLIENTS SECTION -->

    <!-- BEGIN PORTFOLIO SECTION -->
    <section id="portfolio">
        <div class="portfolio">
            <div class="container">
                <div class="heading">
                    <h2>教 学 <strong>环 境</strong></h2>
                </div>
                <div class="row">
                    <?php
                    $latest_cat_post = new WP_Query(array('category_name' => 'jiaoyu02-huanjing', 'tag' => ''));
                    if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                            ?>
                            <?php if (has_post_thumbnail($post->ID)): ?>
                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                <div class="col-md-6 huanjing">
                                    <img class=" img-responsive" src="<?php echo $image[0]; ?>" alt="" />
                                </div>
                            <?php endif; ?>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- END PORTFOLIO SECTION -->

    <!-- BEGIN PRICING SECTION -->
    <section id="pricing">
        <div class="pricing-bg">
            <div class="container">
                <div class="heading">
                    <h2>课 程 <strong>介 绍</strong></h2>
                    <P>To try the most advanced business platform <br> for mobile and desktop</P>
                </div><!-- //end heading -->

                <!-- Pricing -->
                <div class="row no-space-row">
                    <div class="col-md-4">
                        <div class="pricing no-right-brd">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/onepage2/img/widgets/icon4.png" alt="">
                            <h4>课 程 1</h4>
                            <span>$99 / Month</span>
                            <ul class="pricing-features">
                                <li>1000 Copies</li>
                                <li>Unlimited Data</li>
                                <li>Unlimited Users</li>
                                <li>Forst 7 days free</li>
                            </ul>
                            <button type="button" class="btn-brd-primary">Purchase</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing pricing-red">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/onepage2/img/widgets/icon5.png" alt="">
                            <h4>课 程 2</h4>
                            <span>$99 / Month</span>
                            <ul class="pricing-features">
                                <li>1000 Copies</li>
                                <li>Unlimited Data</li>
                                <li>Unlimited Users</li>
                                <li>Forst 7 days free</li>
                            </ul>
                            <button type="button" class="btn-brd-white">Purchase</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing no-left-brd">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/onepage2/img/widgets/icon6.png" alt="">
                            <h4>课 程 3</h4>
                            <span>$199 / Month</span>
                            <ul class="pricing-features">
                                <li>1000 Copies</li>
                                <li>Unlimited Data</li>
                                <li>Unlimited Users</li>
                                <li>Forst 7 days free</li>
                            </ul>
                            <button type="button" class="btn-brd-primary">Purchase</button>
                        </div>
                    </div>
                </div><!-- //end row -->
                <!-- End Pricing -->
            </div>
        </div>
    </section>
    <!-- END PRICING SECTION -->

    <?php get_footer(); ?>