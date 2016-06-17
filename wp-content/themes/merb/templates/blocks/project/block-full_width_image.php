<?php
/**
 * Full width image block
 *
 * @package WordPress
 * @subpackage Merb
 */
?>

<div class="row">
    <div class="col-lg-12">
        <div class="project-full-width-image-container">

            <?php

            $image = get_sub_field('full_width_image');

            if( !empty($image) ): ?>

            	<img src="<?php echo $image['url']; ?>" class="project-full-width-image" />

            <?php else:
                echo 'No images';

            endif; ?>

            <div class="project-full-width-image-caption-container">
                <p class="project-full-width-image-caption">
                    <?php the_sub_field('image_caption'); ?>
                </p>
            </div>
        </div>
    </div>
</div>