<?php
/**
 * The Creative Works page template
 *
 * @package WordPress
 * @subpackage merb
 * @since Twenty Fifteen 1.0
 */

?>

<div class="page-id" id="creativeworksPage"></div>

<div class="splitscreen-page-content fadeIn animated">
    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-5">

            <div class="splitscreen-selector-container">
                <button id="loadCreativeWorksDesign" class="splitscreen-selector">
                    Design
                </button>
                <button id="loadCreativeWorksIllustration" class="splitscreen-selector">
                    Illustration
                </button>
            </div>

            <div id="creativeworksDesign" class="splitscreen-left-side splitscreen-left-side-two-parter splitscreen-left-side--design">
                <div class="splitscreen-left-inner splitscreen-left-inner--creativeworks fadeIn animated">

                    <div class="splitscreen-title-container">
                        <h3 class="splitscreen-title">Designs</h3>
                    </div>
                    <div class="splitscreen-subtitle-container">
                        <p class="splitscreen-subtitle">
                            Just some of my designs for personal projects
                        </p>
                    </div>
                    <div class="splitscreen-list-container">

                        <!-- Design -->
                        <ul class="splitscreen-list">

                            <?php
                                $projects = new WP_Query(
                                    array(
                                        'post_type' => 'design',
                                        'orderby' => 'date',
                                        'order'   => 'DESC'
                                        ));
                                if( $projects->have_posts() ) {
                                    while( $projects->have_posts() ) {
                                        $projects->the_post();
                                        $post_id = get_the_ID();
                            ?>
                            <a href="#" class="splitscreenAjaxLoad splitscreen-link" data-postname="<?php echo $post->post_name; ?>" alt="<?php echo $post->post_name; ?>">
                                <li class="splitscreen-list-item">
                                    <?php the_title(); ?>
                                </li>
                            </a>
                            <?php
                                    }
                                } else {
                                  echo "Whoops, that shouldn\'t have happened! Please drop me an email at heymarcerbil@gmail.com with the subject: 'Design page error'. Arigato yo.";
                                }
                                wp_reset_postdata();
                            ?>

                        </ul>

                    </div>

                </div> <!-- /.splitscreen-left-side splitscreen-left-side-two-parter -->
            </div> <!-- /.splitscreen-left-side splitscreen-left-side-two-parter DESIGN -->

            <div id="creativeworksIllustration" class="splitscreen-left-side splitscreen-left-side-two-parter splitscreen-left-side--illustration ">
                <div class="splitscreen-left-inner splitscreen-left-inner--creativeworks fadeIn animated">

                    <div class="splitscreen-title-container">
                        <h3 class="splitscreen-title">Illustration</h3>
                    </div>
                    <div class="splitscreen-subtitle-container">
                        <p class="splitscreen-subtitle">
                            A combination of sketches, finished drawings &amp; illustrations
                        </p>
                    </div>
                    <div class="splitscreen-list-container">

                        <!-- Illustration -->
                        <ul class="splitscreen-list">

                            <?php
                                $projects = new WP_Query(
                                    array(
                                        'post_type' => 'illustration',
                                        'orderby' => 'date',
                                        'order'   => 'DESC'
                                        ));
                                if( $projects->have_posts() ) {
                                    while( $projects->have_posts() ) {
                                        $projects->the_post();
                                        $post_id = get_the_ID();
                            ?>
                            <a href="#" class="splitscreenAjaxLoad splitscreen-link" data-postname="<?php echo $post->post_name; ?>" alt="<?php echo $post->post_name; ?>">
                                <li class="splitscreen-list-item">
                                    <?php the_title(); ?>
                                </li>
                            </a>
                            <?php
                                    }
                                } else {
                                  echo "Whoops, that shouldn\'t have happened! Please drop me an email at heymarcerbil@gmail.com with the subject: 'Illustrations page error'. Arigato yo.";
                                }
                                wp_reset_postdata();
                            ?>

                        </ul>
                    </div>

                </div> <!-- /.splitscreen-left-side splitscreen-left-side-two-parter -->
            </div> <!-- /.splitscreen-left-side splitscreen-left-side-two-parter ILLUSTRATION-->
        </div> <!-- /.col-lg-6 -->

        <div id="splitscreenMobileContentContainer" class="splitscreen-mobile-content-container">
            <div id="closeSplitscreenModal" class="splitscreen-modal splitscreen-modal--project">
                <svg height="75" width="75">
                    <circle cx="35" cy="35" r="15" stroke="#222222" stroke-width="2" fill="#222222"></circle>
                    <line x1="27" y1="27" x2="43" y2="43" stroke-linecap="round" style="stroke:rgb(255,255,255); stroke-width:2"></line>
                    <line x1="43" y1="27" x2="27" y2="43" stroke-linecap="round" style="stroke:rgb(255,255,255); stroke-width:2"></line>
                    Sorry, your browser does not support inline SVG.
                </svg>
            </div>
            <div class="col-lg-8 col-md-4 col-sm-7">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="splitscreenPage">
                                <div id="splitscreen-ajax-project-content">
                                    <div id="splitscreenAjaxContainer" class="splitscreen-right-side fadeIn animated-ajax">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- /.row -->
</div> <!-- /.splitscreen-page-content -->
