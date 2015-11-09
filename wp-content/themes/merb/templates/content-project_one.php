<?php
/**
 * A project page
 *
 * @package WordPress
 * @subpackage merb
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


<div class="page-id" id="projectOne"></div>

        <main id="main" class="" role="main">

            <section id="heroBg" data-colour="#BE3624" class="section-hero">

                <div class="project-hero">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/loft-bg.png" class="project-hero-image" alt="Hero image" />
                </div>
                <div class="hero-container">
                    <div class="hero-content animated fadeIn">
                        <h1 class="hero-title">weareloft.com</h1>
                        <p class="hero-text">Company website re-design</p>
                        <hr class="project-hero-hr" />
                    </div>
                </div>
            </section>

            <div class="content-container-project animated-slower fadeIn">
                <section class="section-project-intro section-project-intro-small">
                    <div class="project-intro">
                        <p class="project-intro-text">
                            A rethink of the Loft Digital company website - a set of responsive, minimalist designs which showcase Loft's key values
                        </p>
                    </div>
                </section>
            </div>


                <section class="section-project-pics">
                    <div class="project-pics-panel panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <a href="<?php bloginfo('template_directory'); ?>/img/project-pages/loft1.png" data-lightbox="loftDesktop">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/loft1.png" data-lightbox="loftDesktop" class="project-panel-image" alt="Loft Home" />
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <a href="<?php bloginfo('template_directory'); ?>/img/project-pages/loft2.png" data-lightbox="loftDesktop">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/loft2.png" data-lightbox="loftDesktop" class="project-panel-image" alt="Loft About" />
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <a href="<?php bloginfo('template_directory'); ?>/img/project-pages/loft3.png" data-lightbox="loftDesktop">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/loft3.png" data-lightbox="loftDesktop" class="project-panel-image" alt="Loft Blog" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="content-container-project animated-slower fadeIn">
                    <section class="section-project-writeup">
                        <div class="project-writeup">
                            <div class="project-writeup-title">
                                <h2 class="project-writeup-title-text">The brief</h2>
                            </div>
                            <div class="project-writeup-content">
                                <p class="project-writeup-content-text">
                                    Loft Digital is a creative digital agency with a focus on innovation and unique solutions. I was contracted to work on two projects, one of which was the complete re-design of the agency website.
                                    The website was in need of a refresh as the design was several years old and did not reflect the company's identity. I was asked to create several sets of designs based on the following:
                                </p>
                                <ul class="project-writeup-content-list">
                                    <li>Innovation - a key aspect of Loft</li>
                                    <li>Surfacing of statistics</li>
                                    <li>Mobile-first</li>
                                    <li>Modern design elements</li>
                                    <li>Minimalist, but with character</li>
                                    <li>Overall generally more in line with the corporate identity and branding of Loft</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>

                <section class="section-project-pics">
                    <div class="project-pics-panel panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/loft1-mob.png" data-lightbox="loftMobile" class="project-panel-image" alt="Loft Home" />
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/loft2-mob.png" data-lightbox="loftMobile" class="project-panel-image" alt="Loft About" />
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/loft3-mob.png" data-lightbox="loftMobile" class="project-panel-image" alt="Loft Blog" />
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/loft4-mob.png" data-lightbox="loftMobile" class="project-panel-image" alt="Loft Menu" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="content-container-project animated-slower fadeIn">

                    <section class="section-project-writeup">
                        <div class="project-writeup">
                            <div class="project-writeup-title">
                                <h2 class="project-writeup-title-text">In conclusion</h2>
                            </div>
                            <div class="project-writeup-content">
                                <p class="project-writeup-content-text">
                                    I thouroughly enjoyed this project as it gave me an opportunity to fully excercise my creativity and come up with a warm &amp; characterful, yet modern &amp; minimalist design.
                                </p>
                            </div>
                        </div>
                        <div class="project-writeup-link">
                            <a href="http://www.weareloft.com/" alt="weareloft">weareloft.com</a>
                        </div>
                    </section>

                </div>

        </main><!-- .site-main -->

<?php get_footer(); ?>
