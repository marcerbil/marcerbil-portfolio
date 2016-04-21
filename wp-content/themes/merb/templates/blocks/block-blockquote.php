<?php
/**
 * Blockquote block
 *
 * @package WordPress
 * @subpackage Merb
 */

?>

<div class="row">
    <div class="col-lg-12">
        <div class="post-blockquote-container">
            <blockquote class="post-blockquote">
                <?php the_sub_field('blockquote'); ?>
            </blockquote>
            <p class="post-blockquote-author">
                <?php the_sub_field('blockquote_author'); ?>
            </p>
        </div>
    </div>
</div>
