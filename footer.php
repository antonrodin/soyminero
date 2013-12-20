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
</body>
</html>