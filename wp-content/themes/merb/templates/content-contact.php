<?php
/**
 * The work page template
 *
 * @package WordPress
 * @subpackage merb
 * @since Twenty Fifteen 1.0
 */
?>

<section class="section-hero">
    <div class="hero">
        <img src="<?php bloginfo('template_directory'); ?>/img/hero3.png" class="hero-image" alt="Hero image" />
    </div>
    <div class="hero-container">
        <div class="hero-content animated fadeIn">
            <h1 class="hero-title">Want to work with me</h1>
            <h1 class="hero-title">or just say hi?</h1>
            <p class="hero-text">Drop me a line using the form below :)</p>
        </div>
    </div>
</section>

<div class="content-container">
    <div class="content-container-width">

        <section class="section-contact-form animated-slower fadeIn">

            <div class="contact-form">
                <div class="bordered">
                </div>
                <div class="done">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        Your message has been sent.
                    </div>
                </div>

                <form method="post" action="<?php bloginfo( 'url' ); ?>/contactform">
                    <div class="form">
                        <h3 class="contact-form-field-header">Name</h3>
                        <input class="contact-form-field" type="text" name="name" placeholder="Name">
                        <h3 class="contact-form-field-header">Email</h3>
                        <input class="contact-form-field" type="text" name="email" placeholder="E-mail address">
                        <h3 class="contact-form-field-header">Message</h3>
                        <textarea class="contact-form-field" name="comment" rows="1" placeholder="Message"></textarea>
                        <input type="submit" id="submit" class="contact-submit" value="Submit">
                    </div>
                </form>
            </div>

        </section>

    </div> <!-- ./content-container-width -->
</div> <!-- ./content-container -->
