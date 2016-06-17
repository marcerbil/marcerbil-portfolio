<?php
/**
 * The template for displaying the creative works
 *
 * @package Merb
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php get_template_part( 'templates/content', 'creative-works' ); ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

    <script src="<?php bloginfo( 'template_directory' ); ?>/js/lightbox/js/lightbox.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/js/lightbox/css/lightbox.css">

</body>
</html>
