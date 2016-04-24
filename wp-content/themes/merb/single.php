<?php
/**
 * The post template
 *
 * @package WordPress
 * @subpackage Merb
 */
?>

    <?php get_header(); ?>

        <div class="post-wrapper">

            <div class="page-id" id="postPage"></div>

            <section id="heroBg" data-colour="#660000" class="section-hero-post">
                <div class="post-hero">
                    <div class="post-hero-image">
                        <?php the_post_thumbnail( 'full' ); ?>
                    </div>
                </div>
                <div class="post-hero-container">
                    <div class="hero-content animated fadeIn">
                        <?php the_title( '<h3 class="hero-title-blog">', '</h3>' ); ?>
                        <div class="hero-text-blog">
                            <div class="post-hero-meta-category">
                                <?php the_category(); ?>
                            </div>
                        </div>
                        <hr class="post-hero-hr" />
                    </div>

                    <div class="post-hero-meta">

                            <?php
                                $tags = get_tags();
                                $html = '<div class="post-hero-meta-tags">';
                                foreach ( $tags as $tag ) {
                                    $tag_link = get_tag_link( $tag->term_id );

                                    $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='post-hero-meta-tag-item post-hero-meta-tag-{$tag->slug}-inverse'>";
                                    $html .= "{$tag->name}</a>";
                                }
                                $html .= '</div>';
                                echo $html;
                            ?>
                    </div>
                </div>
            </section>

            <section class="section-post animated-blog fadeIn">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12">

                            <div class="post-meta">

                                <div class="row">

                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-6">
                                        <div class="post-meta-avatar">
                                            <?php
                                            $author_bio_avatar_size = apply_filters( 'twentyfifteen_author_bio_avatar_size', 56 );

                                            echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
                                            ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-6">

                                        <div class="post-meta-author clearfix">
                                            <p>
                                                <?php the_author(); ?>
                                            </p>
                                        </div>
                                        <div class="post-meta-date clearfix">
                                            <p>
                                                <?php the_date( 'dS F Y' ); ?>
                                            </p>
                                        </div>

                                    </div> <!-- /.col-lg-11 col-md-11 col-sm-11 col-xs-11 -->

                                </div> <!-- /.row -->

                            </div>

                        <?php
                        // check if the flexible content field has rows of data
                        if( have_rows( 'posts_layout' ) ):

                             // loop through the rows of data
                            while ( have_rows( 'posts_layout' ) ) : the_row();

                                if( get_row_layout() == 'subheading' ):

                                    get_template_part( '/templates/blocks/post/block', 'subheading' );

                                elseif( get_row_layout() == 'full_width_text' ):

                                    get_template_part( '/templates/blocks/post/block', 'full_width_text' );

                                elseif( get_row_layout() == 'full_width_image' ):

                                    get_template_part( '/templates/blocks/post/block', 'full_width_image' );

                                elseif( get_row_layout() == 'blockquote' ):

                                    get_template_part( '/templates/blocks/post/block', 'blockquote' );

                                elseif( get_row_layout() == 'video' ):

                                    get_template_part( '/templates/blocks/post/block', 'video' );

                                elseif( get_row_layout() == 'gallery' ):

                                    get_template_part( '/templates/blocks/post/block', 'gallery' );

                                endif;

                            endwhile;

                        else :

                            // no layouts found

                        endif;
                         ?>

                        </div> <!-- /.col-lg-6 col-lg-offset-6 -->

                    </div> <!-- /.row -->

                </div> <!-- /.container -->

                <hr class="post-end-hr" />

            </section>

        </div> <!-- /.post-wrapper -->

        <section class="section-comments">
            <div class="container">
                <div class="col-lg-10 col-lg-offset-1">
                    <?php comments_template(); ?>
                </div>
            </div>
        </section>



<?php get_footer(); ?>
