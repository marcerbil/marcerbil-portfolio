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
        <div class="post-gallery-container">

            <?php
            $images = get_sub_field('gallery');

            if( $images ): ?>
                <ul>
                    <?php foreach( $images as $image ): ?>
                        <li>
                            <a href="<?php echo $image['url']; ?>">
                                 <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="post-gallery-caption-container">
                <p class="post-gallery-caption">
                    <?php the_sub_field('gallery_caption'); ?>
                </p>
            </div>
        </div>
    </div>
</div>
