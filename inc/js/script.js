jQuery(document).ready(function ($) {


    $('#layla-featured .featured-box').click(function () {

        window.location.href = $(this).attr('data-target');

    });


    $('.featured-box').hover(function () {

        $('.layla-icon', this).stop(true, false).animate({
            top: '-7px'

        }, 300);
        $('.layla-desc', this).stop(true, false).animate({
            top: '7px'

        }, 300);

        $('.layla-title', this).stop(true, false).animate({
            'letter-spacing': '1.5px'

        }, 300);

    }, function () {
        $('.layla-icon', this).stop(true, false).animate({
            top: '0px'

        }, 300);
        $('.layla-desc', this).stop(true, false).animate({
            top: '0px'

        }, 300);
        $('.layla-title', this).stop(true, false).animate({
            'letter-spacing': '1px'

        }, 300);
    });


//    $('.layla-blog-content').imagesLoaded(function () {
//        $('.layla-blog-content').masonry({
//            itemSelector: '.layla-blog-post',
//            gutter: 0,
//            transitionDuration: 0,
//        }).masonry('reloadItems');
//    });

        $('#primary-menu').slicknav({
        prependTo: $('.layla-header-menu'),
        label: ''
    });

    $('.layla-search, #layla-search .fa.fa-close').click(function () {

        $('#layla-search').fadeToggle(449)

    });

    // Homepage Overlay
    $('#layla-overlay-trigger').click(function () {

        var selector = $('#layla-overlay-trigger');

        if (selector.hasClass('open')) {

            $('.overlay-widget').hide();
            selector.removeClass('open animated');

        } else {

            selector.addClass('open animated');
            $('.overlay-widget').fadeIn(330);
        }

    });

    // scroll to top trigger
    $('.scroll-top').click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });

    // scroll to top trigger
    $('.scroll-down').click(function () {

        $("html, body").animate({
            scrollTop: ($('#layla-featured-post').height() + 85 )
        }, 1000);

        return false;

    });


    // ------------
    var laylaWow = new WOW({
        boxClass: 'reveal',
        animateClass: 'animated',
        offset: 100

    });

    laylaWow.init();
    
    
});