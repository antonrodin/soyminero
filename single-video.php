<?php
/**
 * Post template
 */
get_header(); ?>

<div class="container margin-top-60">
<div class="row">
    <div class="col-lg-8">
    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header>
                <h1 class="titulo-principal text-center"><?php the_title(); ?></h1>
            </header>   
            
            <div>
                <p>&nbsp;</p>
            </div>

            <div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'soyminero' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
            </div><!-- end content -->

            <footer>
                   
                <!-- Begin Author -->
                <div class="margin-top-40"></div>
                <div class="media">
                    <script>
                                    $(function() {
                                        $(".avatar").addClass('media-object img-rounded')
                                    });
                    </script>
                    <a class="pull-left" href="<?php the_author_meta('url'); ?>"><?php echo get_avatar( get_the_author_meta('ID'), '96' ); ?></a>
                    <div class="media-body">
                        <h4 class="media-heading"> <a href="<?php the_author_meta('url'); ?>" title="<?php the_author(); ?>"><i class="fa fa-user"></i> <?php the_author(); ?></a></h4>
                        <p><?php the_author_meta('description'); ?></p>
                    </div>
                </div><!-- End Author -->
                
                <?php edit_post_link( __( 'Edit', 'soyminero' ), '<span class="edit-link">', '</span>' ); ?>
            </footer><!-- footer comments -->
        </article><!-- #page -->
    <?php endwhile; ?>

    </div>
    <div class="col-lg-4">
        
        
            
        <!-- Right Sidebar -->
        <?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-right' ); ?>
        <?php endif; ?>
    </div>
</div>
</div><!-- End Container -->
<?php get_footer(); ?>