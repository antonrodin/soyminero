<?php get_header(); ?>

<div class="row">
    
    <!-- Custom Page about Bitcoins -->
    <div class="col-lg-6">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    </div>

    <!-- Video Blog -->
    <div class="col-lg-6">
        <!-- Nothing -->
    </div>
    
</div>

<?php get_footer(); ?>