var Layout = function () {
    
    // detect mobile device
    var isMobileDevice = function() {
        return  ((
            navigator.userAgent.match(/Android/i) ||
            navigator.userAgent.match(/BlackBerry/i) ||
            navigator.userAgent.match(/iPhone|iPad|iPod/i) ||
            navigator.userAgent.match(/Opera Mini/i) ||
            navigator.userAgent.match(/IEMobile/i)
        ) ? true : false);
    }

    // handle on page scroll
    var handleHeaderOnScroll = function() {
        if (jQuery(window).scrollTop() > 60) {
            jQuery("body").addClass("page-on-scroll");
        } else {
            jQuery("body").removeClass("page-on-scroll");
        }
    }

    var handleHeaderFixed = function () {
        //jQuery to collapse the navbar on scroll
        jQuery(window).scroll(function() {
            if (jQuery(".navbar").offset().top > 50) {
                jQuery(".navbar").addClass("top-nav-collapse");
            } else {
                jQuery(".navbar").removeClass("top-nav-collapse");
            }
        });

        //jQuery for page scrolling feature - requires jQuery Easing plugin
        jQuery(function() {
            var padding = 70;

            jQuery('.page-scroll a').on('click', function(event) {
                var jQueryanchor = jQuery(this);
                jQuery('html, body').stop().animate({
                    scrollTop: jQuery(jQueryanchor.attr('href')).offset().top - padding
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });
        });
 
        //Collapse Navbar When It's Clickicked
        jQuery('.navbar-nav li a, .navbar-brand').on("click", function(event) {
            jQuery(".navbar-collapse.in").collapse('hide');
        });
    }

    var handleParallax = function () {
        jQuery(document).ready(function() {
            jQuery('.parallax').parallax("50%", 0.4);
        })  
    }

    var handleOWL = function () {
        
        var handleActiveSlide = function(type) {            
            var item = jQuery('.owl-carousel .owl-item.center').find('.item');
            var quotaId = item.attr('data-quote');

            jQuery('.client-quote.active').removeClass('active');
            jQuery(quotaId).addClass('active');
        }

        var logos = jQuery(".owl-carousel").owlCarousel({
            pagination: false,
            navigation: false,
            items: 7,
            margin: 0,
            center: true,
            autoplay: true,
            loop: true,
            stopOnHover: true,
            slideSpeed: 400,
            addClassActive: true,
            rewindNav: false,
            touchDrag: true,
            mouseDrag: true,
            responsive : {
                0    : { items: 1},
                320  : { items: 1},
                480  : { items: 1},
                700  : { items: 3},
                975  : { items: 5},
                1200 : { items: 7},
                1400 : { items: 7},
                1600 : { items: 7}
            },
            onTranslated    : function(el) {
                handleActiveSlide('change');
            },
            onInitialized  : function(el) {
                handleActiveSlide('init');
            }
        });
    }

    // handle go to top button
    var handleGo2Top = function () {       
        var Go2TopOperation = function(){
            var CurrentWindowPosition = jQuery(window).scrollTop();// current vertical position
            if (CurrentWindowPosition > 300) {
                jQuery(".go2top").show();
            } else {
                jQuery(".go2top").hide();
            }
        };

        Go2TopOperation();// call headerFix() when the page was loaded
        if (navigator.userAgent.match(/iPhone|iPad|iPod/i)) {
            jQuery(window).bind("touchend touchcancel touchleave", function(e){
                Go2TopOperation();
            });
        } else {
            jQuery(window).scroll(function() {
                Go2TopOperation();
            });
        }

        jQuery(".go2top").click(function(e) {
            e.preventDefault();
             jQuery("html, body").animate({ scrollTop: 0 }, 600);
        });
    }

    var handleScrollspy = function() {
        var scrollspy = jQuery('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        // fix active class on page load
        setTimeout(function() {
            jQuery(window).scroll();
        }, 1000);       
    }

    return {
        init: function () {
            // handle go to top button
            handleGo2Top();

            // initial setup for fixed header
            handleHeaderOnScroll();

            // animated navbar toggle
            handleHeaderFixed();

            // Parallax background
            handleParallax();

            // Owl Carousel
            handleOWL();

            // Handle one page scrollspy
            handleScrollspy();

            // handle minimized header on page scroll
            jQuery(window).scroll(function() {
                handleHeaderOnScroll();
                handleHeaderFixed();
                handleParallax();
                handleOWL();
            });
        },

        // To get the correct viewport width based on  http://andylangton.co.uk/articles/javascript/get-viewport-size-javascript/
        getViewPort: function() {
            var e = window,
                a = 'inner';
            if (!('innerWidth' in window)) {
                a = 'client';
                e = document.documentElement || document.body;
            }

            return {
                width: e[a + 'Width'],
                height: e[a + 'Height']
            };
        },
    };
}();

