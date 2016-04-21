<?php
/**
 * Video block
 *
 * @package WordPress
 * @subpackage Merb
 */

?>

<div class="row">
    <div class="col-lg-12">
        <div class="post-video-container">

            <div class="post-video">
                <?php the_sub_field('video'); ?>
            </div>

            <div class="post-video-caption-container">
                <p class="post-video-caption">
                    <?php the_sub_field('video_caption'); ?>
                </p>
            </div>

        </div>
    </div>
</div>
