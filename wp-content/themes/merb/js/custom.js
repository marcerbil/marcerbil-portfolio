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
        showmmMenu = document.getElementById( "showmmMenu" ),
        mmMenu = document.getElementById( "mmMenu" ),
        menuClose = document.getElementById( "menuClose" ),
        burger = document.getElementById( "burger" ),
        bodyElement = document.getElementById( "body" ),
        backtotop = document.getElementById( "backtotop" ),
        toAbout = document.getElementById( "toAbout" ),
        menuItems = document.querySelectorAll( ".js-menu-item" ),
        homePage = document.getElementById( "homePage" ),
        projectsPage = document.getElementById( "projectsPage" ),
        projectPage = document.getElementById( "projectPage" ),
        blogPage = document.getElementById( "blogPage" ),
        postPage = document.getElementById( "postPage" ),
        creativeworksPage = document.getElementById( "creativeworksPage" ),
        creativeworksDesign = document.getElementById( "creativeworksDesign" ),
        creativeworksIllustration = document.getElementById( "creativeworksIllustration" ),
        loadCreativeWorksDesign = document.getElementById( "loadCreativeWorksDesign" ),
        loadCreativeWorksIllustration = document.getElementById( "loadCreativeWorksIllustration" ),
        navProjects = document.getElementById( "navProjects" ),
        navCreativeworks = document.getElementById( "navCreativeworks" ),
        navBlog = document.getElementById( "navBlog" ),
        splitscreenPage = document.getElementById( "splitscreenPage" ),
        splitscreenAjaxLoad = document.querySelectorAll( ".splitscreenAjaxLoad" ),
        splitscreenItem = document.querySelectorAll( "splitscreenItem" ),
        splitscreenMobileContentContainer = document.getElementById( "splitscreenMobileContentContainer" ),
        closeSplitscreenModal = document.getElementById( "closeSplitscreenModal" ),
        designFilter = document.getElementById( "designFilter" ),
        developmentFilter = document.getElementById( "developmentFilter" ),
        bothFilter = document.getElementById( "bothFilter" ),
        designItem = document.getElementById( "designItem" ),
        developmentItem = document.getElementById( "developmentItem" ),
        bothItem = document.getElementById( "bothItem" ),
        splitscreenListItems = document.querySelectorAll( ".splitscreen-list-item" ),
        lightboxLink = document.querySelectorAll( ".lightbox-link" ),
        footerHome = document.getElementById( "footerHome" ),
        footerProjects = document.getElementById( "footerProjects" ),
        footerCreativeworks = document.getElementById( "footerCreativeworks" ),
        footerBlog = document.getElementById( "footerBlog" ),
        currentScrollPosition,
        iteration,
        start = false,
        postType,
        ajaxEntryPoint,
        entryPoint;


    // Navbar JS
    // =====================================

    if ( projectsPage !== null || projectPage !== null || creativeworksPage !== null ) {
        nav.classList.remove( "navbar-bg-home" );
    }

    window.addEventListener( "scroll", function() {
        if( window.scrollY != 0 ) {
            nav.classList.add( "navbar-bg" );
            if ( homePage !== null || blogPage !== null ) {
                nav.classList.remove( "navbar-bg-home" );
            }
        } else {
            nav.classList.remove( "navbar-bg" );
            if ( homePage !== null || blogPage !== null ) {
                nav.classList.add( "navbar-bg-home" );
            }
        }
    });


    // Menu JS
    // Full screen mobile menu
    // =======================

    showmmMenu.onclick = function() {
        burger.classList.toggle( "js-hide-icon" );
        menuClose.classList.toggle( "js-show-icon" );
        menuClose.classList.toggle( "menu-close-open" );
        mmMenu.classList.toggle("js-mmmenu-active");
    };

    menuClose.onclick = function() {
        burger.classList.remove( "js-hide-icon" );
        menuClose.classList.remove( "js-show-icon" );
        menuClose.classList.remove( "menu-close-open" );
        mmMenu.classList.remove("js-mmmenu-active");
    };


    // Page-dependent JS
    // ============================

    if ( homePage !== null ) {
        menuItems[0].classList.toggle( "js-item-active" );
        menuItems[0].classList.toggle( "mmmenu-active-underline-active" );
        footerHome.classList.toggle( "footer-item-active" );
    } else if ( projectsPage !== null || projectPage !== null ) {
        menuItems[2].classList.toggle( "js-item-active" );
        menuItems[2].classList.toggle( "mmmenu-active-underline-active" );
        footerProjects.classList.toggle( "footer-item-active" );
        navProjects.classList.toggle( "nav-item-active" );
        postType = "/projects/";
        entryPoint = "#splitscreenAjaxContainer";
        ajaxEntryPoint = " #projectAjaxContent";
    } else if ( blogPage !== null || postPage !== null ) {
        menuItems[3].classList.toggle( "js-item-active" );
        menuItems[3].classList.toggle( "mmmenu-active-underline-active" );
        footerBlog.classList.toggle( "footer-item-active" );
        navBlog.classList.toggle( "nav-item-active" );
    } else if ( creativeworksPage !== null ) {
        menuItems[1].classList.toggle( "js-item-active" );
        menuItems[1].classList.toggle( "mmmenu-active-underline-active" );
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

    // Splitscreen Ajax Post loader
    // ============================

    // Loop through each link in link list created by query
    for ( var i = 0; i < splitscreenAjaxLoad.length; i++ ) {
        splitscreenAjaxLoad[i].addEventListener( "click", merbAjaxPostSetup );
    }

    for ( var i = 0; i < splitscreenAjaxLoad.length; i++ ) {
        splitscreenAjaxLoad[i].addEventListener( "click", function() {
            splitscreenMobileContentContainer.classList.add( "splitscreen-mobile-content-container-active" );
        } );
    }

    if ( splitscreenPage != null ) {
        closeSplitscreenModal.addEventListener( "click", function() {
            splitscreenMobileContentContainer.classList.remove( "splitscreen-mobile-content-container-active" );
        } );
    }

    function merbAjaxPostSetup( ) {
        event.preventDefault();

        // Load the loading animation
        $( entryPoint ).html('<div class="fadeIn animated-loading splitscreen-ajax-loading"><i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw margin-bottom"></i><span class="sr-only">Loading...</span></div>');

        $.ajaxSetup({ cache:false });

        var postame = $( this ).attr( "data-postname" );
        var url = postType + postame + ajaxEntryPoint;

        setTimeout( merbAjaxPostLoad( url ), 4000 );
    }

    function merbAjaxPostLoad( url ) {
        // Load the post into the specified entry point
        $( entryPoint ).load( url );
    }

    // Creative Works selector
    // =======================

    if( creativeworksPage != null ) {

        loadCreativeWorksDesign.classList.add( "splitscreen-selector--active" );
        creativeworksDesign.classList.add( "splitscreen-left-side-active" );

        loadCreativeWorksDesign.addEventListener( "click", function() {
            creativeworksDesign.classList.add( "splitscreen-left-side-active" );
            loadCreativeWorksDesign.classList.add( "splitscreen-selector--active" );
            creativeworksIllustration.classList.remove( "splitscreen-left-side-active" );
            loadCreativeWorksIllustration.classList.remove( "splitscreen-selector--active" );
        } );

        loadCreativeWorksIllustration.addEventListener( "click", function() {
            creativeworksIllustration.classList.add( "splitscreen-left-side-active" );
            loadCreativeWorksIllustration.classList.add( "splitscreen-selector--active" );
            creativeworksDesign.classList.remove( "splitscreen-left-side-active" );
            loadCreativeWorksDesign.classList.remove( "splitscreen-selector--active" );
        } );
    }


    // Scroll animations
    // =================

    if( homePage != null ) {
        toAbout.addEventListener("click", function() {
            event.preventDefault();
            $( "html, body" ).animate( { scrollTop: $( "#about" ).offset().top }, 1000, "easeInOutQuad" );
        });
    }

};
