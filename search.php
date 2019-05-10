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
                <div class="blog-posts">
                    <?php if (have_posts()) { ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <!-- Post item -->
                            <div class="post-item">
                                <div class="post-thumbnail">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                    <div class="post-date">
                                        <h2><?= get_the_date("j"); ?></h2>
                                        <h3><?= get_the_date("F Y"); ?></h3>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <h2 class="post-title"><?= the_title(); ?></h2>
                                    <div class="post-meta">
                                        <a href=""><?= the_author(); ?></a>
                                        <a href="">
                                            <!-- ici la boucle-->
                                            <?php
                                            $tags = get_tags();
                                            foreach ($tags as $tag) : ?>
                                                <a href=""><?php echo $tag->name; ?></a>
                                            <?php endforeach;
                                        ?>
                                        </a>
                                        <a href=""><?= get_comments_number() . 'Comments'; ?></a>
                                    </div>
                                    <p><?= the_excerpt(); ?></p>
                                    <a href="<?= the_permalink(get_the_ID()) ?>" class="read-more">Read More</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php } else { ?>
                        <h2 style='font-weight:bold;color:#000'>Aucun Resultat</h2>
                        <div class="alert alert-warning" style="margin-top: 5%">
                            <p>Désolé, nous n'avons rien trouvé, nous vous invitons à faire une recherche valide</p>
                        </div>


                    <?php }; ?>
                </div>
            </div>
            <!-- Sidebar area -->
        </div>
    </div>
</div>
<!-- page section end-->


<?php get_template_part('templates/newsletter'); ?>
<!-- newsletter section end-->


<!-- Footer section -->
<?php get_footer(); ?>