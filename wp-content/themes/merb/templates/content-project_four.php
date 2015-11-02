<?php
/**
 * A project page
 *
 * @package WordPress
 * @subpackage merb
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

        <main id="main" class="" role="main">

            <section class="section-hero">

                <div class="project-hero">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/md-overlay.png" class="project-hero-image" alt="Hero image" />
                </div>
                <div class="hero-container">
                    <div class="row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-4">
                            <div class="hero-content animated fadeIn">
                                <h1 class="hero-title">MD Marketing</h1>
                                <p class="hero-text">Marketing agency responsive site</p>
                                <hr class="project-hero-hr" />
                            </div>
                        </div>
                        <div class="col-md-7">
                        </div>
                    </div>
                </div>
            </section>

            <div class="content-container animated-slower fadeIn">

                <section class="section-project-intro">
                    <div class="project-intro">
                        <p class="project-intro-text">
                            A mobile-first, responsive single-page website for a marketing agency which reflects the corporate identity, yet is warm and welcoming.
                        </p>
                    </div>
                </section>

                <section class="section-project-pics">
                    <div class="project-pics-panel panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/md1.png" class="project-panel-image" alt="Loft Home" />
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/md2.png" class="project-panel-image" alt="Loft About" />
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/md3.png" class="project-panel-image" alt="Loft Blog" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-project-writeup">
                    <div class="project-writeup">
                        <div class="project-writeup-content">
                            <p class="project-writeup-content-text">
                                MD Marketing is a creative marketing agency who specialise in copy &amp; content, with a focus on the end client. I was contracted to create the online medium the purpose of which is to attract clients
                                 and showcase the services &amp; testimonials of MD's happy customers. The design was based around the corporate identity and branding of the agency - bright and uncluttered, with vibrant accents of colour.
                            </p>
                        </div>
                    </div>

                </section>

                <section class="section-project-pics">
                    <div class="project-pics-panel panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/md1-mob.png" class="project-panel-image" alt="MD Home" />
                                </div>
                                <div class="col-md-3">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/md2-mob.png" class="project-panel-image" alt="MD About" />
                                </div>
                                <div class="col-md-3">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/md3-mob.png" class="project-panel-image" alt="MD Projects" />
                                </div>
                                <div class="col-md-3">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/md4-mob.png" class="project-panel-image" alt="MD Contact" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="project-writeup-link">
                    <a href="http://www.mdmarketing.co.uk/" alt="MD Marketing">mdmarketing.co.uk</a>
                </div>

            </div>

        </main><!-- .site-main -->

<?php get_footer(); ?>
