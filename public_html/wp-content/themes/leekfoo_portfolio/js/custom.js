jQuery(function() {
  jQuery("#navbutton").click(function() {
      jQuery(".header-nav-wrap").slideToggle();
  });
});

AOS.init({
    offset: 300,
    duration: 1000,
    once: true,
});

jQuery( document ).ready(function() {
    // initialize
    jQuery('.sidenav').sidenav();
    jQuery('.collapsible').collapsible();
    jQuery('.modal').modal({
        // endingTop: '5%'
    });

    // ページトップへ戻るボタン
    const pagetop = jQuery('.scroll_button');
    pagetop.hide();
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    // スクロールアニメーション
    jQuery('a[href^="#"]').click(function() {
        const speed = 600;
        const href= jQuery(this).attr("href");
        const target = jQuery(href == "#" || href == "" ? 'html' : href);
        const offset = href == "#" ? 0 : jQuery("nav").height();
        const position = target.offset().top - offset;
        jQuery('body,html').animate({scrollTop:position}, speed, 'easeInCubic');
    });


    jQuery('.modal-trigger').click(function() {
        const targetName = '#' + jQuery(this).attr('data-target');
        jQuery(targetName + ' .modal_images').slick({
            dots:true,
            // asNavFor: targetName + ' .modal_thumbs',
            customPaging: function(slick,index) {
                var targetImage = slick.$slides.eq(index).find('img').attr('src');
                return '<img src=" ' + targetImage + ' "/>';
            }
        });
    });

    anime.timeline({
        easing: 'easeInOutSine',
    })
    .add({
        targets: '.line_draw .lines path',
        strokeDashoffset: [anime.setDashoffset, 0],
        // easing: 'easeInOutSine',
        duration: 1000,
        delay: function(el, i) { return i * 500 },
        direction: 'alternate',
        loop: false,
    })
    .add({
        targets: '.line_draw .lines path',
        duration: 500,
        fill: '#fff',
        begin: function() {
            jQuery(".line_draw .lines path").css('stroke', 'transparent');
        }
    })
    .add({
        targets: '#top_title h5',
        duration: 500,
        opacity: 500,
        begin: function() {
            jQuery("#top_title h5").css('visibility', 'visible');
        }
    });
});