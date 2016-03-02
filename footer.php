<footer><div id="footer" class="container-fluid"><div class="container">
        <div class="row">
                <?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <?php dynamic_sidebar( 'footer-left' ); ?>
                    </div><!-- #secondary -->
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
                    <div class="col-lg-6  col-sm-12 col-xs-12">
                        <?php dynamic_sidebar( 'footer-right' ); ?>
                    </div><!-- #secondary -->
                <?php endif; ?>
        </div>
        
        <p>&nbsp;</p>
    
        <div class="row">
            <div class="col-lg-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img class="pull-left" width="80" height="80" src="<?php echo bloginfo('template_url'); ?>/img/logotipo.png" alt="Logotipo" />
                <p><small>
                   <?php echo get_theme_mod('footer_left', 'Opción por defecto: Footer left'); ?>
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <p><small>
                    <?php echo get_theme_mod('footer_right', 'Opción por defecto: Footer right'); ?>
                </p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p class="soyminero-credits">
                    <a href="https://github.com/antonrodin/soyminero"><i class="fa fa-github-square fa-2x"></i></a>&nbsp;
                    <a href="http://jigsaw.w3.org/css-validator/check/referer"><i class="fa fa-css3 fa-2x"></i></a>&nbsp;
                    <a href="http://validator.w3.org/check/referer"><i class="fa fa-html5 fa-2x"></i></a>&nbsp;
                </p>
            </div>
        </div>
        
        <p>&nbsp;</p>
        
    </div>
</div><!-- Container Footer -->
</footer>
<?php wp_footer(); ?>

<!-- Begin JavaScript --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5390321966f4f2e0" async="async"></script>
<!-- End JavaScript -->
</body>
</html>