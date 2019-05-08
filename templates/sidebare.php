<div class="col-md-4 col-sm-5 sidebar">
    <!-- Single widget -->
    <div class="widget-item">
        <?php get_search_link(); ?>
        <form action="#" class="search-form" action="<?= get_site_url(); ?>" method="get">
            <input type="text" placeholder="Search">
            <button class="search-btn"><i class="flaticon-026-search"></i></button>
        </form>
    </div>
    <!-- Single widget -->
    <div class="widget-item">
        <h2 class="widget-title">Categories</h2>
        <ul>
            <li><a href="#">Vestibulum maximus</a></li>
            <li><a href="#">Nisi eu lobortis pharetra</a></li>
            <li><a href="#">Orci quam accumsan </a></li>
            <li><a href="#">Auguen pharetra massa</a></li>
            <li><a href="#">Tellus ut nulla</a></li>
            <li><a href="#">Etiam egestas viverra </a></li>
        </ul>
    </div>
    <!-- Single widget -->
    <div class="widget-item">
        <h2 class="widget-title">Instagram</h2>
        <ul class="instagram">
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/1.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/2.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/3.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/4.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/5.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/6.jpg" alt=""></li>
        </ul>
    </div>
    <!-- Single widget -->
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
        <h2 class="widget-title">Quote</h2>
        <div class="quote">
            <span class="quotation">‘​‌‘​‌</span>
            <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
        </div>
    </div>
    <!-- Single widget -->
    <div class="widget-item">
        <h2 class="widget-title">Add</h2>
        <div class="add">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/add.jpg" alt=""></a>
        </div>
    </div>
</div>