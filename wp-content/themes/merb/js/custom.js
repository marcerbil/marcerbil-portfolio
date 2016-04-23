// Custom JS
// Theme: merb
// Date created: 28/10/2015
// ========================


window.onload = function() {

    // Variable declarations
    var $ = jQuery || {};
    var nav = document.getElementById( "navley" ),
        navBrand = document.getElementById( "navBrand" ),
        menuRight = document.getElementById( "cbp-spmenu-s2" ),
        showRight = document.getElementById( "showRight" ),
        pushBody = document.getElementById( "push-body" ),
        menuClose = document.getElementById( "menuClose" ),
        burger = document.getElementById( "burger" ),
        bodyElement = document.getElementById( "body" ),
        backtotop = document.getElementById( "backtotop" ),
        menuItems = document.querySelectorAll( ".js-menu-item" ),
        homePage = document.getElementById( "homePage" ),
        projectPage = document.getElementById( "projectPage" ),
        blogPage = document.getElementById( "blogPage" ),
        postPage = document.getElementById( "postPage" ),
        creativeworksPage = document.getElementById( "creativeworksPage" ),
        navProjects = document.getElementById( "navProjects" ),
        navCreativeworks = document.getElementById( "navCreativeworks" ),
        navBlog = document.getElementById( "navBlog" ),
        splitscreenListItems = document.querySelectorAll( ".splitscreen-list-item" ),
        lightboxLink = document.querySelectorAll( ".lightbox-link" ),
        // feedLoadMore = document.getElementById( "feedLoadMore" ),
        // feedLoadMorePosts = document.getElementById( "feedLoadMorePosts" ),
        footerHome = document.getElementById( "footerHome" ),
        footerProjects = document.getElementById( "footerProjects" ),
        footerCreativeworks = document.getElementById( "footerCreativeworks" ),
        footerBlog = document.getElementById( "footerBlog" ),
        currentScrollPosition,
        iteration,
        start = false;

    // Navbar JS
    // Turns navbar bg black while scrolling
    // =====================================

    window.addEventListener( "scroll", function() {
        if( window.scrollY != 0 ) {
            nav.classList.add( "navbar-bg" );
        } else {
            nav.classList.remove( "navbar-bg" );
        }
    });


    // Menu JS
    // Push menu adapted from codrops
    // ==============================

    showRight.onclick = function() {
        nav.classList.toggle( "cbp-spmenu-push-toleft" );
        burger.classList.toggle( "js-hide-icon" );
        this.classList.toggle( "js-push-left" );
        this.classList.toggle( "menu-active" );
        menuClose.classList.toggle( "js-show-icon" );
        pushBody.classList.toggle( "cbp-spmenu-push-toleft" );
        menuRight.classList.toggle( "cbp-spmenu-open" );
    };


    // Menu Link JS
    // Underline link when on page
    // ============================

    if ( homePage !== null ) {
        menuItems[0].classList.toggle( "js-item-active" );
        footerHome.classList.toggle( "footer-item-active" );
    } else if ( projectPage !== null ) {
        menuItems[1].classList.toggle( "js-item-active" );
        footerProjects.classList.toggle( "footer-item-active" );
        navProjects.classList.toggle( "nav-item-active" );
    } else if ( blogPage !== null ) {
        menuItems[2].classList.toggle( "js-item-active" );
        footerBlog.classList.toggle( "footer-item-active" );
        navBlog.classList.toggle( "nav-item-active" );
    } else if ( creativeworksPage !== null ) {
        menuItems[2].classList.toggle( "js-item-active" );
        footerCreativeworks.classList.toggle( "footer-item-active" );
        navCreativeworks.classList.toggle( "nav-item-active" );
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
        if ( document.documentElement.scrollTop === 0 ) {
            return document.body.scrollTop;
        } else {
            return document.documentElement.scrollTop;
        }
    }

    function easeInCubic( currentIteration, startValue, changeInValue, totalIterations ) {
        return changeInValue * Math.pow( currentIteration / totalIterations, 3 ) + startValue;
    }

    function easeOutCubic( currentIteration, startValue, changeInValue, totalIterations ) {
        return changeInValue * ( Math.pow( currentIteration / totalIterations - 1, 3 ) + 1 ) + startValue;
    }

    function easeInOutCubic( currentIteration, startValue, changeInValue, totalIterations ) {
        if ( ( currentIteration /= totalIterations / 2 ) < 1 ) {
            return changeInValue / 2 * Math.pow(currentIteration, 3 ) + startValue;
        }
        return changeInValue / 2 * ( Math.pow( currentIteration - 2, 3 ) + 2 ) + startValue;
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
            if ( getScrollPosition() <= 0 ) {
                stopEverything();
            }
        }
        requestAnimationFrame( animationLoop );
    }

    // Lightbox init
    // ==============

    // Customise options
    lightbox.option({
      'resizeDuration': 300,
      'fadeDuration': 300
    });


    // Splitscreen menu
    // ================

    for ( var i = 0; i < splitscreenListItems.length; i++ ) {
        splitscreenListItems[i].addEventListener( "mouseover", function() {
            removeLinkClass();
            this.classList.toggle( "js-active-list-item" );
        } );
    }

    function removeLinkClass() {
        for ( var i = 0; i < splitscreenListItems.length; i++ ) {
            splitscreenListItems[i].classList.remove( "js-active-list-item" );
        }
    }
};
