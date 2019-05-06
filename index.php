<?php get_header();
// $carousel_title = get_theme_mod('titre-carousel');
$first_image = get_theme_mod('first-image');
$second_image = get_theme_mod('second-image');
?>


<!-- Header section end -->

<!-- FIN HEADER 
	============================================ -->

<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="<?= get_theme_mod('titre-big-logo'); ?>" alt="">
            <p><?= get_bloginfo('description'); ?></p>
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        <div class="item  hero-item" data-bg="<?= $first_image; ?>"></div>
        <div class="item  hero-item" data-bg="<?php echo $second_image; ?>"></div>
    </div>
</div>
<!-- Intro Section -->


<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single card -->
                <?php
                $args = [
                    'post_type' => 'services',
                    'posts_per_page' => 3,
                    // 'paged' => $paged,
                    // 'orderby'        => 'rand',
                ];
                $query = new WP_Query($args);
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="<?php echo get_post_meta(get_the_ID(), 'icon', true); ?>"></i>
                            </div>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </div>
    <!-- card section end-->
    <?php
    $titreBegin = get_theme_mod('titreBegin');
    $titreSpan = get_theme_mod('titreSpan');
    $titreEnd = get_theme_mod('titreEnd');
    $para1 = get_theme_mod('text-left');
    $para2 = get_theme_mod('text-right');
    $video = get_theme_mod('video');
    ?>

    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2><?= $titreBegin; ?> <span><?= $titreSpan; ?></span> <?= $titreEnd; ?></h2>
                <!-- <h2>Get in <span>the Lab</span> and discover the world</h2> -->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p><?= $para1; ?></p>
                </div>
                <div class="col-md-6">
                    <p><?= $para2; ?></p>
                </div>
            </div>
            <div class="text-center mt60">
                <a href="http://localhost/LABS-project/blog/" class="site-btn">View more</a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/video.jpg" alt="">
                        <!-- <a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup"> -->
                        <a href="<?= $video; ?>" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->

<?php
$titre_client_test = get_theme_mod('client-test-titre');
$slid1_text_left = get_theme_mod('slid1-text-left');
$client1_image = get_theme_mod('client1-image');
$slid1_left_person_name = get_theme_mod('slid1-left-person-name');
$slid1_left_person_info = get_theme_mod('slid1-left-person-info');
?>
<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2><?php echo $titre_client_test; ?></h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p><?= $slid1_text_left; ?></p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="<?php echo $client1_image; ?>" alt="">
                            </div>
                            <div class="client-name">
                                <h2><?= $slid1_left_person_name; ?></h2>
                                <p><?= $slid1_left_person_info; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p><?= get_theme_mod('slid1-text-right'); ?></p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="<?php echo get_theme_mod('client2-image'); ?>" alt="">
                            </div>
                            <div class="client-name">
                                <h2><?= get_theme_mod('slid1-right-person-name'); ?></h2>
                                <p><?= get_theme_mod('slid1-right-person-info'); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/avatar/02.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>Michael Smith</h2>
                                <p>CEO Company</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/avatar/01.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>Michael Smith</h2>
                                <p>CEO Company</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/avatar/01.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>Michael Smith</h2>
                                <p>CEO Company</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/avatar/02.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>Michael Smith</h2>
                                <p>CEO Company</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->


<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>Get in <span>the Lab</span> and see the services</h2>
        </div>
        <div class="row">
            <!-- single service -->
            <?php
            $args = [
                'post_type' => 'services',
                'posts_per_page' => 6,
                // 'paged' => $paged,
                'orderby'        => 'rand',
            ];
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post(); ?>

                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="<?php echo get_post_meta(get_the_ID(), 'icon', true); ?>"></i>
                        </div>
                        <div class="service-text">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="text-center">
            <a href="http://localhost/LABS-project/services/" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- services section end -->


<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>Get in <span>the Lab</span> and meet the team</h2>
        </div>
        <div class="row">

            <?php
            $args = [
                'post_type' => 'team',
                'posts_per_page' => 1,
                // 'paged' => $paged,
                'orderby' => 'rand',
            ];
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post(); ?>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <?php the_post_thumbnail(); ?>
                        <h2><?php the_title(); ?></h2>
                        <h3><?php the_content(); ?></h3>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/team/2.jpg" alt="">
                    <h2>Christinne Williams</h2>
                    <h3>Junior developer</h3>
                </div>
            </div>
            <!-- single member -->
            <?php
            $args = [
                'post_type' => 'team',
                'posts_per_page' => 1,
                // 'paged' => $paged,
                'orderby' => 'rand',
            ];
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-sm-4">
                    <div class="member">
                        <?php the_post_thumbnail(); ?>
                        <h2><?php the_title(); ?></h2>
                        <h3><?php the_content(); ?></h3>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<!-- Team Section end-->

<?php
$titre_promotion = get_theme_mod('titre-promotion');
$text_promotion = get_theme_mod('text-promotion');
?>
<!-- Promotion section -->
<div class="promotion-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2><?= $titre_promotion; ?></h2>
                <p><?= $text_promotion; ?></p>
            </div>
            <div class="col-md-3">
                <div class="promo-btn-area">
                    <a href="" class="site-btn btn-2">Browse</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Promotion section end-->


<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>Contact us</h2>
                </div>
                <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
                <h3 class="mt60">Main Office</h3>
                <p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
                <p class="con-item">0034 37483 2445 322</p>
                <p class="con-item">hello@company.com</p>
            </div>
            <!-- contact form -->
            <?php get_template_part('templates/mail'); ?>
        </div>
    </div>
</div>
<!-- Contact section end-->


<!-- Footer section -->
<?php get_footer(); ?>