<?php
/**
 * The work page template
 *
 * @package WordPress
 * @subpackage merb
 * @since Twenty Fifteen 1.0
 */
?>

<div class="page-id" id="workPage"></div>

<section id="heroBg" data-colour="#B4AE99" class="section-hero">
    <div class="hero">
        <img src="<?php bloginfo('template_directory'); ?>/img/hero2.png" class="hero-image" alt="Hero image" />
    </div>
    <div class="hero-container">
        <div class="hero-content animated fadeIn">
            <h1 class="hero-title">The place where design</h1>
            <h1 class="hero-title">meets development</h1>
            <p class="hero-text">User-oriented design &amp; development. It's all about you.</p>
        </div>
    </div>
</section>

<div class="content-container">
    <div class="content-container-width-work">

        <section class="section-projects animated fadeIn">

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

            <div class="row portfolio-row">

                <div class="col-md-6">
                    <div class="portfolio-tile portfolio-post-tile-3">
                        <a href="../project_three/">
                            <img src="<?php bloginfo('template_directory'); ?>/img/project-tiles/olam.png" class="portfolio-post-tile-logo" alt="Olam" />
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="portfolio-tile portfolio-post-tile-4">
                        <a href="../project_four/">
                            <img src="<?php bloginfo('template_directory'); ?>/img/project-tiles/mdmarketing.png" class="portfolio-post-tile-logo" alt="MD Marketing" />
                        </a>
                    </div>
                </div>

            </div>

            <div class="row portfolio-row">

                <div class="col-md-6">
                    <div class="portfolio-tile portfolio-post-tile-5">
                        <a href="../project_five/">
                            <img src="<?php bloginfo('template_directory'); ?>/img/project-tiles/bigidea.png" class="portfolio-post-tile-logo" alt="Big Idea Marketing" />
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="portfolio-tile portfolio-post-tile-6">
                        <a href="../project_six/">
                            <img src="<?php bloginfo('template_directory'); ?>/img/project-tiles/bpsi.png" class="portfolio-post-tile-logo" alt="BPSI Apps" />
                        </a>
                    </div>
                </div>

            </div>

        </section>

    </div> <!-- ./content-container-width -->
</div> <!-- ./content-container -->
