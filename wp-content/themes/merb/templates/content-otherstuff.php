<?php
/**
 * The feed landing content template
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
 $post_nine = $posts_array[8];


 /* Trims post title based on
 *  which block it's called in
 *
 *  @param String $post_title
 *  @param Int $post_title_char_limit
 *  @return String $formatted_post_title
 */
 function Titleify( $post_title, $post_title_char_limit ) {

     if ( $post_title_char_limit < strlen( $post_title ) ) {
         $ellipsis = '...';
     } else {
         $ellipsis = '';
     }

     $post_title = substr( $post_title, 0 , $post_title_char_limit ) . $ellipsis;
     return $post_title;
 }

 /* Trims excerpt to 40 chars
 *  and appends an ellipsis
 *
 *  @param String $post_content
 *  @return String $post_content
 */
 function Excerptify( $post_content, $post_content_char_limit ) {

     if ( $post_content_char_limit < strlen( $post_content ) ) {
         $ellipsis = '&mdash;';
     } else {
         $ellipsis = '';
     }

     $post_content = substr( $post_content, 0 , $post_content_char_limit ) . $ellipsis;
     return $post_content;
 }

 /* Get tags for each post
 *
 *  @param String $post_id
 *  @param Int $categoriy_limit
 *  @return Array $tags_array
 */
 function Categorical( $post_id, $categoriy_limit ) {

     // TODO: Implement a  " +(n) more" for posts
     // with more than 3 categories. On hover of text
     // popup other categories associated with post
     // in a nice way

     $categories_array = get_the_category( $post_id );

     $post_categories = array_slice( $categories_array, 0, $categoriy_limit, TRUE);
     return $post_categories;
 }

 function Dately( $post_id ) {
     $post_date_prepend = '<i class="fa fa-calendar-o feed-block-datetime-icon-calendar"></i>';
     $post_date = $post_date_prepend . get_post_time( 'M j, Y', true, $post_id );
     return $post_date;
 }

 function Timely( $post_id ) {
     $post_time_prepend = '<i class="fa fa-clock-o feed-block-datetime-icon-time"></i>';
     $post_time = $post_time_prepend . get_post_time( 'G:i', $post_id );
     return $post_time;
 }
?>

<div class="page-id" id="feedPage"></div>

