<!-- footer -->

<?php
$menuList = get_nav_menu_locations();
$idMenuTheme = $menuList['footer-menu'];
$menuLinks = wp_get_nav_menu_items($idMenuTheme);
?>
<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
            © 2017 Copyright <a class="grey-text text-darken-4" href="#">Envol-Crea</a>
            <?php
            foreach ($menuLinks as $link):
                ?>
                <a class="grey-text text-lighten-4 right lienSeparatorFooterSpace"
                   href="<?= $link->url ?>"><?= $link->title ?></a>
            <?php endforeach; ?>

        </div>
    </div>
</footer>


<!-- Modal Structure -->

<?php
$idPage = get_theme_mod('section_footerpage');
$page = get_post($idPage);
?>
<div id="mentions_legales" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4><?= $page->post_title ?></h4>
        <?= $page->post_content ?>
    </div>
    <div class="modal-footer">
        <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat ">Fermer</a>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>

<!-- fin footer -->