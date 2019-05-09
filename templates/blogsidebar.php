<div class="col-md-4 col-sm-5 sidebar">

    <!-- Single widget form -->
    <div class="widget-item">
        <?php get_search_link(); ?>

        <?php get_template_part('templates/search', 'form'); ?>
    </div>
    <!-- Single widget categories -->
    <!-- Single widget quote-->
    <!-- Single widget tags-->
    <div class="widget-item">
        <h2 class="widget-title">Tags</h2>
        <ul class="tag">
            <?php
            $tags = get_tags();
            foreach ($tags as $tag) : ?>
                <li><a href=""><?php echo $tag->name; ?></a></li>
            <?php endforeach;
        ?>
        </ul>
    </div>
    <!-- Single widget -->
    <div class="widget-item">
        <h2 class="widget-title">Add</h2>
        <div class="add">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/add.jpg" alt=""></a>
        </div>
    </div>

</div>