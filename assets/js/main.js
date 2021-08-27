jQuery(document).ready(function() {

    jQuery(document).find('.nav-item > a').first().addClass('active');
    // jQuery('html, body').animate({scrollTop: 0}, 500);

    jQuery('#countdown-show').countdown('2021/09/14', function(event) {
        jQuery(this).find('.days > .number').text(event.strftime('%D'));
        jQuery(this).find('.hours > .number').text(event.strftime('%H'));
        jQuery(this).find('.minutes > .number').text(event.strftime('%M'));
        jQuery(this).find('.seconds > .number').text(event.strftime('%S'));
    });

    jQuery(document).find('.nav-item > a').on('click', function() {
        jQuery(document).find('.nav-item > a').removeClass('active');
        jQuery(this).addClass('active');
    });

    jQuery(document).find('#slick').slick();
    jQuery(document).find('#live-slides').slick();

    jQuery(document).find('.nav-link').on('click', function() {
        if(window.innerWidth <= 768) {
            return new bootstrap.Collapse('.collapse');
        };
    });

});