<?php get_header(); ?>
</header>
<!-- Header section end -->


<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Blog</h2>
            <div class="page-links">
                <a href="#">Home</a>
                <span>Blog</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end-->


<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <?php while (have_posts()) : the_post(); ?>
                    <div class="single-post">
                        <div class="post-thumbnail">
                            <img src="<?= the_post_thumbnail_url(); ?>" alt="">
                            <div class="post-date">
                                <h2><?= get_the_date("j"); ?></h2>
                                <h3><?= get_the_date("F Y"); ?></h3>
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title"><?= the_title(); ?></h2>
                            <div class="post-meta">
                                <a href=""><?php the_author(); ?></a>
                                <?php $tags = get_the_tags();
                                if ($tags) :
                                    foreach ($tags as $tag) { ?>
                                        <a href="<?php echo get_tag_link($tag); ?>"><?php echo $tag->name ?></a>
                                    <?php }
                            endif; ?>
                                <a href=""><?php echo get_comments_number() . ' comments'; ?></a>
                            </div>
                            <p><?php echo the_content(); ?></p>

                        </div>
                        <!-- Post Author -->
                        <div class="author">
                            <div class="avatar">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/avatar/03.jpg" alt="">
                            </div>
                            <div class="author-info">
                                <h2><?php the_author(); ?><span>, Author</span></h2>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <!-- Post Comments -->
                    <?php
                    $postId = 'post_id=' . get_the_ID();
                    $comments = get_comments($postId);
                    ?>
                    <div class="comments">
                        <h2>Comments <?php echo get_comments_number(); ?></h2>
                        <ul class="comment-list">
                            <?php
                            global $wpdb;
                            ?>
                            <?php foreach ($comments as $comment) : ?>
                                <li>
                                    <div class="avatar">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/avatar/01.jpg" alt="">
                                    </div>
                                    <div class="commetn-text">
                                        <h3><?= $comment->comment_author ?> | <?= $comment->comment_date ?> | Reply</h3>
                                        <p><?php echo $comment->comment_content; ?></p>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php
                    // if (comments_open() || get_comments_number()) :
                    //     comments_template('/templates/comments.php');
                    // endif;
                    if (comments_open()) {
                        get_comments_number();
                        // comment_form();
                        comments_template('/templates/comment.php');
                    }
                    ?>
                    <!-- Commert Form -->


                </div>
            </div>
            <!-- Sidebar area -->
            <?php get_template_part('templates/sidebare'); ?>
        </div>
    </div>
</div>
<!-- page section end-->


<!-- newsletter section -->
<?php get_template_part('templates/newsletter'); ?>
<!-- newsletter section end-->


<!-- Footer section -->
<?php get_footer(); ?>