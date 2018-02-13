jQuery(function () {

    if (jQuery('#content').length) {
        var msnyOptions = {
            itemSelector: '.post',
            percentPosition: true,
            columnWidth: '.post:not(.featured)'
        };

        var msnry = new Masonry('#content', msnyOptions);
    }

});

// jQuery(function () {
//     jQuery('.nav-bar__hamburger').click(function(){
//         jQuery(this).toggleClass('open');
//         jQuery('.site-nav').slideToggle();
//     });
//
//     jQuery('.three-column-grid').masonry({
//         gutter: 29,
//         itemSelector: '.grid-item',
//         columnWidth: '.grid-item--three-columns',
//         percentposition: true
//     });
//     jQuery('.two-column-grid').masonry({
//         gutter: 29,
//         itemSelector: '.grid-item',
//         columnWidth: '.grid-item--two-columns',
//         percentposition: true
//     });
//
// });

// Start Load More js
//-------------------------------------//
// init Masonry
// Very simple example.
// Probably you would want to use a
// full-featured plugin like
// https://github.com/infinite-scroll/infinite-scroll/blob/master/jquery.infinitescroll.js
//-------------------------------------//
// hack CodePen to load pens as pages

jQuery(function (){
    jQuery('.block:lt(8)').show();
    size_li = jQuery("#listBlock .block").size();
    x=30;
    jQuery('#listBlock:lt('+x+')').show();
    jQuery('#loadMore').click(function () {
        x= (x+30 <= size_li) ? x+30 : size_li;
        jQuery('.block:lt('+x+')').show();
    });
});
jQuery(function (){
    jQuery('#content').css({"height" : "0"});
    jQuery('.related').css({"display":"none"});
    jQuery('.related:lt(5)').css({"display":"block"});
    size_lii = jQuery("#content .related").size();
    x=20;
    jQuery('#content:lt('+x+')').css({"display":"block"});
    jQuery('#loadMore').click(function () {
        x= (x+20 <= size_lii) ? x+20 : size_lii;
        jQuery('.related:lt('+x+')').css({"display":"block"});
    });
});

$(document).ready(function () {
    if ($('#section .block:visible').length < 4) {
        $('#section #loadMore').hide();
    }
    if ($('#section1 .block:visible').length < 4) {
        $('#section1 #loadMore').hide();
    }
    $('#section #loadMore').click(function () {
        var numItems = $('.block:visible').length;
        if (numItems >= 8) {
            $('#section #loadMore').hide();
        }
    });

    $('#section1 #loadMore').click(function () {
        var numItems = $('#section1 .block:visible').length;
        if (numItems >= 8) {
            $('#section1 #loadMore').hide();
        }
    });
});

$(document).ready(function () {
    if ($('.single_container .post:visible').length < 5) {
        $('.single_container #loadMore').hide();
    }
    $('.single_container #loadMore').click(function () {
        var numItemss = $('.single_container .post:visible').length;
        if (numItemss > 15) {
            $('.single_container #loadMore').hide();
        }
    });
});

$(document).ready(function () {
    if ($('.single_container #content .related:visible').length <= 4) {
        $('.single_container #content #loadMore').hide();
    }
    $('.single_container #loadMore').click(function () {
        var numItemss = $('.single_container #content .related:visible').length;
        if (numItemss > 15) {
            $('.single_container #content #loadMore').hide();
        }
    });

    $('#carousel').elastislide();
});










//
// jQuery(window).scroll(function() {
//     if (jQuery(window).width() < 768){
//         if (jQuery(this).scrollTop()>0)
//         {
//             jQuery('.header-container').slideUp();
//             jQuery('.content').css({
//                 "margin-top": "109px"
//             });
//         }
//         else
//         {
//             jQuery('.header-container').slideDown();
//             jQuery('.content').css({
//                 "margin-top": "210px"
//             });
//         }
//     }
//     else
//     {
//         if (jQuery(this).scrollTop()>0)
//         {
//             jQuery('.header-container').slideUp();
//             jQuery('.content').css({
//                 "margin-top": "100px"
//             });
//         }
//         else
//         {
//             jQuery('.header-container').slideDown();
//             jQuery('.content').css({
//                 "margin-top": "300px"
//             });
//         }
//     }
//
// });
