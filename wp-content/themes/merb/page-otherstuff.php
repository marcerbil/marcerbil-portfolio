<?php
/**
 * Feed page
 *
 * @package WordPress
 * @subpackage merb
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php get_template_part( 'templates/content', 'otherstuff' ); ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
