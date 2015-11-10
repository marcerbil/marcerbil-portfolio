<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Merb
 * @since Twenty Fifteen 1.0
 */

get_header();

//Retrieve form data.
//GET - user submitted data using AJAX
//POST - in case user does not support javascript, we'll use POST instead
$name = $_GET["name"];
$email = $_GET["email"];
$comment = $_GET["comment"];

//flag to indicate which method it uses. If POST set it to 1

//if the errors array is empty, send the mail
if (!$errors) {

    //recipient - replace your email here
    $to = 'marcerbil@gmail.com';
    //sender - from the form
    $from = $name . ' <' . $email . '>';

    //subject and the html message
    $subject = 'Message from ' . $name;
    $message = 'Name: ' . $name . '<br/><br/>
               Email: ' . $email . '<br/><br/>
               Message: ' . nl2br($comment) . '<br/>';

    //send the mail
    $result = sendmail($to, $subject, $message, $from);

//if the errors array has values
} else {
    //display the errors message
    for ($i=0; $i<count($errors); $i++) echo $errors[$i] . '<br/>';
    echo '<a href="<?php bloginfo( 'url' ); ?>/contact.html">Back</a>';
    exit;
}

//Simple mail function with HTML header
function sendmail($to, $subject, $message, $from) {
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    $headers .= 'From: ' . $from . "\r\n";

    $result = mail($to, $subject, $message, $headers);

    if ($result) return 1;
    else return 0;
}

get_footer(); ?>
