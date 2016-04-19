// Custom JS
// Theme: merb
// Date created: 28/10/2015
// ========================


window.onload = function() {

    // Variable declarations
    var $ = jQuery || {};
    var nav = document.getElementById( 'navley' ),
        navBrand = document.getElementById( 'navBrand' ),
        menuRight = document.getElementById( 'cbp-spmenu-s2' ),
        showRight = document.getElementById( 'showRight' ),
        pushBody = document.getElementById( 'push-body' ),
        menuClose = document.getElementById( 'menuClose' ),
        burger = document.getElementById( 'burger' ),
        bodyElement = document.getElementById("body"),
        backtotop = document.getElementById("backtotop"),
        heroBg = document.getElementById("heroBg"),
        menuItems = document.querySelectorAll(".js-menu-item"),
        homePage = document.getElementById("homePage"),
        workPage = document.getElementById("workPage"),
        feedPage = document.getElementById("feedPage"),
        postPage = document.getElementById("postPage"),
        projectOne = document.getElementById("projectOne"),
        projectTwo = document.getElementById("projectTwo"),
        projectThree = document.getElementById("projectThree"),
        projectFour = document.getElementById("projectFour"),
        projectFive = document.getElementById("projectFive"),
        projectSix = document.getElementById("projectSix"),
        lightboxLink = document.querySelectorAll(".lightbox-link"),
        knobOne = document.getElementById("knobOne"),
        knobTwo = document.getElementById("knobTwo"),
        knobThree = document.getElementById("knobThree"),
        knobFour = document.getElementById("knobFour"),
        feedLoadMore = document.getElementById("feedLoadMore"),
        feedLoadMorePosts = document.getElementById("feedLoadMorePosts"),
        currentScrollPosition,
        iteration,
        start = false;

    // Navbar JS
    // Turns navbar bg black while scrolling
    // =====================================

    var heroColour = heroBg.dataset.colour;

    window.addEventListener('scroll', function() {
        if( window.scrollY != 0 ) {
            nav.classList.add( 'navbar-bg' );
            navBrand.classList.add( 'flipInX' );
        } else {
            nav.classList.remove( 'navbar-bg' );
            navBrand.classList.remove( 'flipInX' );
        }
    });


    // Menu JS
    // Push menu adapted from codrops
    // ==============================

    showRight.onclick = function() {
        nav.classList.toggle( 'cbp-spmenu-push-toleft' );
        burger.classList.toggle( 'js-hide-icon' );
        this.classList.toggle( 'js-push-left' );
        this.classList.toggle( 'menu-active' );
        menuClose.classList.toggle( 'js-show-icon' );
        pushBody.classList.toggle( 'cbp-spmenu-push-toleft' );
        menuRight.classList.toggle( 'cbp-spmenu-open' );
    };


    // Menu Link JS
    // Underline link when on page
    // ============================

    if ( homePage != null ) {
        menuItems[0].classList.toggle( 'js-item-active' );
    } else if ( workPage != null ) {
        menuItems[1].classList.toggle( 'js-item-active' );
    } else if ( projectOne != null ) {
        menuItems[2].classList.toggle( 'js-item-active' );
    } else if ( projectTwo != null ) {
        menuItems[3].classList.toggle( 'js-item-active' );
    } else if ( projectThree != null ) {
        menuItems[4].classList.toggle( 'js-item-active' );
    } else if ( projectFour != null ) {
        menuItems[5].classList.toggle( 'js-item-active' );
    } else if ( projectFive != null ) {
        menuItems[6].classList.toggle( 'js-item-active' );
    } else if ( projectSix != null ) {
        menuItems[7].classList.toggle( 'js-item-active' );
    } else if ( feedPage != null ) {
        menuItems[8].classList.toggle( 'js-item-active' );
    }


    // Back to top
    // ============
    function setup() {
        backtotop.addEventListener("click", animateToTopOfPage, false);

        // deal with the mouse wheel
        bodyElement.addEventListener("mousewheel", stopEverything, false);
        bodyElement.addEventListener("DOMMouseScroll", stopEverything, false);

        animationLoop();
    }

    setup();

    function animateToTopOfPage(e) {
        currentScrollPosition = getScrollPosition();

        start ^= true;
        iteration = 0;
    }

    // stop the animation and reset start and iteration
    function stopEverything() {
        start = false;
    }

    // a cross-browser (minus Opera) way of getting the current scroll position
    function getScrollPosition() {
        if (document.documentElement.scrollTop == 0) {
            return document.body.scrollTop;
        } else {
            return document.documentElement.scrollTop;
        }
    }

    function easeInCubic(currentIteration, startValue, changeInValue, totalIterations) {
        return changeInValue * Math.pow(currentIteration / totalIterations, 3) + startValue;
    }

    function easeOutCubic(currentIteration, startValue, changeInValue, totalIterations) {
        return changeInValue * (Math.pow(currentIteration / totalIterations - 1, 3) + 1) + startValue;
    }

    function easeInOutCubic(currentIteration, startValue, changeInValue, totalIterations) {
        if ((currentIteration /= totalIterations / 2) < 1) {
            return changeInValue / 2 * Math.pow(currentIteration, 3) + startValue;
        }
        return changeInValue / 2 * (Math.pow(currentIteration - 2, 3) + 2) + startValue;
    }

    // kicks into high gear only when the start variable is true
    function animationLoop() {
        // start is true when you click on the up arrow
        if (start) {
            // where the magic happens
            window.scrollTo(0, easeOutCubic(iteration,
                                currentScrollPosition,
                                -currentScrollPosition,
                                50));
            iteration++;

            // once you reach the top of the document, stop the scrolling
            if (getScrollPosition() <= 0) {
                stopEverything();
            }
        }
        requestAnimationFrame(animationLoop);
    }

    // jQuery bars
    // ============

    $( '.skillbar' ).each( function() {
        $( this ).find('.skillbar-bar').animate({
            width: $( this ).attr( 'data-percent' )
        }, 10000 );
    });

    // Lightbox init
    // ==============

    // Customise options
    lightbox.option({
      'resizeDuration': 300,
      'fadeDuration': 300
    });


    // // Load more posts with ajax
    // // =========================
    // function loadPosts() {
    //     event.preventDefault();
    //
    //     $.ajax({
    //         url: ajax_pagination.ajaxurl,
    //         type: 'GET',
    //         data: {
    //             action: 'ajax_pagination',
    //             json_array: ajax_pagination.json_array
    //         },
    //         success: function( json_array ) {
    //             console.log('Success');
    //             console.log(json_array);
    //
    //         },
    //         error: function( json_array ) {
    //             console.log('Failure');
    //             console.log(json_array);
    //         }
    //     });
    //
    //
    // }
    //
    // $( feedLoadMore ).on( 'click', function() {
    //     $( feedLoadMore ).attr( "disabled", false );
    //     loadPosts();
    // });

};
