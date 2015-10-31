<?php
/**
 * The home page template
 *
 * @package WordPress
 * @subpackage merb
 * @since Twenty Fifteen 1.0
 */
?>

<section class="section-hero">
    <div class="hero">
        <img src="<?php bloginfo('template_directory'); ?>/img/hero1.png" class="hero-image" alt="Hero image" />
    </div>
    <div class="hero-container">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-4">
                <div class="hero-content">
                    <h1 class="hero-title">UI/UX Designer</h1>
                    <h1 class="hero-title">Front end developer</h1>
                    <p class="hero-text">I'm Marc, a London-based developer and coffee lover.</p>
                </div>
            </div>
            <div class="col-md-7">
            </div>
        </div>
    </div>
</section>

<div class="content-container">

    <section class="section-skills">
        <div class="skills">
            <div class="row">
                <div class="col-md-3">
                    <div class="knob-container">
                        <input class="knob" data-width="70%" data-readOnly=true data-rotation=anticlockwise data-fgColor="#C2954C" data-bgColor="#ffffff" data-min="0" data-max="100" data-thickness="0.2" data-displayPrevious=true value="88">
                    </div>
                    <div class="knob-text">
                        HTML5
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="knob-container">
                        <input class="knob" data-width="70%" data-readOnly=true data-rotation=anticlockwise data-fgColor="#72C8E0" data-bgColor="#ffffff" data-min="0" data-max="100" data-thickness="0.2" data-displayPrevious=true value="76">
                    </div>
                    <div class="knob-text">
                        CSS &amp; SCSS
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="knob-container">
                        <input class="knob" data-width="70%" data-readOnly=true data-rotation=anticlockwise data-fgColor="#22B98C" data-bgColor="#ffffff" data-min="0" data-max="100" data-thickness="0.2" data-displayPrevious=true value="82">
                    </div>
                    <div class="knob-text">
                        JavaScript
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="knob-container">
                        <input class="knob" data-width="70%" data-readOnly=true data-rotation=anticlockwise data-fgColor="#43518B" data-bgColor="#ffffff" data-min="0" data-max="100" data-thickness="0.2" data-displayPrevious=true value="80">
                    </div>
                    <div class="knob-text">
                        UI/UX &amp; Design
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="separator-hr" />

    <section class="section-about">
        <div class="about">
            <div class="row">
                <div class="col-md-5">
                    <div class="circular-image">
                        <img src="<?php bloginfo('template_directory'); ?>/img/me.jpg" class="image-me" alt="Marc Erbil" />
                    </div>
                </div>
                <div class="col-md-7">
                    <h2 class="about-title">A bit of $this, a bit of &lt;that&gt;</h2>
                    <p class="about-text">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
                    </p>
                </div>
                <!-- <div class="col-md-1">
                </div> -->
            </div>
        </div>
    </section>

    <hr class="separator-hr" />

    <section class="section-recent">

        <div class="recent-projects-title">
            <h3 class="recent-projects-title-text">Some of my recent work</h3>
        </div>

        <div class="row portfolio-row">

            <div class="col-md-6">
                <div class="portfolio-tile portfolio-post-tile-1">
                    <a href="../project_one/">
                        <img src="<?php bloginfo('template_directory'); ?>/img/project-tiles/loft.png" class="portfolio-post-tile-logo" alt="Loft Digital" />
                    </a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="portfolio-tile portfolio-post-tile-2">
                    <a href="../project_two/">
                        <img src="<?php bloginfo('template_directory'); ?>/img/project-tiles/panacea.png" class="portfolio-post-tile-logo" alt="Panacea Publishing" />
                    </a>
                </div>
            </div>

        </div>
    </section>

</div> <!-- ./page-container -->
