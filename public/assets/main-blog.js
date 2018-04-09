(function ($) {
    "use strict";

    /* ---------------------------------------------
     NAVBAR SHRINK
     --------------------------------------------- */
    $(document).on('ready', function () {

        /* ---------------------------------------------
         JQUERY TO COLLAPSE THE NAVBAR ON SCROLL
         --------------------------------------------- */
        function onScrollCollapse() {
            $(window).on('scroll', function () {
                if ($(".navbar").offset().top > 50) {
                    $(".navbar-fixed-top").addClass("top-nav-collapse");
                } else {
                    $(".navbar-fixed-top").removeClass("top-nav-collapse");
                }
            });
        }


        /* ---------------------------------------------
         JQUERY FOR PAGE SCROLLING FEATURE - REQUIRES JQUERY EASING PLUGIN
         --------------------------------------------- */
        function smoothScroll() {
            $('a.page-scroll').on('click', function (event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: ($($anchor.attr('href')).offset().top - 52)
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });
        }

        /* ---------------------------------------------
         SCROLL TO TOP
         --------------------------------------------- */
        function scrollToTopInit() {
            $(window).on('scroll', function () {
                if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                    $('div#scroll-up').fadeIn();    // Fade in the arrow
                } else {
                    $('div#scroll-up').fadeOut(400);
                }
            });

            $('div#scroll-up').on('click', function () {
                $("html,body").animate({
                    scrollTop: 0
                }, 1000);
                return false;
            });
        }

        /* ---------------------------------------------
         IMAGE AND SOLID AND GRADIENT BACKGROUND
         --------------------------------------------- */
        function backgroundImageInit() {

            $('header, #testimonials').each(function () {
                if ($(this).attr('data-image-bg') && $(this).attr('data-image-overlay')) {

                    //hide in retina
                    $(this).css({
                        'background': 'linear-gradient(' + $(this).data('image-overlay') + ',' + $(this).data('image-overlay') + '), url(' + $(this).data('image-bg') + ') center center / cover no-repeat',
                        'background-position': 'top'
                    });

                    //enable for retina background images

                    // if (window.devicePixelRatio >= 2) {
                    //     //retina image
                    //     $(this).css({
                    //         'background': 'linear-gradient(' + $(this).data('image-overlay') + ',' + $(this).data('image-overlay') + '), url(' + $(this).data('image-bg').replace(/\.\w+$/, function(m) { return '@2x' + m; }) + ') center center / cover no-repeat'
                    //     });
                    // } else {
                    //    //no retina
                    //     $(this).css({
                    //         'background': 'linear-gradient(' + $(this).data('image-overlay') + ',' + $(this).data('image-overlay') + '), url(' + $(this).data('image-bg') + ') center center / cover no-repeat'
                    //     });
                    // }

                }
            });
        }

        /* ---------------------------------------------
         MAGNIFIC POPUP IMAGE
         --------------------------------------------- */
        function initPopupImage() {
            $('.popup-image').magnificPopup({
                type: 'image',
                tLoading: '',
                // retina: {
                //     ratio: 2 // can also be function that should return this number
                // },
                image: {
                    titleSrc: function (item) {
                        return item.el.attr('title') + '<small>' + item.el.attr('data-subtitle') + '</small>';
                    }
                },
                removalDelay: 500, //delay removal by X to allow out-animation
                callbacks: {
                    beforeOpen: function () {
                        // just a hack that adds mfp-anim class to markup
                        this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                        this.st.mainClass = this.st.el.attr('data-effect');
                    },
                    open: function () {
                        $('.mfp-title').addClass('animated fadeInLeft delay0-5s');
                    }
                },
                closeOnContentClick: true,
                midClick: true
            });
        }


        /* ---------------------------------------------
         MAGNIFIC POPUP MODAL
         --------------------------------------------- */
        function initPopupModal() {
            $('.popup-modal').magnificPopup({
                type: 'inline',
                preloader: false,
                removalDelay: 500, //delay removal by X to allow out-animation
                callbacks: {
                    beforeOpen: function () {
                        this.st.mainClass = this.st.el.attr('data-effect');
                    }
                },
                midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
            });
        }


        /* ---------------------------------------------
         MAGNIFIC POPUP GALLERY
         --------------------------------------------- */
        function initPopupGallery() {
            $('a.gallery-link').on('click', function () {
                $(this).next().magnificPopup('open');
            });

            $('.gallery').each(function () {
                $(this).magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    tLoading: '',
                    // retina: {
                    //     ratio: 2 // can also be function that should return this number
                    // },
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true
                    },
                    image: {
                        titleSrc: function (item) {
                            return item.el.attr('title') + '<small>' + item.el.attr('data-subtitle') + '</small>';
                        }
                    },
                    mainClass: 'mfp-zoom-in',
                    removalDelay: 160, //delay removal by X to allow out-animation
                    callbacks: {
                        open: function () {
                            //overwrite default prev + next function. Add timeout for css3 crossfade animation

                            $('.mfp-title').addClass('animated fadeInLeft delay0-5s');

                            $.magnificPopup.instance.next = function () {
                                var self = this;
                                self.wrap.removeClass('mfp-image-loaded');
                                setTimeout(function () {
                                    $.magnificPopup.proto.next.call(self);
                                }, 120);
                            }
                            $.magnificPopup.instance.prev = function () {
                                var self = this;
                                self.wrap.removeClass('mfp-image-loaded');
                                setTimeout(function () {
                                    $.magnificPopup.proto.prev.call(self);
                                }, 120);
                            }
                        },
                        imageLoadComplete: function () {
                            var self = this;
                            setTimeout(function () {
                                self.wrap.addClass('mfp-image-loaded');
                            }, 16);
                        }
                    },
                    closeOnContentClick: true,
                    midClick: true
                });
            });
        }


        /* ---------------------------------------------
         MAGNIFIC POPUP VIDEO
         --------------------------------------------- */
        function initPopupIframe() {
            $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-zoom-in',
                removalDelay: 160,
                preloader: false
            });
        }

        /* ---------------------------------------------
         GALLERY
         --------------------------------------------- */
        function masonryGalleryInit() {
            var self = $("#masonry");
            self.masonry({
                gutterWidth: 15,
                isAnimated: true,
                itemSelector: ".card-container"
            });
            $(".filters .btn").on('click', function (e) {
                e.preventDefault();
                var filter = $(this).attr("data-filter");
                self.masonryFilter({
                    filter: function () {
                        if (!filter) return true;
                        return $(this).attr("data-filter") == filter;
                    }
                });
            });
        }

        /* ---------------------------------------------
         INITIALIZE MAP
         --------------------------------------------- */
        function initMap() {
            var myLatLng = {lat: 51.5287352, lng: -0.3817831};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: myLatLng,
                styles: styles
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: 'img/svg/map-marker.svg',
                title: 'Location!'
            });
        }

        /* ---------------------------------------------
         INIT MAIL
         --------------------------------------------- */
        function initMail() {
            var mailForm = 'form#mail-form';
            var sendButton = '#send-button';
            $('.message').hide();

            $(mailForm).on('submit', function (e) {
                e.preventDefault(); //Prevents default submit
                var form = $(this);
                $(sendButton).addClass('btn-progress');
                $(sendButton).attr('disabled', 'disabled'); //Disable the submit button on click
                var post_data = form.serialize(); //Serialized the form data
                var recaptcha = $('#g-recaptcha-response').val();

                if (recaptcha === '') {
                    event.preventDefault();
                    $('.message').show().text('Submit Re-Captcha').delay(1100).fadeOut();
                    $(sendButton).removeClass('btn-progress');
                    $(sendButton).removeAttr('disabled', 'disabled'); // Enable submit button
                }

                else {
                    $.ajax({
                        type: 'POST',
                        url: 'php/mail_handler.php', // Form script
                        data: post_data
                    })
                        .done(function () {
                            $(sendButton).removeClass('btn-progress');
                            $('.message').show().text('Message Sent. I Will Contact You Soon.').delay(1100).fadeOut();
                            $(mailForm)[0].reset();
                            grecaptcha.reset();
                            $(sendButton).removeAttr('disabled', 'disabled'); // Enable submit button

                        })
                        .fail(function () {
                            $(sendButton).removeClass('btn-progress').fadeIn(500);
                            $('.message').show().text('Something Wrong. Try Again').delay(1100).fadeOut();
                            $(sendButton).removeAttr('disabled', 'disabled'); // Enable submit button
                        });
                }
            });
        }

        /* ---------------------------------------------
         BLOG HOME MASONRY
         --------------------------------------------- */
        function masonryBlogInit() {
            $('#masonry-blog').masonry({
                gutterWidth: 15,
                isAnimated: true,
                itemSelector: ".blog-block"
            });
        }

        /* ---------------------------------------------
         EVENTS MASONRY
         --------------------------------------------- */
        function masonryEventsInit() {
            $('#events-holder').masonry({
                gutterWidth: 15,
                isAnimated: true,
                itemSelector: ".events-block"
            });
        }

        /* ---------------------------------------------
         ACHIEVEMENTS MASONRY
         --------------------------------------------- */
        function masonryAchievementsInit() {
            $('#achievements-holder').masonry({
                gutterWidth: 15,
                isAnimated: true,
                itemSelector: ".achievements-block"
            });
        }

        /* ---------------------------------------------
         EDUCATION MASONRY
         --------------------------------------------- */
        function masonryEduInit() {
            $('#education-holder').masonry({
                gutterWidth: 15,
                isAnimated: true,
                itemSelector: ".timeline-block"
            });
        }

        /* ---------------------------------------------
         EDUCATION MASONRY
         --------------------------------------------- */
        function masonryExpInit() {
            $('#experience-holder').masonry({
                gutterWidth: 15,
                isAnimated: true,
                itemSelector: ".timeline-block"
            });
        }


        /* ---------------------------------------------
         SKILLS BAR INIT
         --------------------------------------------- */
        var skillsSection = "#skills";
        function skillsBarInit() {
            $(window).on('scroll', function () {
                if ($(skillsSection).visible(true)) {
                    counterAnimationInit();
                    skillsBarWidth();
                }
            });
        }

        function skillsBarWidth() {
            $(skillsSection).find('.skills-bar').each(function () {
                $(this).animate({
                    width: $(this).attr('data-percent')
                }, 5000, 'swing');
            });
            skillsBarWidth = function () {};
        }

        function counterAnimationInit() {
            $('.counter-numbers').countTo('start');
            counterAnimationInit = function () {};
        }


        /* ---------------------------------------------
         TESTIMONIALS
         --------------------------------------------- */
        function testimonialSliderInit() {
            var testimonialsSlider = new Swiper('#testimonials-slider', {
                pagination: '.swiper-pagination-testimonials',
                a11y: true,
                observer: true,
                speed: 1000,
                observeParents: true,
                keyboardControl: true,
                autoHeight: true,
                paginationClickable: true
            });
        }

        /* ---------------------------------------------
         HEADER HEIGHT INIT
         --------------------------------------------- */
        function headerHeightInit() {
            $('header').height($(window)[0].innerHeight);
        }


        /* ---------------------------------------------
         ON RESIZE
         --------------------------------------------- */
        $(window).on('resize', function () {
            //headerHeightInit();
        });

        /* ---------------------------------------------
         MAP STYLE
         --------------------------------------------- */
        var styles = [{
            "featureType": "all",
            "elementType": "labels.text.fill",
            "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]
        }, {
            "featureType": "all",
            "elementType": "labels.text.stroke",
            "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
        }, {
            "featureType": "all",
            "elementType": "labels.icon",
            "stylers": [{"visibility": "off"}]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [{"color": "#fefefe"}, {"lightness": 20}]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]
        }, {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]
        }, {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]
        }, {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{"color": "#dedede"}, {"lightness": 21}]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [{"color": "#ffffff"}, {"lightness": 17}]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]
        }, {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{"color": "#ffffff"}, {"lightness": 18}]
        }, {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{"color": "#ffffff"}, {"lightness": 16}]
        }, {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]
        }, {"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]}];


        /* ---------------------------------------------
         INITIALIZE FUNCTIONS ON READY
         --------------------------------------------- */
        onScrollCollapse();
        smoothScroll();
        scrollToTopInit();
        //headerHeightInit();
        //backgroundImageInit();
        //initPopupImage();
        //initPopupModal();
        //initPopupGallery();
        //initPopupIframe();
        //testimonialSliderInit;


        /***ON-LOAD***/
        jQuery(window).on('load', function () {

            /* ---------------------------------------------
             REMOVE PRELOADER
             --------------------------------------------- */
            $("div#pre-loader").addClass('animated fadeOut').delay(200).fadeOut();

            /* ---------------------------------------------
             INITIALIZE FUNCTIONS ON LOAD
             --------------------------------------------- */
            //masonryGalleryInit();
            //initMap();
            masonryBlogInit();
            //retinajs( $('img') );

        });


    });


})(jQuery);
