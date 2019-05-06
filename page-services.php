<?php get_header(); ?>
</header>
<!-- Header section end -->


<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Services</h2>
            <div class="page-links">
                <a href="#">Home</a>
                <span>Services</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end-->


<!-- services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>Get in <span>the Lab</span> and see the services</h2>
        </div>
        <div class="row">
            <!-- single service -->
            <?php
            // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = [
                'post_type' => 'services',
                'posts_per_page' => 9,
                'paged' => $paged,
                // 'category_name' => 'service'
            ];
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post(); ?>

                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="<?php echo get_post_meta(get_the_ID(), 'icon', true); ?>"></i>
                        </div>
                        <div class="service-text">
                            <h2>
                                <?php the_title(); ?>
                            </h2>
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endwhile;
        echo paginate_links([
            'total' => $query->max_num_pages,
        ]);


        ?>

        </div>

    </div>
</div>
<!-- services section end -->


<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>Get in <span>the Lab</span> and discover the world</h2>
        </div>
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>Get in the lab</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                    <div class="icon">
                        <i class="flaticon-002-caliper"></i>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>Projects online</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                    <div class="icon">
                        <i class="flaticon-019-coffee-cup"></i>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>SMART MARKETING</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                    <div class="icon">
                        <i class="flaticon-020-creativity"></i>
                    </div>
                </div>
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="<?php echo get_template_directory_uri() ?>/img/device.png" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                <div class="icon-box light">
                    <div class="icon">
                        <i class="flaticon-037-idea"></i>
                    </div>
                    <div class="service-text">
                        <h2>Get in the lab</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light">
                    <div class="icon">
                        <i class="flaticon-025-imagination"></i>
                    </div>
                    <div class="service-text">
                        <h2>Projects online</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light">
                    <div class="icon">
                        <i class="flaticon-008-team"></i>
                    </div>
                    <div class="service-text">
                        <h2>SMART MARKETING</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt100">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->


<!-- services card section-->
<div class="services-card-section spad">
    <div class="container">
        <div class="row">
            <!-- Single Card -->
            <div class="col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/card-1.jpg" alt="">
                    </div>
                    <div class="card-text">
                        <h2>Get in the lab</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
            <!-- Single Card -->
            <div class="col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/card-2.jpg" alt="">
                    </div>
                    <div class="card-text">
                        <h2>Projects online</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
            <!-- Single Card -->
            <div class="col-md-4 col-sm-12">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/card-3.jpg" alt="">
                    </div>
                    <div class="card-text">
                        <h2>SMART MARKETING</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services card section end-->


<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <form class="nl-form">
                    <input type="text" placeholder="Your e-mail here">
                    <button class="site-btn btn-2">Newsletter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->


<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container" id="contact-row">
        <div class="row">
            <!-- contact info -->
            <?php get_template_part('templates/contact-info'); ?>

            <!-- contact form -->
            <?php get_template_part('templates/mail'); ?>

            <!-- end mail -->
        </div>
    </div>
</div>
<!-- Contact section end-->


<!-- Footer section -->
<?php get_footer(); ?>