<section id="heroBg" data-colour="#176612" class="section-hero">
    <div class="hero-wrapper">
        <div class="hero">
            <img src="<?php bloginfo('template_directory'); ?>/img/hero5.png" class="hero-image" alt="Hero image" />
        </div>
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title animated fadeIn">Welcome.</h1>
                <div class="animated fadeInRightBig">
                    <p class="feed-hero-text">I love deadlines. I love the whooshing noise they make as they go by.</p>
                    <p class="feed-hero-text-small">Douglas Adams, The Salmon of Doubt</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="content-container-feed">
    <div class="content-container-width">
        <section class="section-feed-posts animated fadeIn">
                <!-- Blocks for each post -->
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5">
                            <div class="feed-block clearfix">
                                <div class="feed-block-one">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <img src="https://placehold.it/230x252" alt="" />
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="feed-block-inner">
                                                <a class="feed-block-link" href="<?php the_permalink( $post_one["ID"] ); ?>">
                                                    <h4 class="feed-block-title">
                                                        <?php echo Titleify( $post_one["post_title"], 40); ?>
                                                    </h4>
                                                </a>

                                                <div class="feed-block-excerpt">
                                                    <p class="feed-block-excerpt-text">
                                                        <a class="feed-block-link" href="<?php the_permalink( $post_one["ID"] ); ?>">
                                                            <?php echo Excerptify( $post_one["post_excerpt"], 40 ); ?>
                                                            <span class="feed-block-read-more">&longrightarrow;</span>
                                                        </a>
                                                    </p>
                                                </div>

                                                <div class="feed-block-categories">
                                                    <ul class="feed-block-category-list">
                                                        <?php
                                                            $post_categories = Categorical( $post_one["ID"], 3 );
                                                            foreach ( $post_categories as $category ) {
                                                                $category = str_replace( ' ', '', $category->name );
                                                                echo "<li class='feed-block-category-item feed-block-category-item-" . strtolower( $category ) . "-inverse'>" . $category . "</li>";
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

                            <div class="feed-block">
                                <div class="feed-block-inner feed-block-inner-two">
                                    <div class="feed-block-two">
                                        <a class="feed-block-link" href="<?php the_permalink( $post_two["ID"] ); ?>">
                                            <h4 class="feed-block-title">
                                                <?php echo Titleify( $post_two["post_title"], 30 ); ?>
                                            </h4>
                                        </a>

                                        <div class="feed-block-excerpt">
                                            <p class="feed-block-excerpt-text">
                                                <a class="feed-block-link" href="<?php the_permalink( $post_two["ID"] ); ?>">
                                                    <?php echo Excerptify( $post_two["post_excerpt"], 45 ); ?>
                                                    <span class="feed-block-read-more">&longrightarrow;</span>
                                                </a>
                                            </p>
                                        </div>

                                        <div class="feed-block-categories">
                                            <ul class="feed-block-category-list">
                                                <?php
                                                    $post_categories = Categorical( $post_two["ID"], 3 );
                                                    foreach ( $post_categories as $category ) {
                                                        $category = str_replace( ' ', '', $category->name );
                                                        echo "<li class='feed-block-category-item feed-block-category-item-" . strtolower( $category ) . "-inverse'>" . $category . "</li>";
                                                    }
                                                ?>
                                            </ul>
                                        </div>

                                        <div class="feed-block-datetime feed-block-datetime-two">
                                            <p class="feed-block-date-text">
                                                <?php echo Dately( $post_two["ID"] ); ?>
                                            </p>
                                            <p class="feed-block-time-text">
                                                <?php echo Timely( $post_two["ID"] ); ?>
                                            </p>
                                        </div>

                                    </div>
                                </div> <!-- /.feed-block-inner -->
                            </div> <!-- /.feed-block -->

                            <div class="feed-block">
                                <div class="feed-block-inner feed-block-inner-three">
                                    <div class="feed-block-three">

                                        <a class="feed-block-link" href="<?php the_permalink( $post_three["ID"] ); ?>">
                                            <h4 class="feed-block-title">
                                                <?php echo Titleify( $post_three["post_title"], 30 ); ?>
                                            </h4>
                                        </a>

                                        <div class="feed-block-excerpt">
                                            <p class="feed-block-excerpt-text">
                                                <a class="feed-block-link" href="<?php the_permalink( $post_three["ID"] ); ?>">
                                                    <?php echo Excerptify( $post_three["post_excerpt"], 45 ); ?>
                                                    <span class="feed-block-read-more">&longrightarrow;</span>
                                                </a>
                                            </p>
                                        </div>

                                        <div class="feed-block-categories">
                                            <ul class="feed-block-category-list">
                                                <?php
                                                    $post_categories = Categorical( $post_three["ID"], 3 );
                                                    foreach ( $post_categories as $category ) {
                                                        $category = str_replace( ' ', '', $category->name );
                                                        echo "<li class='feed-block-category-item feed-block-category-item-" . strtolower( $category ) . "-inverse'>" . $category . "</li>";
                                                    }
                                                ?>
                                            </ul>
                                        </div>

                                        <div class="feed-block-datetime feed-block-datetime-two">
                                            <p class="feed-block-date-text">
                                                <?php echo Dately( $post_three["ID"] ); ?>
                                            </p>
                                            <p class="feed-block-time-text">
                                                <?php echo Timely( $post_three["ID"] ); ?>
                                            </p>
                                        </div>

                                    </div>
                                </div> <!-- /.feed-block-inner -->
                            </div> <!-- /.feed-block -->
                        </div>

                        <div class="col-lg-7">
                            <div class="feed-block">
                                <div class="feed-block-four">
                                    <div class="feed-block-four-image-container">
                                        <img src="https://placehold.it/1920x1080" class="feed-block-four-image" alt="" />
                                    </div>

                                    <div class="feed-block-inner feed-block-inner-four">

                                        <a class="feed-block-link" href="<?php the_permalink( $post_four["ID"] ); ?>">
                                            <h4 class="feed-block-title">
                                                <?php echo Titleify( $post_four["post_title"], 100 ); ?>
                                            </h4>
                                        </a>

                                        <div class="feed-block-excerpt">
                                            <p class="feed-block-excerpt-text">
                                                <a class="feed-block-link" href="<?php the_permalink( $post_four["ID"] ); ?>">
                                                    <?php echo Excerptify( $post_four["post_excerpt"], 300 ); ?>
                                                    <span class="feed-block-read-more">&longrightarrow;</span>
                                                </a>
                                            </p>
                                        </div>

                                        <div class="feed-block-categories feed-block-four-categories">
                                            <ul class="feed-block-category-list">
                                                <?php
                                                    $post_categories = Categorical( $post_four["ID"], 6 );
                                                    foreach ( $post_categories as $category ) {
                                                        $category = str_replace( ' ', '', $category->name );
                                                        echo "<li class='feed-block-category-item feed-block-category-item-" . strtolower( $category ) . "-inverse'>" . $category . "</li>";
                                                    }
                                                ?>
                                            </ul>
                                        </div>

                                        <div class="feed-block-datetime feed-block-datetime-four">
                                            <p class="feed-block-date-text">
                                                <?php echo Dately( $post_four["ID"] ); ?>
                                            </p>
                                            <p class="feed-block-time-text">
                                                <?php echo Timely( $post_four["ID"] ); ?>
                                            </p>
                                        </div>

                                    </div><!-- /.feed-block-inner -->

                                </div> <!-- /.feed-block-four -->
                            </div> <!-- /.feed-block -->
                        </div>

                    </div> <!-- /.row -->
                </div> <!-- /.container -->

                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="feed-block">
                                <div class="feed-block-five">
                                    <div class="feed-block-five-overlay">
                                        <div class="feed-block-five-image-container">
                                            <div class="feed-block-inner-five">
                                                <div class="feed-block-inner">

                                                    <a class="feed-block-link" href="<?php the_permalink( $post_five["ID"] ); ?>">
                                                        <h4 class="feed-block-title">
                                                            <?php echo Titleify( $post_five["post_title"], 100 ); ?>
                                                        </h4>
                                                    </a>

                                                    <div class="feed-block-excerpt">
                                                        <p class="feed-block-excerpt-text">
                                                            <a class="feed-block-link" href="<?php the_permalink( $post_five["ID"] ); ?>">
                                                                <?php echo Excerptify( $post_five["post_excerpt"], 300 ); ?>
                                                                <span class="feed-block-read-more">&longrightarrow;</span>
                                                            </a>
                                                        </p>
                                                    </div>

                                                    <div class="feed-block-categories feed-block-five-categories">
                                                        <ul class="feed-block-category-list">
                                                            <?php
                                                            $post_categories = Categorical( $post_five["ID"], 6 );
                                                            foreach ( $post_categories as $category ) {
                                                                $category = str_replace( ' ', '', $category->name );
                                                                echo "<li class='feed-block-category-item feed-block-category-item-" . strtolower( $category ) . "-inverse'>" . $category . "</li>";
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>

                                                    <div class="feed-block-datetime feed-block-datetime-five">
                                                        <p class="feed-block-date-text">
                                                            <?php echo Dately( $post_five["ID"] ); ?>
                                                        </p>
                                                        <p class="feed-block-time-text">
                                                            <?php echo Timely( $post_five["ID"] ); ?>
                                                        </p>
                                                    </div>

                                                </div> <!-- /.feed-block-inner -->

                                                <img src="https://placehold.it/1920x1080" class="feed-block-five-image" alt="" />

                                            </div> <!-- /.feed-block-inner-five -->

                                        </div> <!-- /.feed-block-five-image-container -->
                                    </div> <!-- /.feed-block-five-overlay -->
                                </div> <!-- /.feed-block-five -->
                            </div> <!-- /.feed-block -->
                        </div>

                    </div> <!-- /.row -->
                </div> <!-- /.container -->

                <div class="container">
                    <div class="row">

                        <div class="col-lg-7">
                            <div class="feed-block">
                                <div class="feed-block-six">
                                    <div class="feed-block-six-image-container">
                                        <img src="https://placehold.it/1920x1080" class="feed-block-six-image" alt="" />
                                    </div>

                                    <div class="feed-block-inner feed-block-inner-six">

                                        <a class="feed-block-link" href="<?php the_permalink( $post_six["ID"] ); ?>">
                                            <h4 class="feed-block-title">
                                                <?php echo Titleify( $post_six["post_title"], 100 ); ?>
                                            </h4>
                                        </a>

                                        <div class="feed-block-excerpt">
                                            <p class="feed-block-excerpt-text">
                                                <a class="feed-block-link" href="<?php the_permalink( $post_six["ID"] ); ?>">
                                                    <?php echo Excerptify( $post_six["post_excerpt"], 300 ); ?>
                                                    <span class="feed-block-read-more">&longrightarrow;</span>
                                                </a>
                                            </p>
                                        </div>

                                        <div class="feed-block-categories feed-block-six-categories">
                                            <ul class="feed-block-category-list">
                                                <?php
                                                    $post_categories = Categorical( $post_six["ID"], 6 );
                                                    foreach ( $post_categories as $category ) {
                                                        $category = str_replace( ' ', '', $category->name );
                                                        echo "<li class='feed-block-category-item feed-block-category-item-" . strtolower( $category ) . "-inverse'>" . $category . "</li>";
                                                    }
                                                ?>
                                            </ul>
                                        </div>

                                        <div class="feed-block-datetime feed-block-datetime-six">
                                            <p class="feed-block-date-text">
                                                <?php echo Dately( $post_six["ID"] ); ?>
                                            </p>
                                            <p class="feed-block-time-text">
                                                <?php echo Timely( $post_six["ID"] ); ?>
                                            </p>
                                        </div>

                                    </div><!-- /.feed-block-inner -->

                                </div> <!-- /.feed-block-six -->
                            </div> <!-- /.feed-block -->
                        </div>

                        <div class="col-lg-5">
                            <div class="feed-block">
                                <div class="feed-block-seven">
                                    <div class="row">

                                        <div class="feed-block-seven-inner-container">

                                            <div class="col-lg-6">
                                                <img src="https://placehold.it/230x320" class="feed-block-seven-image" alt="" />
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="feed-block-inner feed-block-inner-seven">
                                                    <a class="feed-block-link" href="<?php the_permalink( $post_seven["ID"] ); ?>">
                                                        <h4 class="feed-block-title">
                                                            <?php echo Titleify( $post_seven["post_title"], 40 ); ?>
                                                        </h4>
                                                    </a>

                                                    <div class="feed-block-excerpt">
                                                        <p class="feed-block-excerpt-text">
                                                            <a class="feed-block-link" href="<?php the_permalink( $post_seven["ID"] ); ?>">
                                                                <?php echo Excerptify( $post_seven["post_excerpt"], 70 ); ?>
                                                                <span class="feed-block-read-more">&longrightarrow;</span>
                                                            </a>
                                                        </p>
                                                    </div>

                                                    <div class="feed-block-categories feed-block-seven-categories">
                                                        <ul class="feed-block-category-list">
                                                            <?php
                                                                $post_categories = Categorical( $post_seven["ID"], 3 );
                                                                foreach ( $post_categories as $category ) {
                                                                    $category = str_replace( ' ', '', $category->name );
                                                                    echo "<li class='feed-block-category-item feed-block-category-item-" . strtolower( $category ) . "-inverse'>" . $category . "</li>";
                                                                }
                                                            ?>
                                                        </ul>
                                                    </div>

                                                    <div class="feed-block-datetime">
                                                        <p class="feed-block-date-text">
                                                            <?php echo Dately( $post_seven["ID"] ); ?>
                                                        </p>
                                                        <p class="feed-block-time-text">
                                                            <?php echo Timely( $post_seven["ID"] ); ?>
                                                        </p>
                                                    </div>

                                                </div> <!-- /.feed-block-inner -->
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /.feed-block-seven -->
                            </div> <!-- /.feed-block -->

                            <div class="feed-block">
                                <div class="feed-block-eight">
                                    <div class="row">

                                        <div class="feed-block-eight-inner-container">

                                            <div class="col-lg-6">
                                                <img src="https://placehold.it/230x320" class="feed-block-eight-image" alt="" />
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="feed-block-inner feed-block-inner-eight">
                                                    <a class="feed-block-link" href="<?php the_permalink( $post_eight["ID"] ); ?>">
                                                        <h4 class="feed-block-title">
                                                            <?php echo Titleify( $post_eight["post_title"], 40 ); ?>
                                                        </h4>
                                                    </a>

                                                    <div class="feed-block-excerpt">
                                                        <p class="feed-block-excerpt-text">
                                                            <a class="feed-block-link" href="<?php the_permalink( $post_eight["ID"] ); ?>">
                                                                <?php echo Excerptify( $post_eight["post_excerpt"], 70 ); ?>
                                                                <span class="feed-block-read-more">&longrightarrow;</span>
                                                            </a>
                                                        </p>
                                                    </div>

                                                    <div class="feed-block-categories feed-block-eight-categories">
                                                        <ul class="feed-block-category-list">
                                                            <?php
                                                                $post_categories = Categorical( $post_eight["ID"], 3 );
                                                                foreach ( $post_categories as $category ) {
                                                                    $category = str_replace( ' ', '', $category->name );
                                                                    echo "<li class='feed-block-category-item feed-block-category-item-" . strtolower( $category ) . "-inverse'>" . $category . "</li>";
                                                                }
                                                            ?>
                                                        </ul>
                                                    </div>

                                                    <div class="feed-block-datetime">
                                                        <p class="feed-block-date-text">
                                                            <?php echo Dately( $post_eight["ID"] ); ?>
                                                        </p>
                                                        <p class="feed-block-time-text">
                                                            <?php echo Timely( $post_eight["ID"] ); ?>
                                                        </p>
                                                    </div>

                                                </div> <!-- /.feed-block-inner -->
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /.feed-block-eight -->
                            </div> <!-- /.feed-block -->
                        </div>

                    </div> <!-- /.row -->
                </div> <!-- /.container -->

                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="feed-block">
                                <div class="feed-block-nine">
                                    <div class="feed-block-nine-overlay">
                                        <div class="feed-block-nine-image-container">
                                            <div class="feed-block-inner-nine">
                                                <div class="feed-block-inner">

                                                    <a class="feed-block-link" href="<?php the_permalink( $post_nine["ID"] ); ?>">
                                                        <h4 class="feed-block-title">
                                                            <?php echo Titleify( $post_nine["post_title"], 100 ); ?>
                                                        </h4>
                                                    </a>

                                                    <div class="feed-block-excerpt">
                                                        <p class="feed-block-excerpt-text">
                                                            <a class="feed-block-link" href="<?php the_permalink( $post_nine["ID"] ); ?>">
                                                                <?php echo Excerptify( $post_nine["post_excerpt"], 300 ); ?>
                                                                <span class="feed-block-read-more">&longrightarrow;</span>
                                                            </a>
                                                        </p>
                                                    </div>

                                                    <div class="feed-block-categories feed-block-nine-categories">
                                                        <ul class="feed-block-category-list">
                                                            <?php
                                                            $post_categories = Categorical( $post_nine["ID"], 6 );
                                                            foreach ( $post_categories as $category ) {
                                                                $category = str_replace( ' ', '', $category->name );
                                                                echo "<li class='feed-block-category-item feed-block-category-item-" . strtolower( $category ) . "-inverse'>" . $category . "</li>";
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>

                                                    <div class="feed-block-datetime feed-block-datetime-nine">
                                                        <p class="feed-block-date-text">
                                                            <?php echo Dately( $post_nine["ID"] ); ?>
                                                        </p>
                                                        <p class="feed-block-time-text">
                                                            <?php echo Timely( $post_nine["ID"] ); ?>
                                                        </p>
                                                    </div>

                                                </div> <!-- /.feed-block-inner -->

                                                <img src="https://placehold.it/1920x1080" class="feed-block-nine-image" alt="" />

                                            </div> <!-- /.feed-block-inner-nine -->

                                        </div> <!-- /.feed-block-nine-image-container -->
                                    </div> <!-- /.feed-block-nine-overlay -->
                                </div> <!-- /.feed-block-nine -->
                            </div> <!-- /.feed-block -->
                        </div>

                    </div> <!-- /.row -->
                </div> <!-- /.container -->

        </section>

        <section class="feed-load-more">
            <div class="feed-load-more-container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-large feed-load-more-button" type="button" id="feedLoadMore">Load more posts</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div> <!-- ./content-container-width -->
</div> <!-- ./content-container -->
