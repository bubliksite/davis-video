$(window).on('DOMContentLoaded', function () {
    var $preloader = $('.loaderArea'),
        $spinner   = $preloader.find('.loader');
    $spinner.fadeOut('slow');
    $preloader.delay(350).fadeOut('slow');
});