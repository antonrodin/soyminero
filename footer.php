    </div><!-- end container -->
    
    <div id="footer">
        <div class="container">
            <div class="row">
                <?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
                    <div class="col-lg-6">
                        <?php dynamic_sidebar( 'footer-left' ); ?>
                    </div><!-- #secondary -->
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
                    <div class="col-lg-6">
                        <?php dynamic_sidebar( 'footer-right' ); ?>
                    </div><!-- #secondary -->
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    
    <!-- Loading JavaScript Libs for perfomance -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
</body>
</html>