
// Form validation
// ================

$( document ).ready( function() {

    $( '#submit' ).click( function () {

        //Get the data from all the fields
        var name = $('input[name=name]'),
        email = $('input[name=email]'),
        regx = /^([a-z0-9_\-\.])+\@([a-z0-9_\-\.])+\.([a-z]{2,4})$/i,
        comment = $('textarea[name=comment]'),
        returnError = false;

        //Simple validation to make sure user entered something
        //Add your own error checking here with JS, but also do some error checking with PHP.
        //If error found, add hightlight class to the text field

        if ( name.val() == '' ) {
            name.addClass( 'error' );
            returnError = true;
        } else {
            name.removeClass( 'error' );
        }

        if ( email.val() == '' ) {
            email.addClass( 'error' );
            returnError = true;
        } else {
            email.removeClass( 'error' );
        }

        if( !regx.test( email.val() ) ) {
            email.addClass( 'error' );
            returnError = true;
        } else {
            email.removeClass( 'error' );
        }

        if ( comment.val() == '' ) {
            comment.addClass( 'error' );
            returnError = true;
        } else {
            comment.removeClass( 'error' );
        }

        // Highlight all error fields, then quit.
        if( returnError == true ) {
            return false;
        }

    });
});
