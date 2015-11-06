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
        currentScrollPosition,
        iteration,
        start = false;

    // Navbar JS
    // Turns navbar bg black while scrolling
    // =====================================

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


    // Back to top
    // ============
    function setup() {
        // do something when the up arrow is clicked
        backtotop.addEventListener("click", animateToTopOfPage, false);

        // deal with the mouse wheel
        bodyElement.addEventListener("mousewheel", stopEverything, false);
        bodyElement.addEventListener("DOMMouseScroll", stopEverything, false);

        // wheeeeeeee!
        animationLoop();
    }

    setup();

    // kick of the animation to scroll your window back to the top
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

    //
    // kicks into high gear only when the start variable is true
    //
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

    // jQuery Knobs Init
    // =================

    $(function() {
        $('.knob').knob();
    });

};
