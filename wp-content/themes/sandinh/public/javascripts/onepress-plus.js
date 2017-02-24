
(function($, window, undefined) {

    $.fn.objectFitPolyfill = function(options) {

        // If the browser does support object-fit, we don't need to continue
        if ('objectFit' in document.documentElement.style !== false) {
           return;
        }

        // Setup options
        var settings = $.extend({
            "fit": "cover",
            "fixContainer": false,
        }, options);

        return this.each(function() {

            var $image = $(this);
            var $container = $image.parent();

            var coverAndPosition = function() {
                // If necessary, make the parent container work with absolutely positioned elements
                if (settings.fixContainer) {
                    $container.css({
                        "position": "relative",
                        "overflow": "hidden",
                    });
                }

                // Mathematically figure out which side needs covering, and add CSS positioning & centering
                $image.css({
                    "position": "absolute",
                    "height": $container.outerHeight(),
                    "width": "auto"
                });

                if (
                    settings.fit === "cover"   && $image.width() < $container.outerWidth() ||
                    settings.fit === "contain" && $image.width() > $container.outerWidth()
                ) {
                    $image.css({
                        "top": "50%",
                        "left": 0,
                        "height": "auto",
                        "width": $container.outerWidth(),
                        "marginLeft": 0,
                    }).css("marginTop", $image.height() / -2);
                } else {
                    $image.css({
                        "top": 0,
                        "left": "50%",
                        "marginTop": 0,
                    }).css("marginLeft", $image.width() / -2);
                }
            };

            // Init - wait for the image to be done loading first, otherwise dimensions will return 0
            $image.on("load", function(){
                coverAndPosition();
            });
            // IE will sometimes get cache-happy and not register onload.
            coverAndPosition();

            // Recalculate widths & heights on window resize
            $(window).resize(function() {
                coverAndPosition();
            });

        });

    };

})(jQuery, window);


jQuery( document ).ready( function( $ ){

    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };
    var is_mobile =  isMobile.any();
    /**
     * Section video
     */

    $( '.video-section').each( function(){
        var $s = $( this);
        var fallback = $s.attr( 'data-fallback' ) || 'true';
        var bg = $s.attr('data-bg') || '';
        if ( is_mobile && bg !== '' && fallback !== 'false' ) {
            if ( bg ) {
                $( '.fill-width', $s).remove();
                $s.addClass( 'video-bg' );
                $s.css( 'backgroundImage', "url('"+bg+"')" );
                $s.find( '.hero-slideshow-wrapper' ).addClass( 'loaded');
                $s.find( '.sk-cube-grid').remove();
            }
        } else {
            var video_mp4   = $s.attr('data-mp4')  || '',
                video_webm  = $s.attr('data-webm') || '',
                video_ogv   = $s.attr('data-ogv')  || '';

            if ( video_mp4 || video_webm || video_ogv ) {
                var $v = $( '<video autoplay loop muted id="hero-video-player" class="fill-width">' );
                $s.prepend( $v );
                var obj = document.getElementById('hero-video-player');
                obj.addEventListener('loadeddata', function() {
                    if( obj.readyState >= 1 ) {
                        $s.find( '.hero-slideshow-wrapper' ).addClass( 'loaded');
                        $s.find( '.sk-cube-grid').remove();
                    }
                });
                $v.html( OnePress_Plus.browser_warning );
                if ( video_mp4 ) {
                    $v.append( $( ' <source type="video/mp4"/>' ).attr( 'src', video_mp4 ) );
                }
                if ( video_webm ) {
                    $v.append( $( ' <source type="video/webm"/>' ).attr( 'src', video_webm ) );
                }
                if ( video_ogv ) {
                    $v.append( $( ' <source type="video/ogv"/>' ).attr( 'src', video_ogv ) );
                }

                $v.objectFitPolyfill();
            }
        }

    } );


    function pauseAllVideos()
    {
        $('.section-projects iframe').each(function ()
        {
            this.src = this.src; //causes a reload so it stops playing, music, video, etc.
        });
    }




} );
