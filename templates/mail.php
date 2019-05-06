<div class="col-md-6 col-pull">

    <!-- On vérifie si une notification existe en variable de session -->
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

    <form class="form-class" id="con_form" action="<?= get_admin_url() . '/?action=send-mail'; ?>#contact-row" method="post">
        <div class="row">

            <div class="col-sm-6">
                <input type="text" name="name" placeholder="Your name" value="<?= $_SESSION['old']['name']; ?>">
            </div>
            <div class="col-sm-6">
                <input type="text" name="email" placeholder="Your email" value="<?= $_SESSION['old']['email']; ?>">
            </div>
            <div class="col-sm-12">
                <input type="text" name="subjects" placeholder="Subject" value="<?= $_SESSION['old']['subjects']; ?>">
                <textarea name="message" placeholder="Message"><?= $_SESSION['old']['message']; ?></textarea>
                <button type="submit" class="site-btn">send</button>
                <p><?php echo $_SESSION['notice']['status']; ?></p>
            </div>

        </div>
        <?php wp_nonce_field('send-mail'); ?>
    </form>
</div>