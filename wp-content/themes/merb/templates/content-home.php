<?php
/**
 * The home page template
 *
 * @package WordPress
 * @subpackage merb
 * @since Twenty Fifteen 1.0
 */
?>

<div class="page-id" id="homePage"></div>

<section id="heroBg" data-colour="#7788BA" class="section-hero">
    <div class="hero"></div>
    <div class="hero-container">
        <div class="hero-content-home animated fadeIn">
            <h1 class="hero-title">UI/Web Designer</h1>
            <h1 class="hero-title">Front end developer</h1>
            <p class="hero-text">London-based developer, designer and coffee connoisseur</p>
            <hr class="project-hero-hr home-hero-hr" />
        </div>
    </div>
</section>

<div class="content-container-home">
    <div class="content-container-width">

        <section class="section-about animated-slower fadeIn">
            <div class="about">
                <div class="row">
                    <div class="custom-shape-container">
                        <img src="<?php bloginfo('template_directory'); ?>/img/custom-shape.png" class="about-custom-shape" />                        
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="circular-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/me-guitar.jpg" class="image-me" alt="Marc Erbil" />
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="about-text-container">
                            <h2 class="about-title">A bit of $this, a bit of &lt;that&gt;</h2>
                            <p class="about-text">
                                I'm Marc, a 22-year old designer and developer. I love being creative through a number of different mediums - graphic art, music and writing to name a few - so in my spare time I like to draw, play guitar and read (a lot). I also love
                                to try new things, whether that be learning a language or picking up an interesting hobby.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="separator-hr" />
    </div>

    <div class="content-container-width-work">
        <section class="section-projects animated-slower fadeIn">

            <div class="recent-projects-title">
                <h3 class="recent-projects-title-text">Some of my recent work</h3>
            </div>

            <div class="row portfolio-row">

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="portfolio-tile portfolio-post-tile-1">
                        <a href="../project_one/">
                            <img src="<?php bloginfo('template_directory'); ?>/img/project-tiles/loft.png" class="portfolio-post-tile-logo" alt="Loft Digital" />
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="portfolio-tile portfolio-post-tile-2">
                        <a href="../project_two/">
                            <img src="<?php bloginfo('template_directory'); ?>/img/project-tiles/panacea.png" class="portfolio-post-tile-logo" alt="Panacea Publishing" />
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </div>
</div> <!-- ./content-container -->
