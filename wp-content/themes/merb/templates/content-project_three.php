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
                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/olam-overlay.png" class="project-hero-image" alt="Hero image" />
                </div>
                <div class="hero-container">
                    <div class="row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-4">
                            <div class="hero-content animated fadeIn">
                                <h1 class="hero-title">Olam International</h1>
                                <p class="hero-text">Olam Farmer Information System (OFIS)</p>
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
                            An online system for Olam partners and stakeholders to view statistics, glean information and create reports &amp; analyses on farmers registered with Olam.
                        </p>
                    </div>
                </section>

                <section class="section-project-writeup">
                    <div class="project-writeup">
                        <div class="project-writeup-title">
                            <h2 class="project-writeup-title-text">The brief</h2>
                        </div>
                        <div class="project-writeup-content">
                            <p class="project-writeup-content-text">
                                Olam is a global aggri-business, supplying produce and raw industrial materials to over 12,000 customers worldwide. They deal primarily in cocoa, but also in coffee, cashew nuts, rice &amp; cotton. I was contracted to work with a 2-man development team
                                to set up the data structure and back end for the Olam Farmer Information System. This involved a lot data scrubbing, SQL and also some Python scripts. The other side of the project involved the complete setup of a Git-integrated LAMP stack with fully automated
                                backups on AWS EC2.
                            </p>
                        </div>
                    </div>

                    <div class="project-writeup">
                        <div class="project-writeup-title">
                            <h2 class="project-writeup-title-text">Technologies</h2>
                        </div>
                        <div class="project-writeup-content">
                            <p class="project-writeup-content-text">
                                Technologies used in this project:
                            </p>
                            <ul class="project-writeup-content-list">
                                <li>MySQL</li>
                                <li>Python</li>
                                <li>AWS EC2 &amp; LAMP Stack</li>
                                <li>Git</li>
                                <li>Laravel</li>
                            </ul>
                        </div>
                    </div>
                    <div class="project-writeup-link">
                        <a href="http://olamgroup.com/" alt="Olam International">olamgroup.com</a>
                    </div>
                </section>

            </div>

        </main><!-- .site-main -->

<?php get_footer(); ?>
