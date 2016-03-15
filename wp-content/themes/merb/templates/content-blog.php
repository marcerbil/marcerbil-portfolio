<?php
/**
 * The blog landing content template
 *
 * @package WordPress
 * @subpackage merb
 * @since Twenty Fifteen 1.0
 */
?>

<div class="page-id" id="blogPage"></div>

<section id="heroBg" data-colour="#176612" class="section-hero">
    <div class="hero-wrapper">
        <div class="hero">
            <img src="<?php bloginfo('template_directory'); ?>/img/hero5.png" class="hero-image" alt="Hero image" />
        </div>
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title animated fadeIn">Welcome.</h1>
                <div class="animated fadeInRightBig">
                    <p class="blog-hero-text">I love deadlines. I love the whooshing noise they make as they go by.</p>
                    <p class="blog-hero-text-small">Douglas Adams, The Salmon of Doubt</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="content-container-blog">
    <div class="content-container-width">
        <section class="section-blog-posts animated fadeIn">
            <ul>
                <?php
                    $recent_posts = wp_get_recent_posts();
                        foreach( $recent_posts as $recent ) {
                            // Implement a switch statement here to choose layout type
                            // This is determined by category atm, but should be
                            // changed to a custom taxonomy in the future

                            echo '<li><a href="' . get_permalink( $recent["ID"] ) . '">' .   $recent["post_title"].'</a> </li> ';
                    }
                ?>
            </ul>
        </section>
    </div> <!-- ./content-container-width -->
</div> <!-- ./content-container -->
