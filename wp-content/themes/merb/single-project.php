<?php
/**
 * The project template
 *
 * @package WordPress
 * @subpackage Merb
 */
?>

    <?php get_header(); ?>

        <div class="project-wrapper">

            <div class="page-id" id="projectPage"></div>

            <section class="section-project animated-project-page fadeIn">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12">

                            <div id="projectAjaxContent" class="fadeIn animated-ajax">

                                <div class="project-title-container">
                                    <h3 class="project-title">
                                        <?php the_title(); ?>
                                    </h3>
                                </div>

                                <div class="project-subtitle-container">
                                    <h5 class="project-subtitle">
                                        <?php the_field( 'subtitle' ); ?>
                                    </h5>
                                </div>

                                <hr class="project-title-hr" />

                                <?php
                                if( have_rows( 'projects_layout' ) ):

                                    while ( have_rows( 'projects_layout' ) ) : the_row();

                                        if( get_row_layout() == 'subheading' ):

                                            get_template_part( '/templates/blocks/project/block', 'subheading' );

                                        elseif( get_row_layout() == 'full_width_text' ):

                                            get_template_part( '/templates/blocks/project/block', 'full_width_text' );

                                        elseif( get_row_layout() == 'full_width_image' ):

                                            get_template_part( '/templates/blocks/project/block', 'full_width_image' );

                                        elseif( get_row_layout() == 'bulleted_list' ):

                                            get_template_part( '/templates/blocks/project/block', 'bulleted_list' );

                                        elseif( get_row_layout() == 'video' ):

                                            get_template_part( '/templates/blocks/project/block', 'video' );

                                        elseif( get_row_layout() == 'gallery' ):

                                            get_template_part( '/templates/blocks/project/block', 'gallery' );

                                        elseif( get_row_layout() == 'link' ):

                                            get_template_part( '/templates/blocks/project/block', 'link' );

                                        endif;

                                    endwhile;

                                else :

                                    echo 'No layouts found. Oh no!';

                                endif;
                                 ?>

                             </div>

                            <div class="row">

                                <div class="project-pagination-container">

                                    <div class="col-lg-6">
                                        <div class="project-pagination project-pagination-previous">
                                            <?php previous_post_link(); ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="project-pagination project-pagination-next">
                                            <?php next_post_link(); ?>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div> <!-- /.col-lg-6 col-lg-offset-6 -->

                    </div> <!-- /.row -->

                </div> <!-- /.container -->

            </section>

        </div> <!-- /.project-wrapper -->

<?php get_footer(); ?>
