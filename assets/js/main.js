jQuery(document).on('ready', function ($) {
    "use strict";

    /*--------------------------
        SCROLLSPY ACTIVE
    ---------------------------*/
    $('body').scrollspy({
        target: '.bs-example-js-navbar-scrollspy',
        offset: 65
    });


    /*--------------------------
        STICKY MAINMENU
    ---------------------------*/
    $("#mainmenu-area").sticky({
        topSpacing: 0
    });


    /*-----------------------------
        SLIDER ACTIVE
    ------------------------------*/
    var mySlider = $('.pogoSlider').pogoSlider({
        pauseOnHover: false,
        autoplay: false
    }).data('plugin_pogoSlider');


    /*---------------------------
        SMOOTH SCROLL
    -----------------------------*/
    $('ul#nav li a[href^="#"],a.navbar-brand,.slider-area h3 a,a.scrolltotop,.home-slider-button a').on('click', function (event) {
        var id = $(this).attr("href");
        var offset = 40;
        var target = $(id).offset().top - offset;
        $('html, body').animate({
            scrollTop: target
        }, 1500, "easeInOutExpo");
        event.preventDefault();
    });


    /*----------------------------
        SCROLL TO TOP
    ------------------------------*/
    $(window).scroll(function () {
        var totalHeight = $(window).scrollTop();
        if (totalHeight > 300) {
            $(".scrolltotop").fadeIn();
        } else {
            $(".scrolltotop").fadeOut();
        }
    });


    /*---------------------------
        COUNTER UP TIMER
    -----------------------------*/
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });


    /*---------------------------
        SCREENSHOT SLIDER
    -----------------------------*/
    $('.screenshot-slider').owlCarousel({
        merge: true,
        video: true,
        smartSpeed: 1000,
        loop: true,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        autoplay: true,
        autoplayTimeout: 2000,
        margin: -80,
        center: true,
        responsiveClass: true,
        responsive: {
            0: {
                margin: 10,
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                margin: -20,
                items: 3
            }
        }
    });


    /*---------------------------
        SCREENSHOT SLIDER
    -----------------------------*/
    $('.testmonial-slider').owlCarousel({
        merge: true,
        video: true,
        smartSpeed: 1000,
        loop: true,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        autoplay: false,
        autoplayTimeout: 2000,
        margin: 0,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
    });


    /*----------------------------
        PRICE TABLE ACTIVE
    -----------------------------*/
    $('.single-price').on('hover', function (e) {
        $('.single-price').removeClass('active');
        var $this = $(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        e.preventDefault();

    });


    /*----------------------------
        VIDEO AREA PLAY PAUSE BUTTON
    ------------------------------*/
    var vid = document.getElementById("bgvid");
    var pauseButton = document.querySelector(".video-area button");

    vid.addEventListener('ended', function () {
        // only functional if "loop" is removed 
        vid.pause();
        // to capture IE10
        vidFade();
    });

    pauseButton.addEventListener("click", function () {
        if (vid.paused) {
            vid.play();
            pauseButton.innerHTML = "<i class='fa fa-pause'> </i>";
            $(".video-area").addClass("palying");
        } else {
            vid.pause();
            pauseButton.innerHTML = "<i class='fa fa-play'></i>";
            $(".video-area").removeClass("palying");
        }
    });


    /*--------------------------
        ACTIVE WOW JS
    ----------------------------*/
    new WOW().init();

}(jQuery));



jQuery(window).load(function () {
    /*--------------------------
        PRE LOADER
    ----------------------------*/
    $(".preeloader").fadeOut(1000);
});