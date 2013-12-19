<?php
/**
 * Default page themplate
 * Designed for soy minero theme
 */

get_header(); ?>

<div class="row">
    <div class="col-lg-8">
    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header>
                
                <h1 class="text-center"><?php the_title(); ?></h1>
                
                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail">
                    <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
		</div>
		<?php endif; ?>
                
            </header><!-- page header -->
            
            <div>
                <p>&nbsp;</p>
            </div>

            <div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'soyminero' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
            </div><!-- end content -->

            <footer>
                <?php edit_post_link( __( 'Edit', 'soyminero' ), '<span class="edit-link">', '</span>' ); ?>
            </footer><!-- footer comments -->
        </article><!-- #page -->
    <?php endwhile; ?>

    </div>
    <div class="col-lg-4">
        <?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-right' ); ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>