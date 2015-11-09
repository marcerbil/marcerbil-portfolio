<?php
/**
 * A project page
 *
 * @package WordPress
 * @subpackage merb
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="page-id" id="projectFive"></div>

        <main id="main" class="" role="main">

            <section id="heroBg" data-colour="#6EB8EA" class="section-hero">

                <div class="project-hero">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/bigidea-bg.png" class="project-hero-image" alt="Hero image" />
                </div>
                <div class="hero-container">
                    <div class="hero-content animated fadeIn">
                        <h1 class="hero-title">Big Idea Marketing</h1>
                        <p class="hero-text">Marketing agency responsive site</p>
                        <hr class="project-hero-hr" />
                    </div>
                </div>
            </section>

            <div class="content-container-project animated fadeIn">

                <section class="section-project-intro section-project-intro-small">
                    <div class="project-intro">
                        <p class="project-intro-text">
                            A responsive website for a marketing consultancy - clean, bright &amp; minimalistic with simple micro-interactions
                        </p>
                    </div>
                </section>
            </div>

            <section class="section-project-pics">
                <div class="project-pics-panel panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/big1.png" class="project-panel-image" alt="Big Idea Home" />
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/big2.png" class="project-panel-image" alt="Big Idea Studies" />
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/big3.png" class="project-panel-image" alt="Big Idea Services" />
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
                                Big Idea Marketing is a marketing agency who specialise in copy &amp; content, lead generation and company growth. I was contracted to develop their website the purpose of which is to attract clients
                                 and showcase their services and previous clients.
                            </p>
                        </div>
                    </div>
                </section>

                <section class="section-project-writeup">
                    <div class="project-writeup">
                        <div class="project-writeup-content">
                            <p class="project-writeup-content-text">
                                The site was very content-heavy, with many large images and lots of copy. This presented the challenge of trying to surface the most important content in a clean and non-cluttered way. I accomplished this by using white as a primary colour and
                                the use of negative space to draw attention to the most important content.
                            </p>
                        </div>
                    </div>
                </section>
            </div>

            <section class="section-project-pics">
                <div class="project-pics-panel panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/big1-mob.png" class="project-panel-image" alt="Big Idea About" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/big2-mob.png" class="project-panel-image" alt="Big Idea Home" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/big3-mob.png" class="project-panel-image" alt="Big Idea Study" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/big4-mob.png" class="project-panel-image" alt="Big Idea Footer" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="content-container-project animated-slower fadeIn">
                <section class="section-project-writeup">
                    <div class="project-writeup-link">
                        <a href="http://www.bigideamarketing.co.uk/" alt="Big Idea Marketing">bigideamarketing.co.uk</a>
                    </div>
                </section>
            </div>

        </main><!-- .site-main -->

<?php get_footer(); ?>
