// Custom JS
// Theme: merb
// Date created: 28/10/2015
// ========================

// Navbar JS
// Turns navbar bg black while scrolling
// =====================================

window.onload = function() {

    var nav = document.getElementById( 'navley' );
    window.addEventListener('scroll', function() {
        if( window.scrollY != 0 ) {
            nav.classList.add( 'navbar-bg' );
        } else {
            nav.classList.remove( 'navbar-bg' );
        }
    });


    // Menu JS
    // Uses Classie.js
    // =================

    var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
        showRight = document.getElementById( 'showRight' ),
        body = document.getElementById( 'body' );

    showRight.onclick = function() {
        classie.toggle( this, 'menu-active' );
        classie.toggle( body, 'cbp-spmenu-push-toleft' );
        classie.toggle( menuRight, 'cbp-spmenu-open' );
    };


    // Back to top
    // ============

    var bodyElement = document.getElementById("body");
    var backtotop = document.getElementById("backtotop");
    var currentScrollPosition;
    var iteration;
    var start = false;

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

    var $ = jQuery || {};

    $(function() {
        $('.knob').knob();
    });

};


// // Form validation and Ajax call
// // =============================
//
// $(document).ready(function() {
//
//   $('#submit').click(function () {
//
//       //Get the data from all the fields
//       var name = $('input[name=name]');
//       var email = $('input[name=email]');
//       var regx = /^([a-z0-9_\-\.])+\@([a-z0-9_\-\.])+\.([a-z]{2,4})$/i;
//       var comment = $('textarea[name=comment]');
//       var returnError = false;
//
//       //Simple validation to make sure user entered something
//       //Add your own error checking here with JS, but also do some error checking with PHP.
//       //If error found, add hightlight class to the text field
//       if (name.val()=='') {
//           name.addClass('error');
//           returnError = true;
//       } else name.removeClass('error');
//
//       if (email.val()=='') {
//           email.addClass('error');
//           returnError = true;
//       } else email.removeClass('error');
//
//       if(!regx.test(email.val())){
//         email.addClass('error');
//         returnError = true;
//       } else email.removeClass('error');
//
//
//       if (comment.val()=='') {
//           comment.addClass('error');
//           returnError = true;
//       } else comment.removeClass('error');
//
//       // Highlight all error fields, then quit.
//       if(returnError == true){
//           return false;
//       }
//
//       //organize the data
//
//       var data = 'name=' + name.val() + '&email=' + email.val() + '&comment='  + encodeURIComponent(comment.val());
//
//       //disabled all the text fields
//       $('.text').attr('disabled','true');
//
//       //show the loading sign
//       $('.loading').show();
//
//       //start the ajax
//       $.ajax({
//           //this is the php file that processes the data and sends email
//           url: "../contact.php",
//
//           //GET method is used
//           type: "GET",
//
//           //pass the data
//           data: data,
//
//           //Do not cache the page
//           cache: false,
//
//           //success
//           success: function (html) {
//               //if contact.php returned 1/true (send mail success)
//               if (html==1) {
//
//                   //show the success message
//                   $('.done').fadeIn('slow');
//
//                   $(".form").find('input[type=text], textarea').val("");
//
//               //if contact.php returned 0/false (send mail failed)
//               } else alert('Sorry, unexpected error. Please try again later.');
//           }
//       });
//
//       //cancel the submit button default behaviours
//       return false;
//   });
// });
