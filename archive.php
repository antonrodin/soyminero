<?php
/**
 * Default page themplate
 * Designed for soy minero theme
 */

get_header(); ?>

<div class="container hidden-sm hidden-xs">
    <!-- Begin Rich Snippets -->
    <ol class="breadcrumb">
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="<?php bloginfo('url'); ?>" itemprop="url" title="<?php bloginfo('name'); ?>"><span itemprop="title">Portada</span></a>
            </li> 
            <?php 
                    $cat_array = get_the_category();
                    $cat = $cat_array[0];
            ?>
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="<?php echo get_category_link($cat->cat_ID); ?>" itemprop="url" title="<?php echo $cat->cat_name; ?>"><span itemprop="title"><?php echo $cat->cat_name; ?></span></a>
            </li>
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="<?php echo get_permalink(); ?>" itemprop="url" title="<?php the_title(); ?>"><span itemprop="title"><?php the_title(); ?></span></a>
            </li>
    </ol>
</div>

<div class="container">
<div class="row">
    
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

    <p>&nbsp;</p>

    </div>
    <div class="col-lg-4">
        <?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-right' ); ?>
        <?php endif; ?>
    </div>
</div>
</div><!-- End Container -->
<?php get_footer(); ?>