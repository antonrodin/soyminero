<?php
    /*
        Template Name: Portada
    */
    get_header();
?> 

<div class="container">
    <div class="jumbotron row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-sx-12">
        <h1><?php echo get_theme_mod('jumbotron_title', '¡Jumbotron Title!'); ?></h1>
            <p>
                <?php echo get_theme_mod('jumbotron_description', 'Descripción que hay que editar desde la pagina de customización de la plantilla...'); ?>
            </p>
        </div>
        <div class="col-lg-4 hidden-md hidden-xs hidden-sm">
            <img class="img-responsive pull-right" alt="A/A Portátil" src="<?php echo get_template_directory_uri(); ?>/img/soy-minero.png">
        </div>
    </div>
</div>

<div class="container"><div class="row">
        
            <div class="col-md-8 col-sm-12 col-xs-12">
            <?php query_posts('posts_per_page=4'); ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                <div class="media">
                    <div class="media-left">
                        <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php
                            $post_title = get_the_title();
                            if ( has_post_thumbnail()) {
                              echo get_the_post_thumbnail($post->ID, "large", array( 'class' => 'media-object thumbnail', 'alt' => "{$post_title}" )); 
                            }
                        ?>
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?>
                        </a></h4>
                        <p>Publicado <?php the_time('F jS, Y') ?> en la categoría <strong><?php the_category(' '); ?></strong></p>
                        <?php the_excerpt(); ?>
                    </div>
                </div>

                <?php endwhile; else: ?>
                <p><?php _e('No se ha encontrado ninguna entrada'); ?></p>
                <?php endif; ?>
                
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12">
                <?php mostrar_adsense_responsivo(); ?>     
                <!-- Right Sidebar -->
                <?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
                    <?php dynamic_sidebar( 'sidebar-right' ); ?>
                <?php endif; ?>
            </div>
        
</div></div>

<?php get_footer(); ?>