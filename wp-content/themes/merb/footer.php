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
            <div class="footer-inner-wrapper">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <ul class="footer-nav">

                                <div class="row">
                                    <div class="footer-item">
                                        <div class="col-lg-2 col-lg-offset-1">
                                            <a href="<?php bloginfo( 'url' ); ?>" nofollow><li id="footerHome" class="footer-nav-item">home</li></a>
                                        </div>
                                    </div>

                                    <div class="footer-item">
                                        <div class="col-lg-2">
                                            <a href="<?php bloginfo( 'url' ); ?>/projects/" nofollow><li id="footerProjects" class="footer-nav-item">projects</li></a>
                                        </div>
                                    </div>

                                    <div class="footer-item">
                                        <div class="col-lg-2">
                                            <div class="backtotop">
                                                <a href="#" id="backtotop" nofollow><i class="glyphicon glyphicon-chevron-up"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="footer-item">
                                        <div class="col-lg-2">
                                            <a href="<?php bloginfo( 'url' ); ?>/creative-works/" nofollow><li id="footerCreativeworks" class="footer-nav-item">creative works</li></a>
                                        </div>
                                    </div>

                                    <div class="footer-item">
                                        <div class="col-lg-2">
                                            <a href="<?php bloginfo( 'url' ); ?>/blog/" nofollow><li id="footerBlog" class="footer-nav-item">blog</li></a>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-lg-offset-4">
                                        <div class="copyright">
                                            &copy; 2016
                                        </div>
                                    </div>
                                </div>

                            </ul> <!-- /.footer-nav -->
                        </div> <!-- /.col-lg-12 -->

                    </div> <!-- /.row -->


                </div> <!-- /.container -->
            </div> <!-- /.footer-inner-wrapper -->
        </section>
    </footer><!-- .site-footer -->


    <?php wp_footer(); ?>


</div> <!-- /.cbp-spmenu-push-->

    <script src="<?php bloginfo( 'template_directory' ); ?>/js/lightbox/js/lightbox.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/js/lightbox/css/lightbox.css">

</body>
</html>
