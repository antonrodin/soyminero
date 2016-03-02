<?php
/**
 * Post template
 */
get_header(); ?>

<div class="container hidden-sm hidden-xs">
    <!-- Begin Rich Snippets -->
    <ol class="breadcrumb text-small">
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
     <div class="col-md-8 col-sm-12">
    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header> 
                <h1><?php the_title(); ?></h1>
                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                <div class="entry-thumbnail">
                    <?php the_post_thumbnail('full', array('class' => 'img-responsive img-border-top-bottom')); ?>
                </div>
                <?php endif; ?>
                
                <div class="post_meta">
                    <?php the_tags( "<span class='label label-warning'>", "</span> <span class='label label-warning'>", "</span>" ); ?>
                </div>
                
            </header><!-- page header -->
            
            <div>
                <p>&nbsp;</p>
            </div>

            <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'soyminero' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
            </div><!-- end content -->

            <footer>
                
                <div class="addthis_sharing_toolbox"></div>
                
                <!-- Begin Author -->
                <div class="media soyminero-autor">
                    <a class="pull-left" href="<?php the_author_meta('url'); ?>"><?php echo get_avatar( get_the_author_meta('ID'), '96' ); ?></a>
                    <div class="media-body">
                        <h4 class="media-heading"> <a href="<?php the_author_meta('url'); ?>" title="<?php the_author(); ?>"><i class="fa fa-user"></i> <?php the_author(); ?></a></h4>
                        <p><?php the_author_meta('description'); ?></p>
                    </div>
                </div><!-- End Author -->
                
                <?php edit_post_link( __( 'Edit', 'soyminero' ), '<span class="edit-link">', '</span>' ); ?>
            </footer><!-- footer comments -->
            
            <?php comments_template(); ?> 
            
        </article><!-- #page -->
    <?php endwhile; ?>

    </div>
    
    <div class="col-md-4 col-sm-12">
        <?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-right' ); ?>
        <?php endif; ?>
    </div>
</div>
</div><!-- End Container -->
<?php get_footer(); ?>