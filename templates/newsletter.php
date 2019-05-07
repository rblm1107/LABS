<div class="newsletter-section spad" id="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                <?php if (isset($_SESSION['notice'])) : ?>
                    <?php
                    // on récupère les variables de session et on les stocks dans des variables plus simple à utiliser
                    $status = $_SESSION['notice']['status'];
                    $message = $_SESSION['notice']['message'];
                    ?>
                    <div class="notice notice-<?= $status; ?> is-dismissible">
                        <p><?= $message; ?></p>
                    </div>
                    <?php
                    // on supprime la notification des variables de sessions afin qu'elle ne s'affiche plus au rechargement de la page
                    unset($_SESSION['notice']);
                    ?>
                <?php endif; ?>
                <!-- newsletter form -->

                <form class="nl-form" action="<?= get_admin_url() . '/?action=send-newsletter'; ?>#newsletter" method="post">
                    <input type="text" placeholder="Your e-mail here" value="<?= $_SESSION['old']['email']; ?>">
                    <button class="site-btn btn-2">Newsletter</button>
                    <?php wp_nonce_field('send-newsletter'); ?>
                </form>
            </div>
        </div>
    </div>
</div>