<?php
/**
 * Default page themplate
 * Designed for soy minero theme
 */

get_header(); ?>

<div class="container margin-top-60">
<div class="row">
    
    <div class="col-md-8 col-sm-12">
    
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

    <p>&nbsp;</p>

    </div>
    <div class="col-md-4 col-sm-12">
        <?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-right' ); ?>
        <?php endif; ?>
    </div>
</div>
</div><!-- End Container -->
<?php get_footer(); ?>