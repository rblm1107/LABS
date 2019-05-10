<div class="col-md-6 col-pull">

    <!-- On vérifie si une notification existe en variable de session -->
    <?php if (isset($_SESSION['noticeMail'])) : ?>
        <?php
        // on récupère les variables de session et on les stocks dans des variables plus simple à utiliser
        $status = $_SESSION['noticeMail']['status'];
        $message = $_SESSION['noticeMail']['message'];
        ?>
        <div class="notice notice-<?= $status; ?> is-dismissible">
            <p><?= $message; ?></p>
        </div>
        <?php
        // on supprime la notification des variables de sessions afin qu'elle ne s'affiche plus au rechargement de la page
        unset($_SESSION['noticeMail']);
        ?>
    <?php endif; ?>


    <form class="form-class" id="con_form" action="<?= admin_url('admin-post.php'); ?>#contact-row" method="post">
        <?php wp_nonce_field('send-mail'); ?>
        <input type="hidden" name="action" value="send-mail">
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
                <p><?php echo $_SESSION['noticeMail']['status']; ?></p>
            </div>

        </div>
        <?php wp_nonce_field('send-mail'); ?>
    </form>
</div>