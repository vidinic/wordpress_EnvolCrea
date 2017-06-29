<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <title>Envol-Crea</title>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <meta name="description" content="site Envol-Créa de Pauline Vidinic à Saint Pair Sur Mer dans la Manche. Développement web.">
    <meta name="keywords" content="développement, compétences, web, responsive, services, contact, Saint Pair Sur Mer, Manche.">
    <link rel="shortcut icon" src="<?php echo get_template_directory_uri()?>/img/logo_V.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Oregano" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php wp_head(); ?>


</head>

<!-- navigation -->
<?php
/**
 * Récupération du menu
 *
 * Récupere la liste des menus
 * Recupere l'id de notre menu
 * Recupere dans notre menu les liens
 */
$menuList = get_nav_menu_locations();
$idMenuTheme = $menuList['premier-menu'];
$menuLinks = wp_get_nav_menu_items($idMenuTheme);
?>
<body>
<div class="navbar-fixed">
    <nav class="blue darken-2" role="navigation">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo"><img src="<?= get_template_directory_uri()?>/img/logo_nav.png">EnvolCrea</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <?php
                /**
                 * Boucle sur tous les liens et on genere un <li>
                 *
                 * (<?= revient à faire un <?php echo )
                 * (Un foreach avec : ne s'utilise pas pareil que des accolades, il faut un endforeach;)
                 */
                foreach ($menuLinks as $link):
                    ?>
                    <li><a href="<?= $link->url ?>" class="js-scrollTo"><?= $link->title ?></a></li>
                    <?php
                endforeach;
                ?>
            </ul>
        </div>
    </nav>
</div>
            <ul class="side-nav blue darken-2" id="mobile-demo">
                <?php
                foreach ($menuLinks as $link):
                ?>
                <li><a href="<?= $link->url ?>" class="js-scrollTo"><?= $link->title ?></a></li>
                <?php
                endforeach;
                ?>
            </ul>
<!-- fin navigation -->
