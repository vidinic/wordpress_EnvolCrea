<!-- slide 1 -->
<?php get_header();
?>
<section class="container" id="accueil">
    <div id="background" style="background-image: url('<?= wp_get_attachment_image_src(get_theme_mod('section_headerheader'), 'full')[0] ?>')"></div>
    <div class="row">
        <div class="col m12">
            <div class=" row">
                <div class="col m12 center-align">
                    <img class="responsive-img" id="logo"
                         src="<?= wp_get_attachment_image_src(get_theme_mod('section_headerheader1'), 'full')[0] ?>">
                </div>
                <div class="row">
                    <div class="col m12 center-align">
                        <h1 class="titre"><?= get_theme_mod('section_headertexte1') ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section en suspend
<section class="container" id="web">
    <div class="row">
        <h1 class="col m12 center-align">Web</h1>
    </div>
    <div class="row">
        <div class="col m12">
            <p class="light"><?= get_theme_mod('section_webparaph1') ?></p>
        </div>
    </div>
</section>

<div class="parallax-container">
    <div class="parallax"><img
                src="<?= wp_get_attachment_image_src(get_theme_mod('section_parallaxparallax1'), 'full')[0] ?>"
                class="responsive-img"></div>
</div>
 section en suspend -->
<section class="container" id="présentation">
    <div class="row">
        <h1 class="col m12 center-align">Présentation</h1>
    </div>
    <div class="row">
        <div class="col m4">
            <img src="<?= wp_get_attachment_image_src(get_theme_mod('section_presentationimage'))[0] ?>"
                 class="circle responsive-img">
        </div>
        <div class="col m8">
            <p class="light"><?= get_theme_mod('section_presentationparaph1') ?></p>
        </div>
    </div>
</section>

<div class="parallax-container">
    <div class="parallax"><img
                src="<?= wp_get_attachment_image_src(get_theme_mod('section_parallaxparallax2'), 'full')[0] ?>"
                class="responsive-img"></div>
</div>

<section class="container" id="services">
    <div class="row">
        <h1 class="col m12 center-align">Services</h1>
    </div>
    <div class="row">
        <div class="col m4">
            <div class="icon-block">
                <h2 class="center grey-text"><i class="material-icons">code</i></h2>
                <h5 class="center"><?= get_theme_mod('section_servicestexte1') ?></h5>
                <p class="center-align light"><?= get_theme_mod('section_servicesparaph1') ?></p>
            </div>
        </div>
        <div class="col m4">
            <div class="icon-block">
                <h2 class="center grey-text"><i class="material-icons">group</i></h2>
                <h5 class="center"><?= get_theme_mod('section_servicestexte2') ?></h5>
                <p class="center-align light"><?= get_theme_mod('section_servicesparaph2') ?></p>
            </div>
        </div>
        <div class="col m4">
            <div class="icon-block">
                <h2 class="center grey-text"><i class="material-icons">location_on</i></h2>
                <h5 class="center"><?= get_theme_mod('section_servicestexte3') ?></h5>
                <p class="center-align light"><?= get_theme_mod('section_servicesparaph3') ?></p>
            </div>
        </div>
    </div>
</section>
<div class="parallax-container">
    <div class="parallax"><img
                src="<?= wp_get_attachment_image_src(get_theme_mod('section_parallaxparallax3'), 'full')[0] ?>"
                class="responsive-img"></div>
</div>

<section class="container" id="contact">
    <div class="row">
        <h1 class="col m12 center-align">Contact</h1>
    </div>
    <div class="row">
        <div class="col m6">
            <ul>
                <br/>
                <li><?= get_theme_mod('section_contactnom_prenom') ?></li>
                <li><?= get_theme_mod('section_contacttelephone') ?></li>
                <a href="mailto:<?= get_theme_mod('section_contactemail') ?>"><?= get_theme_mod('section_contactemail') ?></a>
            </ul>
        </div>
        <div class="col m6">
            <p class="light"><?= get_theme_mod('section_contactparaph1') ?></p>
        </div>
    </div>
    <?= do_shortcode('[ninja_form id=1]') ?>
</section>

<?php get_footer(); ?>






















