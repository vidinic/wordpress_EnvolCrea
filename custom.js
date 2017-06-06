jQuery(document).ready(function () {
    jQuery('.parallax').parallax();
    jQuery('.modal').modal();
});

jQuery('.js-scrollTo').on('click', function () { // Au clic sur un élément
    var slide = jQuery(this).attr('href'); // Page cible
    var speed = 1500; // Durée de l'animation (en ms)
    var selector = jQuery(slide);
    var toSub = 0;
    if(selector.offset().top - 64 <= 0){
        toSub = 100;
    }

    jQuery('html, body').animate({
        scrollTop: jQuery(slide).offset().top - toSub
    }, speed); // Go
    return false;

    /* modal mentions légales */

    jQuery('#modal1').modal('open');
    jQuery('#modal1').modal('close');
});



