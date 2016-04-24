<?php
/**
 * Gallery block
 *
 * @package WordPress
 * @subpackage Merb
 */

?>

<div class="row">
    <div class="col-lg-12">
        <div class="project-gallery-container">

            <div class="project-gallery">
                <?php
                $images = get_sub_field('gallery');

                if( $images ): ?>
                    <ul>
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <a class="lightbox-link" href="<?php echo $image['url']; ?>" data-lightbox="projectLightbox" data-title="<?php echo $image['alt']; ?>" rel="lightbox[projectLightbox]">
                                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="project-gallery-caption-container">
                    <div class="project-gallery-caption">
                        <?php the_sub_field('gallery_caption'); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
