(function($) {
    var state = {
        homeslider: {
            current: 0,
            total: $('.ktm-home-banner-rel > ul li').length,
            slide: function() {
                var transform = 'translateX(' + (state.homeslider.current * -100) + '%)';
                $('.ktm-home-banner-rel > ul').css({
                    'transform': transform,
                    '-webkit-transform': transform
                });
            }
        }
    }

    setInterval(function(){
        //$("#ktm-style-css").attr("href", "http://localhost/keystome/wp-content/themes/ktm/dist/main.opt.css?ver=1.0.0"+Date.now());
    }, 500);

    if ( $("body").hasClass("home") ) {
        setInterval(function(){
            if ( state.homeslider.current == state.homeslider.total - 1 ) {
                state.homeslider.current = 0;
            } else {
                state.homeslider.current++;
            }

            state.homeslider.slide();
        }, 3000);
    }

    if ( $("body").hasClass("page-id-15") ) {

        /** Recorded Videos Filter Script */
        var qsRegex;
        var $grid = $('.recorded-video-iso').isotope({
            itemSelector: '.recorded-video-iso .col-md-6',
            layoutMode: 'fitRows',
            filter: function() {
                return qsRegex ? $(this).text().match( qsRegex ) : true;
            }
        });

        $(document).on('focus', '#recorded-videos-search', function(){
            if ($(this).val() == '') {
                $(".ktm-filter-recorded-vids a").removeClass("active");
                $(".ktm-filter-recorded-vids li:first-child a").addClass("active");

                var $grid = $('.recorded-video-iso').isotope({
                    itemSelector: '.recorded-video-iso .col-md-6',
                    layoutMode: 'fitRows',
                    filter: function() {
                        return qsRegex ? $(this).text().match( qsRegex ) : true;
                    }
                });
            }
        })

        var $quicksearch = $('#recorded-videos-search').keyup( debounce( function() {
            qsRegex = new RegExp( $quicksearch.val(), 'gi' );
            $grid.isotope();
        }, 200 ) );

        // debounce so filtering doesn't happen every millisecond
        function debounce( fn, threshold ) {
            var timeout;
            threshold = threshold || 100;
            return function debounced() {
            clearTimeout( timeout );
            var args = arguments;
            var _this = this;
            function delayed() {
                fn.apply( _this, args );
            }
            timeout = setTimeout( delayed, threshold );
            };
        }

        $(document).on('click', ".ktm-filter-recorded-vids a", function(){
            $(".ktm-filter-recorded-vids a").removeClass("active");
            $('#recorded-videos-search').val('');
            if ( $(this).hasClass("active") ) {
                $(this).removeClass("active");
                $grid.isotope({ filter: '*' });
            } else {
                $(this).addClass("active");
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({ filter: filterValue == "*" ? filterValue : '.' + filterValue });
                
            }
            
            return false;
        });
    }

    $(document).on("click", ".ktm-mobile-menu", function(){
        $("#site-navigation").fadeIn();
        return false;
    });

    $(document).on("click", ".ktm-mobile-menu-close", function() {
        $("#site-navigation").fadeOut();
        return false;
    });

    /** Opportunities Toggle Slide */
    $(document).on("click", ".ktm-opportunities-list li .ktm-opp-main", function(){
        $(this).next().slideToggle();
        $(this).parent().toggleClass("active");
        return false;
    });

    if ( $("body").hasClass("single-job_posting") ) {
        setTimeout(function(){
            $("input#acf-field_61b0b685e9a7e").attr("pattern", "[a-z0-9._%+-]+@flemingcollege.ca$");
        }, 300);
    }

    // Update post title when full name is typed
    $(document).on("input", 'input[name="acf[field_61b0b67be9a7d]"]', function(){
        $('input[name="acf[_post_title]"]').val($(this).val() + " - " + $(".ktm-full-header-title").text());
    });
  
})(jQuery);