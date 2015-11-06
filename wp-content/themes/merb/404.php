<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <section class="section-hero">
                <div class="hero">
                    <img src="<?php bloginfo('template_directory'); ?>/img/hero4.png" class="hero-image" alt="Hero image" />
                </div>
                <div class="hero-container">
                    <div class="hero-content animated fadeIn">
                        <h1 class="hero-title">Whoops</h1>
                        <p class="hero-text">You dun goofed. Nuttin ere.</p>
                    </div>
                </div>
            </section>
            <div class="content-container">
                <div class="content-container-width">
                    <div class="content-404 animated fadeIn">
                        <blockquote class="text-404">Here, try <a href="<?php bloginfo( 'url' ); ?>">this</a>.</blockquote>
                    </div>
                </div>
            </div>

        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_footer(); ?>
