<?php
/**
 * The blog landing content template
 *
 * @package WordPress
 * @subpackage merb
 * @since Twenty Fifteen 1.0
 */

 /** The feed controller
 *
 **/

 $recent_posts = wp_get_recent_posts();
 $posts_array = [];

 foreach( $recent_posts as $recent ) {
     array_push($posts_array, $recent);
 }

 $post_one = $posts_array[0];
 $post_two = $posts_array[1];
 $post_three = $posts_array[2];
 $post_four = $posts_array[3];
 $post_five = $posts_array[4];
 $post_six = $posts_array[5];
 $post_seven = $posts_array[6];
 $post_eight = $posts_array[7];


 /* Trims excerpt to 40 chars
 *  and appends an ellipsis
 *
 *  @param String $post_content
 *  @return String $post_content
 */
 function Excerptify( $post_content ) {
     $post_content = substr( $post_content, 0 , 40 ) . "...";
     return $post_content;
 }

 /* Get tags for each post
 *
 *  @param String $post_id
 *  @return Array $tags_array
 */
 function Categorical( $post_id ) {
     $categories_array = get_the_category( $post_id );
     $post_categories = array_slice( $categories_array, 0, 3, TRUE);
     return $post_categories;
 }

 function Dately( $post_id ) {
     $post_date = get_post_time( 'M j, Y', true, $post_id );
     return $post_date;
 }

 function Timely( $post_id ) {
     $post_time = get_post_time( 'G:i', $post_id );
     return $post_time;
 }
?>

<div class="page-id" id="blogPage"></div>

<section id="heroBg" data-colour="#176612" class="section-hero">
    <div class="hero-wrapper">
        <div class="hero">
            <img src="<?php bloginfo('template_directory'); ?>/img/hero5.png" class="hero-image" alt="Hero image" />
        </div>
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title animated fadeIn">Welcome.</h1>
                <div class="animated fadeInRightBig">
                    <p class="blog-hero-text">I love deadlines. I love the whooshing noise they make as they go by.</p>
                    <p class="blog-hero-text-small">Douglas Adams, The Salmon of Doubt</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="content-container-blog">
    <div class="content-container-width">
        <section class="section-blog-posts animated fadeIn">
                <!-- Blocks for each post -->
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5">
                            <a href="<?php the_permalink( $post_one["ID"] ); ?>">
                                <div class="feed-block">
                                    <div class="feed-block-one">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <img src="https://placehold.it/230x250" alt="" />
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="feed-block-inner">
                                                    <h4 class="feed-block-title">
                                                        <?php echo $post_one["post_title"]; ?>
                                                    </h4>

                                                    <div class="feed-block-excerpt">
                                                        <p class="feed-block-excerpt-text">
                                                            <?php echo Excerptify( $post_one["post_excerpt"] ); ?>
                                                        </p>
                                                    </div>

                                                    <div class="feed-block-categories">
                                                        <ul class="feed-block-category-list">
                                                            <?php
                                                                $post_categories = Categorical( $post_one["ID"] );
                                                                foreach ( $post_categories as $category ) {
                                                                    echo "<li class='feed-block-category-item feed-block-category-item-" . strtolower( $category->name ) . "'>" . $category->name . "</li>";
                                                                }
                                                            ?>
                                                        </ul>
                                                    </div>

                                                    <div class="feed-block-datetime">
                                                        <p class="feed-block-date-text">
                                                            <?php echo Dately( $post_one["ID"] ); ?>
                                                        </p>
                                                        <p class="feed-block-time-text">
                                                            <?php echo Timely( $post_one["ID"] ); ?>
                                                        </p>
                                                    </div>

                                                </div> <!-- /.feed-block-inner -->
                                            </div>
                                        </div>
                                    </div> <!-- /.feed-block-one -->
                                </div> <!-- /.feed-block -->
                            </a>

                            <div class="feed-block">
                                <div class="feed-block-inner">
                                    <div class="feed-block-two">
                                        two
                                    </div>
                                </div> <!-- /.feed-block-inner -->
                            </div> <!-- /.feed-block -->

                            <div class="feed-block">
                                <div class="feed-block-inner">
                                    <div class="feed-block-three">
                                        three
                                    </div>
                                </div> <!-- /.feed-block-inner -->
                            </div> <!-- /.feed-block -->
                        </div>

                        <div class="col-lg-7">
                            <div class="feed-block">
                                <div class="feed-block-inner">
                                    <div class="feed-block-four">
                                        four
                                    </div>
                                </div> <!-- /.feed-block-inner -->
                            </div> <!-- /.feed-block -->
                        </div>

                    </div> <!-- /.row -->
                </div> <!-- /.container -->

                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="feed-block">
                                <div class="feed-block-inner">
                                    <div class="feed-block-five">
                                        five
                                    </div>
                                </div> <!-- /.feed-block-inner -->
                            </div> <!-- /.feed-block -->
                        </div>

                    </div> <!-- /.row -->
                </div> <!-- /.container -->

                <div class="container">
                    <div class="row">

                        <div class="col-lg-7">
                            <div class="feed-block">
                                <div class="feed-block-inner">
                                    <div class="feed-block-six">
                                        five
                                    </div>
                                </div> <!-- /.feed-block-inner -->
                            </div> <!-- /.feed-block -->
                        </div>

                        <div class="col-lg-5">
                            <div class="feed-block">
                                <div class="feed-block-inner">
                                    <div class="feed-block-seven">
                                        five
                                    </div>
                                </div> <!-- /.feed-block-inner -->
                            </div> <!-- /.feed-block -->

                            <div class="feed-block">
                                <div class="feed-block-inner">
                                    <div class="feed-block-eight">
                                        five
                                    </div>
                                </div> <!-- /.feed-block-inner -->
                            </div> <!-- /.feed-block -->
                        </div>

                    </div> <!-- /.row -->
                </div> <!-- /.container -->

                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="feed-block">
                                <div class="feed-block-inner">
                                    <div class="feed-block-nine">
                                        five
                                    </div>
                                </div> <!-- /.feed-block-inner -->
                            </div> <!-- /.feed-block -->
                        </div>

                    </div> <!-- /.row -->
                </div> <!-- /.container -->

        </section>
    </div> <!-- ./content-container-width -->
</div> <!-- ./content-container -->
