jQuery(document).ready(function() {
    jQuery('#countdown').countdown('2021/08/20', function(event) {
        jQuery(this).find('.days > .number').text(event.strftime('%D'));
        jQuery(this).find('.hours > .number').text(event.strftime('%H'));
        jQuery(this).find('.minutes > .number').text(event.strftime('%M'));
        jQuery(this).find('.seconds > .number').text(event.strftime('%S'));
    });
});