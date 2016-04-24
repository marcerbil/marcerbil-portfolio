<?php
/**
 * The projects page template
 *
 * @package WordPress
 * @subpackage merb
 * @since Twenty Fifteen 1.0
 */

?>

<div class="page-id" id="projectsPage"></div>

<div class="splitscreen-page-content">
    <div class="row">

        <div class="col-lg-6">
            <div class="splitscreen-left-side">
                <div class="splitscreen-left-inner">
                    <div class="splitscreen-title-container">
                        <h3 class="splitscreen-title">Projects</h3>
                    </div>
                    <div class="splitscreen-subtitle-container">
                        <p class="splitscreen-subtitle">
                            These are some of the projects I’ve been a part of
                        </p>
                    </div>
                    <div class="splitscreen-list-container">
                        <ul class="splitscreen-list">

                            <?php
                                $projects = new WP_Query(
                                    array(
                                        'post_type' => 'project',
                                        'orderby' => 'date',
                                        'order'   => 'DESC'
                                        ));
                                if( $projects->have_posts() ) {
                                    while( $projects->have_posts() ) {
                                        $projects->the_post();
                                        $post_id = get_the_ID();
                            ?>
                            <?php $project_type = get_field( 'project_type' ); ?>
                            <a href="#" class="splitscreenAjaxLoad splitscreen-link" data-postname="<?php echo $post->post_name; ?>" alt="<?php echo $post->post_name; ?>">
                                <li id="<?php echo $project_type; ?>Item" class="splitscreen-list-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/<?php echo $project_type; ?>-ball.svg" class="splitscreen-key-image" />
                                    <?php the_title(); ?>
                                </li>
                            </a>
                            <?php
                                    }
                                } else {
                                  echo "Whoops, that shouldn\'t have happened! Please drop me an email at heymarcerbil@gmail.com with the subject: 'Projects page error'. Arigato yo :).";
                                }
                                wp_reset_postdata();
                            ?>

                        </ul>
                    </div>
                    <div class="splitscreen-key">
                        <ul class="splitscreen-key-list">

                            <div id="designFilter" class="project-filter-link">
                                <li class="splitscreen-key-list-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/design-ball.svg" class="splitscreen-key-image" />
                                    Design
                                </li>
                            </div>

                            <div id="developmentFilter" class="project-filter-link">
                                <li class="splitscreen-key-list-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/development-ball.svg" class="splitscreen-key-image" />
                                    Development
                                </li>
                            </div>

                            <div id="bothFilter" class="project-filter-link">
                                <li class="splitscreen-key-list-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/both-ball.svg" class="splitscreen-key-image" />
                                    Both
                                </li>
                            </div>

                        </ul>
                    </div>

                </div> <!-- /.splitscreen-left-side -->
            </div> <!-- /.splitscreen-left-side -->
        </div> <!-- /.col-lg-6 -->

        <div class="col-lg-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="splitscreen-ajax-project-content">
                            <div id="splitscreenAjaxContainer" class="splitscreen-right-side fadeIn animated-ajax">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- /.row -->
</div> <!-- /.splitscreen-page-content -->
