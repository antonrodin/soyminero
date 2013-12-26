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
    
    <div class="row">
        <div class="col-lg-6 col-lg-offset-6">
            <p class="soyminero-credits">
                <a href="https://github.com/antonrodin/soyminero"><i class="fa fa-github-square fa-2x"></i></a>&nbsp;
                <a href="http://jigsaw.w3.org/css-validator/check/referer"><i class="fa fa-css3 fa-2x"></i></a>&nbsp;
                <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.soyminero.es%2F"><i class="fa fa-html5 fa-2x"></i></a>&nbsp;
            </p>
        </div>
    </div>
</div>
</body>
</html>