<?php
/**
 * A project page
 *
 * @package WordPress
 * @subpackage merb
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="page-id" id="projectThree"></div>

        <main id="main" class="" role="main">

            <section id="heroBg" data-colour="#2DC32D" class="section-hero">

                <div class="project-hero">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/olam-bg.png" class="project-hero-image" alt="Hero image" />
                </div>
                <div class="hero-container">
                    <div class="hero-content animated fadeIn">
                        <h1 class="hero-title">Olam International</h1>
                        <p class="hero-text">Data organisation/server integration &amp; project launch</p>
                        <hr class="project-hero-hr" />
                    </div>
                </div>
            </section>

            <div class="content-container-project animated-slower fadeIn">

                <section class="section-project-intro section-project-intro-small">
                    <div class="project-intro">
                        <p class="project-intro-text">
                            A system for Olam partners, stakeholders and executives to view statistics and create reports &amp; analyses on farmers registered with Olam
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
