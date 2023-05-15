<footer class="footer">
    <hr>
    <div class="container">
        <div class="container-footer">
            <p class="copyright">Tous droits réservés. <?php echo get_bloginfo('name') . " " . date('Y'); ?></p>

            <div class="d-flex just-end">
                <a class="redsocial" href="https://www.facebook.com/profile.php?id=100063516312585&sk=photos&locale=fr_FR">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="facebook">
                </a>
                <a class="redsocial" href="https://www.instagram.com/sigra.lsfb_asbl/?hl=fr">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="instagram">
                </a>
            </div>
        </div>

    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>