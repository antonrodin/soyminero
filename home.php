<?php 
    /* 
    * Template Name: Home 
    */

get_header(); ?>

<div class="row">
    <div class="col-lg-6">
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
    <div class="col-lg-6">


                 <h1>Ultimas noticias</h1>
        <?php $loop = new WP_Query(array('posts_per_page' => 5));  
            $count =0;  
        ?>
        <?php if($loop) { ?>   
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
                  
                        <a href="<?php the_permalink() ?>">  
                            <?php  
                                if(has_post_thumbnail()){  
                                    the_post_thumbnail('medium');  
                                } else {
                                    echo '<img src="holder.js/300x300" alt="No image" >';
                                }
                            ?>  
                        </a>    

                        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                        <?php 
                            global $more;
                            $more = 0;
                            the_content("More...");
                        ?> 

                        <span class="tags">
                            <strong><?php echo __('Etiquetado como: ') ?></strong>
                            <?php  
                                // Fetching the tag names with respect to the post and displaying them  
                                $args = array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'names');  
                                echo implode(wp_get_object_terms( $post->ID, 'tag', $args),', ');  
                            ?>  
                        </span>
            <?php endwhile; ?>  
                
                
        <?php } ?>  
        <?php wp_reset_query(); ?>
        <!-- End Video Blog -->


    </div>
</div>

<?php get_footer(); ?>