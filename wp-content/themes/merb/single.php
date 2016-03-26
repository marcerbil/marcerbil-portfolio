<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Merb
 */
?>

    <?php get_header(); ?>


            <div class="page-id" id="postPage"></div>

            <section id="heroBg" data-colour="#660000" class="section-hero">
                <div class="post-hero">
                    <div class="post-hero-image">
                        <?php the_post_thumbnail( 'full' ); ?>
                    </div>
                </div>
                <div class="hero-container">
                    <div class="hero-content animated fadeIn">
                        <?php the_title( '<h3 class="hero-title">', '</h3>' ); ?>
                        <p class="hero-text"><?php the_field('post_hero_subtitle'); ?></p>
                    </div>


                </div>
            </section>

            <section class="section-post">

                <div class="container">

                    <?php
                    // check if the flexible content field has rows of data
                    if( have_rows( 'posts_layout' ) ):

                         // loop through the rows of data
                        while ( have_rows( 'posts_layout' ) ) : the_row();

                            if( get_row_layout() == 'subheading' ):

                                get_template_part( '/templates/blocks/block', 'subheading' );

                            elseif( get_row_layout() == 'full_width_text' ):

                                get_template_part( '/templates/blocks/block', 'full_width_text' );

                            elseif( get_row_layout() == 'full_width_image' ):

                                get_template_part( '/templates/blocks/block', 'full_width_image' );

                            elseif( get_row_layout() == 'blockquote' ):

                                get_template_part( '/templates/blocks/block', 'blockquote' );

                            elseif( get_row_layout() == 'video' ):

                                get_template_part( '/templates/blocks/block', 'video' );

                            elseif( get_row_layout() == 'gallery' ):

                                get_template_part( '/templates/blocks/block', 'gallery' );

                            endif;

                        endwhile;

                    else :

                        // no layouts found

                    endif;
                     ?>

                </div> <!-- /.container -->

            </section>

<?php get_footer(); ?>
