<?php get_header(); ?>
</header>
<!-- Header section end -->


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
<div class="map" id="map-area"></div>


<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2><?= get_theme_mod('contact-us-titre'); ?></h2>
                </div>
                <p><?= get_theme_mod('contact-us-text'); ?></p>
                <h3 class="mt60"><?= get_theme_mod('contact-us-office'); ?></h3>
                <p class="con-item"><?= get_theme_mod('contact-us-adress'); ?><br><?= get_theme_mod('contact-us-city'); ?></p>
                <p class="con-item"><?= get_theme_mod('contact-us-phone'); ?></p>
                <p class="con-item"><?= get_theme_mod('contact-us-mail'); ?></p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form class="form-class" id="con_form">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->


<!-- Footer section -->
<?php get_footer(); ?>