<?php get_header(); ?>
</header>
<!-- Header section end -->


<!-- Page header -->
<?php get_template_part('templates/banner'); ?>
<!-- Page header end-->


<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Post item -->
                <?php
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'category_name' => 'post'
                ];
                $query = new WP_Query($args);
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="post-item">
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                            <div class="post-date">
                                <h2><?php echo get_the_date('d'); ?></h2>
                                <h3><?php echo get_the_date('F Y'); ?></h3>
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title"> <?php the_title(); ?></h2>
                            <div class="post-meta">
                                <a href=""><?php the_author(); ?></a>
                                <?php $tags = get_the_tags();
                                if ($tags) :
                                    foreach ($tags as $tag) { ?>
                                        <a href="<?php echo get_tag_link($tag); ?>"><?php echo $tag->name ?></a>
                                    <?php }
                            endif; ?>
                                <a href=""> <?php echo get_comments_number() . ' comments'; ?></a>
                            </div>
                            <p> <?php the_excerpt(); ?></p>
                            <a href="<?= the_permalink(); ?>" class="read-more">Read More</a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- Pagination -->
                <!-- <div class="page-pagination">
                    <a class="active" href="">01.</a>
                    <a href="">02.</a>
                    <a href="">03.</a>
                </div> -->
                <?php echo paginate_links([
                    'total' => $query->max_num_pages,
                ]); ?>


            </div>
            <!-- Sidebar area -->

            <?php
            dynamic_sidebar("sidebar");
            get_template_part('templates/blogsidebar');
            ?>
        </div>
    </div>
</div>
<!-- page section end-->


<!-- newsletter section -->
<?php get_template_part('templates/newsletter'); ?>

<!-- newsletter section end-->


<!-- Footer section -->
<?php get_footer(); ?>