<?php get_header(); ?>

</header>
<!-- Header section end -->
<?php
function sanitize($items)
{
    // $items = strip_tags($items);
    $items = trim($items);
    $items = stripslashes($items);
    $items = htmlspecialchars($items);
    return $items;
}
?>

<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2><?php echo get_the_title(); ?></h2>
            <div class="page-links">
                <a href="http://localhost/LABS-project/">Home</a>
                <span><?php echo get_the_title(); ?></span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end -->


<!-- Google map -->
<div class="map">
    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=<?= urlencode(get_theme_mod('map-content')); ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" height="800" width="100%"></iframe>
</div>
<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container" id="contact-row">
        <div class="row">
            <!-- contact info -->
            <?php get_template_part('templates/contact-info'); ?>
            <!--/////////////////////// contact form :::::::::::::::::::::::::::::::::-->
            <?php get_template_part('templates/mail'); ?>
        </div>
    </div>
</div>
<!-- Contact section end-->


<!-- Footer section -->
<?php get_footer(); ?>