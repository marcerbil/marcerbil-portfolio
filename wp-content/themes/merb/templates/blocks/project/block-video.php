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
        <div class="project-video-container">

            <div class="project-video">
                <?php the_sub_field('video'); ?>
            </div>

            <div class="project-video-caption-container">
                <p class="project-video-caption">
                    <?php the_sub_field('video_caption'); ?>
                </p>
            </div>

        </div>
    </div>
</div>
