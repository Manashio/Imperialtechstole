(function ($) {
    'use strict';
    //-------------------------------
    // Loader
    //-------------------------------
    $(window).load(function () {
        if ($("#loader").length > 0)
        {
            $("#loader").delay(500).fadeOut("slow");
        }
    });
    //------------------------------------------------------
    // Revolution Slider
    //------------------------------------------------------
    if ($("#mainSlider").length > 0)
    {
        var revs;
        revs = $('.tp-banner1').revolution({
            delay: 3000,
            startheight: 413,	
            startwidth: 1200,
            hideThumbs: true,
            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 5,
            navigationStyle: "round",
            touchenabled: "on",
            onHoverStop: "on",
            navOffsetHorizontal: 0,
            navOffsetVertical: 20,
            shadow: 0,
            fullWidth: "of",
            fullScreen: "of"
        });

    }
    //------------------------------------------------------
    // Fun Facts Counter
    //------------------------------------------------------
    if ($(".funfactArea").length > 0)
    {
        $('.factDetails h2').appear(function () {
            var $this = $(this);
            $({Counter: 0}).animate({Counter: $this.text()},
            {
                duration: 4000,
                easing: 'swing',
                step: function () {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });
    }

    //-------------------------------------------------------
    // Background Video
    //-------------------------------------------------------
    var vid = document.getElementById("myVideo");
    function playPause() {
        if (vid.paused) {
            vid.play();
        }
        else {
            vid.pause();
        }
    }
    if ($('#myVideo').length > 0) {
        $('#playVideo').on('click', function (e) {
            e.preventDefault();
            $('#videoWrap').toggleClass('hasAfter');
            playPause();
            if ($(this).hasClass('playing'))
            {
                $(this).removeClass('playing').html('<i class="fa fa-caret-right"></i>');
                vid.pause();
            }
            else
            {
                $(this).addClass('playing').html('<i class="fa fa-pause"></i>');
                vid.play();
            }
        });
    }
    //-------------------------------------------------------
    // Back to top
    //-------------------------------------------------------
    if ($("#backto").length > 0)
    {
        $("#backto").on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, 1200);
        });
    }
    //-------------------------------------------------------
    // Light Gallery
    //-------------------------------------------------------
    if ($("#mixItem,#similarItem").length > 0)
    {
        $('#mixItem,#similarItem').lightGallery({
            selector: '.galHover',
            download: false,
            counter: false,
            thumbnail: true
        });
    }

    //========================
    // Blog pop up
    //========================
    if ($('.postPop').length > 0) {
        $('.postPop').magnificPopup({
            type: 'image',
            mainClass: 'mfp-with-zoom',
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out',
                opener: function (openerElement) {
                    return openerElement.next('img') ? openerElement : openerElement.find('img');
                }
            },
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1]
            }

        });
    }
    //=======================================================
    // Google Map
    //=======================================================
    if ($("#map").length > 0)
    {
        var map;
        map = new GMaps({
            el: '#map',
            lat: -34.8524646,
            lng: 138.6364991,
            scrollwheel: false,
            zoom: 16,
            zoomControl: false,
            panControl: false,
            streetViewControl: false,
            mapTypeControl: false,
            overviewMapControl: false,
            clickable: false
        });
        var styles =
                [
                    {featureType: "landscape", stylers: [{saturation: -100}, {lightness: 65}, {visibility: "on"}]},
                    {featureType: "poi", stylers: [{saturation: -100}, {lightness: 51}, {visibility: "simplified"}]},
                    {featureType: "road.highway", stylers: [{saturation: -100}, {visibility: "simplified"}]},
                    {featureType: "road.arterial", stylers: [{saturation: -100}, {lightness: 30}, {visibility: "on"}]},
                    {featureType: "road.local", stylers: [{saturation: -100}, {lightness: 40}, {visibility: "on"}]},
                    {featureType: "transit", stylers: [{saturation: -100}, {visibility: "simplified"}]},
                    {featureType: "administrative.province", stylers: [{visibility: "off"}]},
                    {featureType: "administrative.locality", stylers: [{visibility: "off"}]},
                    {featureType: "administrative.neighborhood", stylers: [{visibility: "on"}]},
                    {featureType: "water", elementType: "labels", stylers: [{visibility: "on"}, {lightness: -25}, {saturation: -100}]},
                    {featureType: "water", elementType: "geometry", stylers: [{hue: "#ffff00"}, {lightness: -25}, {saturation: -97}]}
                ];
        map.addStyle({
            styledMapName: "Styled Map",
            styles: styles,
            mapTypeId: "map_style"
        });

        map.setStyle("map_style");
        // Image of toogle
        var image = 'images/pointer.png';
        map.addMarker({
            lat: -34.8524646,
            lng: 138.6364991,
            icon: image,
            animation: google.maps.Animation.BOUNCE,
            infoWindow: {
                content: '<p>Your Company Info</p>'
            }
        });
    }
    //-----------------------------------
    //Fixed Header
    //-----------------------------------
    if ($(".navMenu").length > 0) {
        $(window).on('scroll', function () {
            if ($(window).scrollTop() > 200)
            {
                $(".navMenu").addClass('fixedMenu animated fadeInDown');
            }
            else
            {
                $(".navMenu").removeClass('fixedMenu animated fadeInDown');
            }
        });
    }
    //-----------------------------------
    // Mobile Menu
    //-----------------------------------
    if ($('.toggleBtn').length > 0) {
        $('.toggleBtn').on('click', function () {
            $(this).toggleClass('active');
            $('.mainMenu').slideToggle();
        });
    }
    if ($(window).width() < 767) {
        $('.menu-has-children > a').on('click', function (e) {
            e.preventDefault();
            $(this).next('ul').slideToggle();
        });
        $(document).on('click', function (e) {
            e.stopPropagation();
            var container = $(".navMenu");
            if (container.has(e.target).length === 0) {
                $('.mainMenu,.subMenu').slideUp();
            }
        });
    }

    //-----------------------------------
    // Search
    //-----------------------------------
    if ($('.searchIcon').length > 0) {
        $('.searchIcon > a').on('click', function (e) {
            e.preventDefault();
            $('.searchArea').fadeIn(300);
        });
        $('#searchClose').on('click', function (e) {
            e.preventDefault();
            $('.searchArea').fadeOut(300);
        });
        $(document).on('click', function (e) {
            e.stopPropagation();
            var container = $(".navMenu");
            if (container.has(e.target).length === 0) {
                $('.searchArea').fadeOut(300);
            }
        });
    }
    //-----------------------------------
    // Subscribe Form
    //-----------------------------------
    if ($(".subscribeForm").length > 0)
    {
        $(".subscribeForm").submit(function (e) {
            e.preventDefault();
            $(".subscribeForm button").html('Success!');
            var email = $(".subscribeForm input").val();
            if (email !== '')
            {
                $(".subscribeForm input").removeClass('required-this');
                $.ajax({
                    type: "POST",
                    url: 'subscribe.php',
                    data: {email: email},
                    success: function (data)
                    {
                        $(".subscribeForm input").val('');
                        $(".subscribeForm input").attr('placeholder', 'Successfully Done!');
                    }
                });
            }
            else
            {
                $(".subscribeForm input").addClass('required-this');
                $(".subscribeForm button").html('SUBSCRIBE');
            }
            return false;
        });

    }
    //-----------------------------------
    // Contact
    //-----------------------------------
    if ($(".commentForm").length > 0)
    {
        $(".commentForm").on('submit', function (e) {
            e.preventDefault();
            var allData = $(this).serialize();
            var required = 0;
            $(".fillIt", this).each(function () {
                if ($(this).val() == '')
                {
                    $(this).addClass('required-this');
                    required += 1;
                }
                else
                {
                    if ($(this).hasClass('required-this'))
                    {
                        $(this).removeClass('required-this');
                        if (required > 0)
                        {
                            required -= 1;
                        }
                    }
                }
            });
            //alert(required);
            if (required === 0)
            {
                $(".submitButton button").html('Sending...');
                $.ajax({
                    type: "POST",
                    url: 'mail.php',
                    data: {allData: allData},
                    success: function (data)
                    {
                        $(".commentForm input, .commentForm textarea").val('');
                    }
                });
            }
            else
            {
                $(".commentForm button").html('post comment');
            }
        });
    }
    //------------------------
    // WOW js
    //------------------------
    if ($(window).width() > 490)
    {
        var wow = new WOW({
            mobile: false
        });
        wow.init();
    }

})(jQuery);