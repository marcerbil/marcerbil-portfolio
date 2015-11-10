<?php
/**
 * A project page
 *
 * @package WordPress
 * @subpackage merb
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="page-id" id="projectTwo"></div>

        <main id="main" class="" role="main">

            <section id="heroBg" data-colour="#4A4A4A" class="section-hero">

                <div class="project-hero">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project-pages/bt-bg.png" class="project-hero-image" alt="Hero image" />
                </div>
                <div class="hero-container">
                    <div class="hero-content">
                        <h1 class="hero-title">Business Traveller</h1>
                        <p class="hero-text">Design/development of the online experience</p>
                        <hr class="project-hero-hr" />
                    </div>
                </div>
            </section>

            <div class="content-container-project animated-slower fadeIn">

                <section class="section-project-intro section-project-intro-small">
                    <div class="project-intro">
                        <p class="project-intro-text">
                            A major overhaul of Panacea Publishing's popular online magazine <em>Business Traveller</em> - wireframing, design, creation &amp; integration into WordPress
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
                                Business Traveller is a popular travel publication, in both print and online editions. I was contracted by Loft Digital to work on two projects, one of which was the complete redesign of the Business Traveller online experience.
                                The website was in need of a refresh as the front end was old, and the CMS being used was out-dated and inflexible. I worked in a team of 4 developers to take the project from the drawing board all the way through to a fully integrated custom WordPress site.
                                This included the following steps:
                            </p>
                        </div>
                    </div>

                    <div class="project-writeup">
                        <div class="project-writeup-title">
                            <h2 class="project-writeup-title-text">Establishing the need</h2>
                        </div>
                        <div class="project-writeup-content">
                            <p class="project-writeup-content-text">
                                The online experience should reflect the magazine in structure - a clear distinction between content sections was needed, whilst conforming to the corporate identity. Additionally, the new site needed some custom functionality not included in WordPress by default; for example
                                a pay wall for certain content, a single-sign-on process for members, and a separate 'club' area for premium members. My main focus was on the front end and design and secondarily on creating custom WordPress widgets for the sidebar.
                            </p>
                        </div>
                    </div>

                    <div class="project-writeup">
                        <div class="project-writeup-title">
                            <h2 class="project-writeup-title-text">Choices</h2>
                        </div>
                        <div class="project-writeup-content">
                            <p class="project-writeup-content-text">
                                We decided early on to take a mobile-first approach to the entire project - from wireframes to end product - the reason behind this was based on the analytics data gathered from their old site, which showed that the largest percentage of their returning &amp; new users
                                were using the site on mobile and tablet. This presented some design challenges as the site was very content-heavy, meaning that we had to find a way to surface all important content with limited screen real estate.
                            </p>
                        </div>
                        <div class="project-writeup-content">
                            <p class="project-writeup-content-text">
                                To solve this we took a Medium-esque approach to each article design and focused the user on the content rather than the extra functionality offered. Additionally the old site (despite being a publication) didn't have a lot of high-quality images, so we
                                 designed the section pages in a way which was both flexible - in terms of content - and aesthetically pleasing - like a magazine should be.
                            </p>
                        </div>
                    </div>
                    <div class="project-writeup-link">
                        <a href="http://www.businesstraveller.com/" alt="Business Traveller">businesstaveller.com</a>
                    </div>
                </section>

            </div>

        </main><!-- .site-main -->

<?php get_footer(); ?>
