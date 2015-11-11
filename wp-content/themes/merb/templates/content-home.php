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
    <div class="hero">
        <img src="<?php bloginfo('template_directory'); ?>/img/hero1.png" class="hero-image" alt="Hero image" />
    </div>
    <div class="hero-container">
        <div class="hero-content-home animated fadeIn">
            <h1 class="hero-title">UI/UX Designer</h1>
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
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="circular-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/me.jpg" class="image-me" alt="Marc Erbil" />
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="about-text-container">
                            <h2 class="about-title">A bit of $this, a bit of &lt;that&gt;</h2>
                            <p class="about-text">
                                I'm Marc, a 21-year old designer and developer. I love being creative through a number of different mediums - graphic art, music and writing to name a few - so in my spare time I like to draw, play guitar and read (a lot). I also love
                                to try new things, whether that be learning a language or picking up an interesting hobby.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="separator-hr" />

        <section class="section-skills animated-slower fadeIn">
            <div class="skills">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="skillbar clearfix" data-percent="88%">
                            <div class="skillbar-title"><span>HTML5</span></div>
                            <div class="skillbar-bar skillbar-bar-one"></div>
                            <div class="skill-bar-percent">88%</div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="skillbar clearfix " data-percent="82%">
                            <div class="skillbar-title"><span>CSS &amp; SCSS</span></div>
                            <div class="skillbar-bar skillbar-bar-two"></div>
                            <div class="skill-bar-percent">82%</div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="skillbar clearfix " data-percent="76%">
                            <div class="skillbar-title"><span>Javascript</span></div>
                            <div class="skillbar-bar skillbar-bar-three"></div>
                            <div class="skill-bar-percent">76%</div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="skillbar clearfix " data-percent="80%">
                            <div class="skillbar-title"><span>UI/UX &amp; Design</span></div>
                            <div class="skillbar-bar skillbar-bar-four"></div>
                            <div class="skill-bar-percent">80%</div>
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
