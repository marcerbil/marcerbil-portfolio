<?php
/**
 * Full width text block
 *
 * @package WordPress
 * @subpackage Merb
 */

?>

<div class="row">
    <div class="col-lg-12">
        <div class="project-link-container">
            <a href="<?php the_sub_field('link'); ?>" alt="<?php the_sub_field( 'link_alt' ); ?>" class="project-link" target="_blank">
                <?php the_sub_field( 'link_text' ); ?>
            </a>
        </div>
    </div>
</div>
