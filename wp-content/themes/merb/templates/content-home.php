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
</div> <!-- ./content-container -->

<section class="section-recent animated-slower fadeIn">

    <div class="recent-projects-title">
        <h3 class="recent-projects-title-text">Some of my recent work</h3>
    </div>

    <div class="row recent-row">

        <div class="col-lg-4">
            <div class="recent-card-container">
                <a class="recent-card-link" href="#">
                    <div class="recent-card recent-card--project">
                        <div class="recent-card-image-container">
                            <img class="recent-card-image" src="http://lorempixel.com/320/200" alt="" />
                        </div>
                        <div class="recent-card-title">
                            <h4>weareloft</h4>
                        </div>
                        <hr class="recent-card-hr">
                        <div class="recent-card-text-container">
                            <p class="recent-card-text">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                 Donec odio. Quisque volutpat mattis eros.
                                  Nullam malesuada erat ut turpis.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="recent-card-container">
                <a class="recent-card-link" href="#">
                    <div class="recent-card recent-card--design">
                        <div class="recent-card-image-container">
                            <img class="recent-card-image" src="http://lorempixel.com/320/200" alt="" />
                        </div>
                        <div class="recent-card-title">
                            <h4>Daily UI #002</h4>
                        </div>
                        <hr class="recent-card-hr">
                        <div class="recent-card-text-container">
                            <p class="recent-card-text">
                                Donec nec justo eget felis facilisis fermentum.
                                 Aliquam porttitor mauris sit amet orci.
                                 Aenean dignissim pellentesque felis.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="recent-card-container">
                <a class="recent-card-link" href="#">
                    <div class="recent-card recent-card--illustration">
                        <div class="recent-card-image-container">
                            <img class="recent-card-image" src="http://lorempixel.com/320/200" alt="" />
                        </div>
                        <div class="recent-card-title">
                            <h4>Manga Character</h4>
                        </div>
                        <hr class="recent-card-hr">
                        <div class="recent-card-text-container">
                            <p class="recent-card-text">
                                Morbi in sem quis dui placerat ornare.
                                Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam.
                                Sed arcu. Cras consequat.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div> <!-- /.row .recent-row -->
</section>
