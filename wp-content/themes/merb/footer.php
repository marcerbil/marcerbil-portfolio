<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

    <footer id="colophon" class="site-footer" role="contentinfo">
        <section class="section-footer">
            <div class="row">
                <div class="col-xs-4">
                    <div class="copyright">
                        &copy; 2015 Marc Erbil
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="backtotop">
                        <a href="#top"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="col-xs-4">
                    <ul class="footer-nav">
                        <a href="<?php bloginfo( 'url' ); ?>"><li class="footer-nav-item">home</li></a>
                        <a href="<?php bloginfo( 'url' ); ?>/work/"><li class="footer-nav-item">work</li></a>
                        <a href="<?php bloginfo( 'url' ); ?>/contact/"><li class="footer-nav-item">contact</li></a>
                    </ul>
                </div>
            </div>
        </section>
    </footer><!-- .site-footer -->


<?php wp_footer(); ?>

</body>
</html>
