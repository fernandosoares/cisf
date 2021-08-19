jQuery(document).ready(function() {
    jQuery('#main').countdown('2021/08/20', function(event) {
        jQuery(this).text(event.strftime('%D dias %H %M %S'));
    })
})