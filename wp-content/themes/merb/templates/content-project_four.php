<?php
/**
 * A project page
 *
 * @package WordPress
 * @subpackage merb
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="page-id" id="projectFour"></div>

        <main id="main" class="" role="main">

            <section id="heroBg" data-colour="#F481B5" class="section-hero">
                <div class="project-hero">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/md-bg.png" class="project-hero-image" alt="Hero image" />
                </div>
                <div class="hero-container">
                    <div class="hero-content animated fadeIn">
                        <h1 class="hero-title">MD Marketing</h1>
                        <p class="hero-text">Marketing agency responsive site</p>
                        <hr class="project-hero-hr" />
                    </div>
                </div>
            </section>

            <div class="content-container-project animated-slower fadeIn">
                <section class="section-project-intro section-project-intro-small">
                    <div class="project-intro">
                        <p class="project-intro-text">
                            A responsive single-page website for a marketing agency which reflects the corporate identity, yet is warm and welcoming
                        </p>
                    </div>
                </section>
            </div>

            <section class="section-project-pics">
                <div class="project-pics-panel panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <a href="<?php bloginfo('template_directory'); ?>/img/project-pages/large/md1-lg.png" data-lightbox="mdDesktop" data-title="MD home page" rel="lightbox[mdDesktop]">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/md1.png" class="project-panel-image" alt="MD Home" />
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                <a href="<?php bloginfo('template_directory'); ?>/img/project-pages/large/md2-lg.png" data-lightbox="mdDesktop" data-title="MD focus page" rel="lightbox[mdDesktop]">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/md2.png" class="project-panel-image" alt="MD About" />
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                <a href="<?php bloginfo('template_directory'); ?>/img/project-pages/large/md3-lg.png" data-lightbox="mdDesktop" data-title="MD about page" rel="lightbox[mdDesktop]">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/md3.png" class="project-panel-image" alt="MD " />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="content-container-project animated-slower fadeIn">
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
            </div>

            <section class="section-project-pics">
                <div class="project-pics-panel panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <a href="<?php bloginfo('template_directory'); ?>/img/project-pages/large/md1-mob-lg.png" data-lightbox="mdMobile" data-title="MD home page" rel="lightbox[mdMobile]">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/md1-mob.png" class="project-panel-image" alt="MD home page" />
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                <a href="<?php bloginfo('template_directory'); ?>/img/project-pages/large/md2-mob-lg.png" data-lightbox="mdMobile" data-title="MD focus page" rel="lightbox[mdMobile]">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/md2-mob.png" class="project-panel-image" alt="MD focus page" />
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                <a href="<?php bloginfo('template_directory'); ?>/img/project-pages/large/md3-mob-lg.png" data-lightbox="mdMobile" data-title="MD about page" rel="lightbox[mdMobile]">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/md3-mob.png" class="project-panel-image" alt="MD about page" />
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                <a href="<?php bloginfo('template_directory'); ?>/img/project-pages/large/md4-mob-lg.png" data-lightbox="mdMobile" data-title="MD contact page" rel="lightbox[mdMobile]">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/md4-mob.png" class="project-panel-image" alt="MD contact page" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="content-container-project animated-slower fadeIn">
                <section class="section-project-writeup">
                    <div class="project-writeup-link">
                        <a href="http://www.mdmarketing.co.uk/" alt="MD Marketing">mdmarketing.co.uk</a>
                    </div>
                </section>
            </div>

        </main><!-- .site-main -->

<?php get_footer(); ?>
