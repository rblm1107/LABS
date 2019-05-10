<?php get_header(); ?>
</header>
<!-- Header section end -->


<!-- Page header -->
<?php get_template_part('templates/banner'); ?>
<!-- Page header end-->


<!-- services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark" id="services">
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
                <?php
                $args = [
                    'post_type' => 'project',
                    'posts_per_page' => 3,
                    'orderby'        => 'rand',

                ];
                $query = new WP_Query($args);
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="icon-box light left">
                        <div class="service-text">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                        <div class="icon">
                            <i class="<?php echo get_post_meta(get_the_ID(), 'icon', true); ?>"></i>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- feature item -->
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="<?php echo get_template_directory_uri() ?>/img/device.png" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                <?php
                $args = [
                    'post_type' => 'project',
                    'posts_per_page' => 3,
                    'orderby'        => 'rand',

                ];
                $queryb = new WP_Query($args);
                while ($queryb->have_posts()) : $queryb->the_post(); ?>
                    <div class="icon-box light">
                        <div class="icon">
                            <i class="<?php echo get_post_meta(get_the_ID(), 'icon', true); ?>"></i>
                        </div>
                        <div class="service-text">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="text-center mt100">
            <a href="<?php get_template_directory_uri() . '/LABS-project/services/'; ?>#projects" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->


<!-- services card section-->
<div class="services-card-section spad" id="projects">
    <div class="container">
        <div class="row">
            <!-- Single Card -->
            <?php
            $args = [
                'post_type' => 'project',
                'posts_per_page' => 3,


            ];
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-md-4 col-sm-6">
                    <div class="sv-card">
                        <div class="card-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="card-text">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </div>
</div>
<!-- services card section end-->


<!-- newsletter section -->
<?php get_template_part('templates/newsletter'); ?>
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