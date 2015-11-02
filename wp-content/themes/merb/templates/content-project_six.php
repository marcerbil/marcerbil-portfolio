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
                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/bpsi-overlay.png" class="project-hero-image" alt="Hero image" />
                </div>
                <div class="hero-container">
                    <div class="row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-4">
                            <div class="hero-content animated fadeIn">
                                <h1 class="hero-title">BPSI iCourse</h1>
                                <p class="hero-text">Android &amp; iOS course-booking application</p>
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
                            An Android and an iOS application for Barnet council staff to view news courses and book places for themselves or others.
                        </p>
                    </div>
                </section>

                <section class="section-project-writeup">
                    <div class="project-writeup">
                        <div class="project-writeup-content">
                            <p class="project-writeup-content-text">
                                The BPSI (Barnet Partnership for School Improvement) is a campaign run by Barnet council to improve the schools in it's borough and provide an exanple for other boroughs to follow. I was contracted by Barnet council to create an app for Barnet staff
                                to use to book courses for themselves or to nominate others for courses. There was a back end system in place already which manages the courses and bookings, so I had to create a front end interface which could display the courses and booking forms.
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
                                <li>Android Java &amp; XML</li>
                                <li>Objective C</li>
                                <li>HTML5 &amp; CSS3</li>
                                <li>Bootstrap 3</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <div class="project-writeup-content">
                    <p class="project-writeup-content-text">
                        The app is on both the Google Play store and the iOS app store
                    </p>
                </div>

            </div>

        </main><!-- .site-main -->

<?php get_footer(); ?>
